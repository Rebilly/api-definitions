# OpenAPI specification extensions
This document contains all OpenAPI extensions used in the Rebilly API definitions.

* `x-multiline`
  This flag is currently used in the configuration schemas for payment gateways (`openapi/components/schemas/GatewayAccountConfig`).
  The main use case is for gateways that require OpenSSL keys in their configuration.

| Field name    | Type    | Description                                              |
| ------------- | ------- | -------------------------------------------------------- |
| `x-multiline` | Boolean | Flag indicating whether a field expects multiline input  |
