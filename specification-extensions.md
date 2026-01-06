# OpenAPI specification extensions
This document contains all OpenAPI extensions used in the Rebilly API definitions.

* `x-basic` is a boolean that specifies if the field appears by default in data tables and data exports.

* `x-multiline`
  This flag is currently used in the configuration schemas for payment gateways (`openapi/components/schemas/GatewayAccountConfig`).
  The main use case is for gateways that require OpenSSL keys in their configuration.

| Field name    | Type    | Description                                              |
| ------------- | ------- | -------------------------------------------------------- |
| `x-multiline` | boolean | Flag indicating whether a field expects multiline input  |

* `x-product`
  This property declares operations that must be included into the specific API definition bundle.
  For more information, see [Products bundler](/api-definitions/plugins/products-bundler/README.md).

* `x-is-free-form`
  This flag is used for PHP SDK auto-generation. It indicates that the schema should not be generated as a model.
