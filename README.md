# Rebilly OpenAPI Definitions

-   Our website (www.rebilly.com) is powered by [Redocly Revel](https://redocly.com/developer-portal/).
-   Our API reference is powered by [Redocly Realm](https://redocly.com/product-updates/).

TBD: Add Redocly validation status badge.

## View API docs

To view the full Rebilly API reference documentation, go to [https://www.rebilly.com/catalog/all/](https://www.rebilly.com/catalog/all/).

The full Rebilly API reference documentation has over 500 operations. This is likely more than you may need to implement your use cases. If you would like to implement a particular use case, [contact Rebilly](https://www.rebilly.com/support/) for guidance and feedback on the best API operations to use for the task.

To integrate Rebilly, and learn about related resources and concepts,
see [Get started](https://www.rebilly.com/docs/dev-docs/get-started/).

## Contributing

[Read our contribution guide](./CONTRIBUTING.md).

## Environment setup

If you use VS Code, use the [Redocly VS Code extension](https://marketplace.visualstudio.com/items?itemName=Redocly.openapi-vs-code) to edit this repo and get inline lint feedback and previews.

### Install

1. Install [Node JS](https://nodejs.org/) (version 14 or more recent)
2. Clone repo and run `npm ci` in the repo root

### Usage

#### Preview

This process describes how to start a development server docs preview for the Rebilly API docs.
Changes made to the API specification while the development server is running are immediately displayed in the docs preview.

Rebilly uses [Redocly](https://redocly.com/) to generate, manage, and preview API docs.

1. In a terminal, install the [Redocly CLI](https://github.com/Redocly/redocly-cli). \
   Use this command to install the package globally on your machine: `npm install @redocly/cli -g`
1. [Sign in or create a Redocly account](https://app.redocly.com/signup). \
   If you are a Rebilly employee, sign in using SSO and your Rebilly email address.
1. In Redocly, in the top right of the screen, click your name, then click **My profile**.
1. In the **Personal API keys** section, click **Add API key**.
1. Enter an API key name, then click **Save**.
1. Copy the API key.
1. In a terminal, execute the following command: `npx @redocly/cli login`.
1. When prompted, paste your API key.
1. Execute one of the following commands to start a development server docs preview:
    - Core API docs: `npx @redocly/cli preview-docs core@latest`
    - All API docs: `npx @redocly/cli preview-docs all@latest`
1. In a web browser, open the preview server URL that is displayed in the terminal.

#### Bundle

Run `npm run build-for-js-sdk` to bundle the definitions into a single file in the `dist` folder.

#### Validate

Run `npx @redocly/cli lint` to validate the definitions.
