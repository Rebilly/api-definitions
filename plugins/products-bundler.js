const id = 'products-bundler';

// AML
// API Keys
// Activity Feed
// Balance transactions
// Billing Portals
// Blocklists
// Broadcast Messages
// Checkout Forms
// Coupons
// Custom Fields
// Customer Authentication
// Customers
// Customers Timeline
// Data Exports
// Disputes
// Email Credentials
// Email Delivery Settings
// Email Messages
// Email Notifications
// Experian credentials
// Fees
// Files
// Gateway Accounts
// Histograms
// Integrations
// Invoices
// JWT Session
// KYC Documents
// Lists
// Memberships
// Metadata
// Orders
// Organizations
// Payment Cards
// Payment Instruments
// Payment Tokens
// Plans
// Products
// Profile
// Reports
// Reset password
// Roles
// Rules
// Search
// Segments
// Shipping Zones
// Status
// Tags
// TaxJar credentials
// Taxes
// Tracking
// Transactions
// Users
// Webhook Credentials
// Webhooks
// Websites

const PRODUCTS = [
  {
    name: 'Payments',
    tagGroups: [
      {
        name: 'Customers',
        description: 'Some custom description for Customers group',
        tags: [
          'Customers',
          'Customer Authentication',
          'Customers Timeline',
        ]
      },
      {
        name: 'Payment Instruments',
        description: 'Some custom description for Payment Instruments group',
        tags: [
          'Payment Cards',
          'Payment Instruments',
          'Payment Tokens',
        ]
      },
      {
        name: 'Payments',
        description: 'Some custom description for Payment Payments group',
        tags: [
          'Transactions',
          'Balance Transactions',
        ]
      }
    ]
  }, {
    name: 'Billing',
    tagGroups: [
      {
        name: 'Customers',
        description: 'Some custom description for Customers group',
        tags: [
          'Customers',
          'Customer Authentication',
          'Customers Timeline',
        ]
      },
      {
        name: 'Payment Instruments',
        description: 'Some custom description for Payment Instruments group',
        tags: [
          'Payment Cards',
          'Payment Instruments',
          'Payment Tokens',
        ]
      },
      {
        name: 'Orders and Invoices',
        description: 'Some custom description for Order And Invoices group',
        tags: [
          'Payment Cards',
          'Payment Instruments',
          'Payment Tokens',
        ]
      },
      {
        name: 'Payments',
        description: 'Some custom description for Payments group',
        tags: [
          'Transactions',
          'Balance Transactions',
        ]
      }
    ]
  }
];

function getProductMappingToBundle() {
  if (!('API_BUNDLED_PRODUCT' in process.env)) {
    return;
  }

  const requestedProduct = process.env.API_BUNDLED_PRODUCT;

  return PRODUCTS.find((productMapping) => {
    return productMapping.name === requestedProduct;
  })
}

/** @type {import('@redocly/openapi-cli').CustomRulesConfig} */
const decorators = {
  oas3: {
    'bundle-product': () => {
      return {
        DefinitionRoot: {
          leave(definitionRoot, ctx) {
            const productMapping = getProductMappingToBundle();

            if (!productMapping) {
              // Use default bundling settings
              return;
            }

            // Determine tags names participating in a result bundle of a requested product
            let tagsNamesToInclude = [];
            productMapping.tagGroups.forEach((tagGroup) => {
              tagsNamesToInclude = tagsNamesToInclude.concat(tagGroup.tags);
            });

            // Determine tags definitions that should be included into result bundle of a requested product
            const newTags = [];
            definitionRoot.tags.forEach((tag) => {
              if (tagsNamesToInclude.indexOf(tag.name) !== -1) {
                newTags.push(tag)
              }
            });

            // Determine paths that should be included into result bundle of a requested product
            const newPaths = {};
            const availableMethods = ['get', 'put', 'post', 'delete', 'options', 'head', 'patch', 'trace'];
            for (const [path, definitionRef] of Object.entries(definitionRoot.paths)) {
              let hasAtLeastOneOperation = false;
              const definition = ctx.resolve(definitionRef).node;
              availableMethods.forEach((method) => {
                if (!(method in definition)) {
                  // Method not defined for path, skipping
                  return;
                }

                const operation = definition[method];
                if (!('tags' in operation)) {
                  // Operation has no tags specified, excluding as tags must be defined explicitly
                  return;
                }

                const requiredTags = operation.tags.filter((tagName) => tagsNamesToInclude.indexOf(tagName) !== -1)
                if (requiredTags.length !== 0) {
                  // Remove tags that are not participating in any of tag groups of a requested products
                  operation.tags = requiredTags;
                  hasAtLeastOneOperation = true;
                } else {
                  delete definition[method];
                }
              });

              if (hasAtLeastOneOperation) {
                newPaths[path] = definition;
              }
            }

            // TODO: do the same for x-webhooks
            // TODO: wind a way to filter schemas

            definitionRoot['x-tagGroups'] = productMapping.tagGroups;
            definitionRoot['tags'] = newTags;
            definitionRoot['paths'] = newPaths;
          }
        }
      }
    },
  },
};

module.exports = {
  id,
  decorators,
};
