# Introduction
[comment]: <> (x-product-description-placeholder)
The Rebilly API is built on HTTP and is RESTful.
It has predictable resource URLs and returns HTTP response codes to indicate errors.
It also accepts and returns JSON in the HTTP body.
Use your favorite HTTP/REST library in your programming language when using this API,
or use one of the Rebilly SDKs,
which are available in [PHP](https://github.com/Rebilly/rebilly-php) and [JavaScript](https://github.com/Rebilly/rebilly-js-sdk).

Every action in the [Rebilly UI](https://app.rebilly.com) is supported by an API which is documented and available for use, so that you may automate any necessary workflows or processes.
This API reference documentation contains the most commonly integrated resources.

# Authentication

This topic describes the different forms of authentication that are available in the Rebilly API, and how to use them.

Rebilly offers four forms of authentication: secret key, publishable key, JSON Web Tokens, and public signature key.

- Secret API key: Use to make requests from the server side. Never share these keys. Keep them guarded and secure.
- Publishable API key: Use in your client-side code to tokenize payment information.
- JWT: Use to make short-life tokens that expire after a set period of time.

<!-- ReDoc-Inject: <security-definitions> -->

## Manage API keys

To create or manage API keys, select one of the following:

- Use the Rebilly UI: see [Manage API keys](https://www.rebilly.com/docs/dev-docs/api-keys/#manage-api-keys)
- Use the Rebilly API: see the [API key operations](https://all-rebilly.redoc.ly/tag/API-keys).

For more information on API keys, see [API keys](https://www.rebilly.com/docs/concepts-and-features/concept/api-keys).

# Errors
Rebilly follows the error response format proposed in [RFC 7807](https://tools.ietf.org/html/rfc7807), which is also known as Problem Details for HTTP APIs. As with any API responses, your client must be prepared to gracefully handle additional members of the response. The following section describes common error types.

## Forbidden

{% openapi-response
    openApiFilePath="./index.yaml"
    pointer="#/components/responses/Forbidden"
/%}

## Conflict

{% openapi-response
    openApiFilePath="./index.yaml"
    pointer="#/components/responses/Conflict"
/%}

## NotFound

{% openapi-response
    openApiFilePath="./index.yaml"
    pointer="#/components/responses/NotFound"
/%}

## Unauthorized

{% openapi-response
    openApiFilePath="./index.yaml"
    pointer="#/components/responses/Unauthorized"
/%}

## ValidationError

{% openapi-response
    openApiFilePath="./index.yaml"
    pointer="#/components/responses/ValidationError"
/%}

# SDKs

Rebilly provides a JavaScript SDK and a PHP SDK to help interact with the Rebilly API.
However, no SDK is required to use the API.

Rebilly also provides [FramePay](https://www.rebilly.com/docs/developer-docs/framepay/),
a client-side iFrame-based solution, to help create payment tokens while minimizing PCI DSS compliance burdens
and maximizing your customization ability.
[FramePay](https://www.rebilly.com/docs/developer-docs/framepay/) interacts with the [payment tokens creation operation](https://all-rebilly.redoc.ly/tag/Payment-tokens/operation/PostToken).

## JavaScript SDK

For installation and usage instructions, see [SDKs](https://www.rebilly.com/docs/dev-docs/sdks/).
All JavaScript SDK code examples are included in the API reference documentation.

## PHP SDK

For installation and usage instructions, see [SDKs](https://www.rebilly.com/docs/dev-docs/sdks/).
All SDK code examples are included in the API reference documentation.
To use them, you must configure the `$client` as follows:

```php
$client = new Rebilly\Client([
    'apiKey' => 'YourApiKeyHere',
    'baseUrl' => 'https://api.rebilly.com',
]);
```

# Using filter with collections

Rebilly provides collections filtering. Use the `?filter` parameter on collections to define which records should be shown in the response.

Format description:

- Fields and values in the filter are separated with `:`: `?filter=firstName:John`.

- Sub-fields are separated with `.`: `?filter=billingAddress.country:US`.

- Multiple filters are separated with `;`: `?filter=firstName:John;lastName:Doe`. \
  They are joined with `AND` logic. Example: `firstName:John` AND `lastName:Doe`.

- To use multiple values, use `,` as values separators: `?filter=firstName:John,Bob`. \
  Multiple values specified for a field are joined with `OR` logic. Example: `firstName:John` OR `firstName:Bob`.

- To negate the filter, use `!`: `?filter=firstName:!John`.

- To negate multiple values, use: `?filter=firstName:!John,!Bob`.
  This filter rule excludes all `Johns` and `Bobs` from the response.

- To use range filters, use: `?filter=amount:1..10`.

- To use a gte (greater than or equals) filter, use: `?filter=amount:1..`.
  This also works for datetime-based fields.
  
- To use a lte (less than or equals) filter, use: `?filter=amount:..10`.
  This also works for datetime-based fields.

- To create [specified values lists](https://all-rebilly.redoc.ly/#tag/Lists) and use them in filters, use: `?filter=firstName:@yourListName`. \
  You can also exclude list values: `?filter=firstName:!@yourListName`. \
  Use value lists to compare against a list of data when setting conditions for rules or binds,
  or applying filters to data table segments.
  Commonly used lists contain values related to conditions that target specific properties such as: customers, transactions, or BINs.

- Datetime-based fields accept values formatted using RFC 3339. Example: `?filter=createdTime:2021-02-14T13:30:00Z`.

# Expand to include embedded objects

Rebilly provides the ability to pre-load additional objects with a request.

You can use the `?expand` parameter on most requests to expand and include embedded objects within the `_embedded` property of the response.
The `_embedded` property contains an array of objects keyed by the expand parameter values.
To expand multiple objects, pass them as a comma-separated list of objects.

Example request containing multiple objects:

```
?expand=recentInvoice,customer
```

Example response:

```
"_embedded": [
    "recentInvoice": {...},
    "customer": {...}
]
```

Expand may be used on `GET`, `PATCH`, `POST`, `PUT` requests.

# Limit on collections offset

For performance reasons, take note that we have a `1000` limit on `?offset=...`.
For example, attempting to retrieve a collection using `?offset=1001` or `?offset=2000` returns the same results as if you used `?offset=1000`. 

Visit our [Data Exports API](https://all-rebilly.redoc.ly/tag/Data-exports) for an asynchronous solution. 

# Get started

The full [Rebilly API](https://all-rebilly.redoc.ly/) has over 500 operations.
This is likely more than you may need to implement your use cases.
If you would like to implement a particular use case,
[contact Rebilly](https://www.rebilly.com/support/) for guidance and feedback on the best API operations to use for the task.

To integrate Rebilly, and learn about related resources and concepts,
see [Get started](https://www.rebilly.com/docs/dev-docs/get-started/).
