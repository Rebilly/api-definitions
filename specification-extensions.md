# OpenAPI specification extensions
This document contains all OpenAPI extensions used in the Rebilly API definitions.

* `x-multiline`
  This flag is currently used in the configuration schemas for payment gateways (`openapi/components/schemas/GatewayAccountConfig`).
  The main use case is for gateways that require OpenSSL keys in their configuration.

| Field name    | Type    | Description                                              |
| ------------- | ------- | -------------------------------------------------------- |
| `x-multiline` | Boolean | Flag indicating whether a field expects multiline input  |

* `x-product`
  This property declares operations that must be included into the specific API definition bundle.
  See more [here](plugins/products-bundler/README.md).

* `x-is-free-form`
  This flag is currently used for the php sdk autogeneration. It indicates that the schema should not be generated as a model.

* `x-enum-mapping`
  This property enumerates the mapping options for a custom discriminator schema. For example `openapi/components/schema/ReadyToPay/Adjust/AdjustPaymentMethod.yaml`.

* `x-no-generate`
  This flag is used for the php sdk autogeneration. It indicates that the schema should not be generated. Any updates in schemas with this flag requires a manual update of the sdk.

* `x-abstract-parent`
  This property is used for the php sdk autogeneration. It indicates the parent abstract class in the case the generator is not able to properly define it.

* `x-no-abstract-methods`
  This flag is used for the php sdk autogeneration. It indicates that the generated model will not implement getters nor setters.
