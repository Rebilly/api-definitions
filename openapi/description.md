# Introduction
[comment]: <> (x-product-description-placeholder)
The Rebilly API is built on HTTP and is RESTful.
It has predictable resource URLs and returns HTTP response codes to indicate errors.
It also accepts and returns JSON in the HTTP body.
Use your favorite HTTP/REST library in your programming language when using this API,
or use one of the Rebilly SDKs,
which are available in [PHP](https://github.com/Rebilly/rebilly-php) and [JavaScript](https://www.npmjs.com/package/rebilly-js-sdk).

Every action in the [Rebilly UI](https://app.rebilly.com) is supported by an API which is documented and available for use, so that you may automate any necessary workflows or processes.
This API reference documentation contains the most commonly integrated resources.

# Authentication

This topic describes the different forms of authentication that are available in the Rebilly API, and how to use them.

Rebilly offers four forms of authentication: secret key, publishable key, JSON Web Tokens, and public signature key.

- Secret API key: Use to make requests from the server side.
  Never share these keys.
  Keep them guarded and secure.
- Publishable API key: Use in your client-side code to tokenize payment information.
- JWT: Use to make short-life tokens that expire after a set period of time.

<!-- ReDoc-Inject: <security-definitions> -->

## Manage API keys

To create or manage API keys, select one of the following:

- Use the Rebilly UI: see [Manage API keys](https://www.rebilly.com/docs/dev-docs/api-keys/#manage-api-keys)
- Use the Rebilly API: see the [API key operations](https://www.rebilly.com/catalog/all/api-keys).

For more information on API keys, see [API keys](https://www.rebilly.com/docs/concepts-and-features/concept/api-keys).

# Errors
Rebilly follows the error response format proposed in [RFC 9457](https://tools.ietf.org/html/rfc9457), which is also known as Problem Details for HTTP APIs.
As with any API responses, your client must be prepared to gracefully handle additional members of the response.

# SDKs

Rebilly provides a JavaScript SDK and a PHP SDK to help interact with the Rebilly API.
However, no SDK is required to use the API.

Rebilly also provides [FramePay](https://www.rebilly.com/docs/developer-docs/framepay/),
a client-side iFrame-based solution, to help create payment tokens while minimizing PCI DSS compliance burdens
and maximizing your customization ability.
[FramePay](https://www.rebilly.com/docs/developer-docs/framepay/) interacts with the [payment tokens creation operation](https://www.rebilly.com/catalog/all/payment-tokens/posttoken).

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

# Get started

The full [Rebilly API](https://www.rebilly.com/catalog/all/) has over 500 operations.
This is likely more than you may need to implement your use cases.
If you would like to implement a particular use case,
[contact Rebilly](https://www.rebilly.com/support/) for guidance and feedback on the best API operations to use for the task.

To integrate Rebilly, and learn about related resources and concepts,
see [Get started](https://www.rebilly.com/docs/dev-docs#get-started).

To create and manage API keys, see [API keys](https://www.rebilly.com/docs/dev-docs/api-keys/).

# Rate limits

Rebilly enforces rate limits on the API to ensure that no single organization consumes too many resources.
Rate limits are applied to the organization, and not to the API key.
In sandbox environment, rate limits are enforced for non-GET endpoints and are set at 3000 requests per 10 minutes.
You can find the exact number of consumed requests in the `X-RateLimit-Limit` and `X-RateLimit-Remaining` headers in the response.
If the rate limit is exceeded, the API returns a `429 Too Many Requests` response
and a `X-RateLimit-Retry-After` header that includes a UTC timestamp of when the rate limit resets.
