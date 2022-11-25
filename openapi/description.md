# Introduction
[comment]: <> (x-product-description-placeholder)
The Rebilly API is built on HTTP.
Our API is RESTful.
It has predictable resource URLs.
It returns HTTP response codes to indicate errors.
It also accepts and returns JSON in the HTTP body.
You can use your favorite HTTP/REST library for your programming language to use the API,
or you can use one of our SDKs (currently available in [PHP](https://github.com/Rebilly/rebilly-php) and [Javascript](https://github.com/Rebilly/rebilly-js-sdk)).

We have other APIs that are also available.
Every action from our [app](https://app.rebilly.com) is supported by an API which is documented and available for use so that you may automate any workflows necessary.
This document contains the most commonly integrated resources.

# Authentication

This topic describes the different forms of authentication that are available in the Rebilly API, and how to use them.

Rebilly offers four forms of authentication: secret key, publishable key, JSON Web Tokens, and public signature key.

- Secret API key: Use to make requests from the server side. Never share these keys. Keep them guarded and secure.
- Publishable API key: Use in your client-side code to tokenize payment information.
- JWT: Use to make short-life tokens that expire after a set period of time.

<!-- ReDoc-Inject: <security-definitions> -->

## Manage API keys

To create or manage API keys, select one of the following:

- Use the Rebilly UI: In the left navigation bar, click **Automations**, **Integrations**, **Custom integrations**, then click **API keys**.
- Use the Rebilly API: go to [API Keys](https://user-api-docs.rebilly.com/#tag/API-Keys).

For more information, see [API keys](https://www.rebilly.com/docs/concepts-and-features/concept/api-keys).

# Errors
Rebilly follow's the error response format proposed in [RFC 7807](https://tools.ietf.org/html/rfc7807) also known as Problem Details for HTTP APIs.  As with our normal API responses, your client must be prepared to gracefully handle additional members of the response.

## Forbidden
<RedocResponse pointer={"#/components/responses/Forbidden"} />

## Conflict
<RedocResponse pointer={"#/components/responses/Conflict"} />

## NotFound
<RedocResponse pointer={"#/components/responses/NotFound"} />

## Unauthorized
<RedocResponse pointer={"#/components/responses/Unauthorized"} />

## ValidationError
<RedocResponse pointer={"#/components/responses/ValidationError"} />

# SDKs

Rebilly offers a Javascript SDK and a PHP SDK to help interact with
the API.  However, no SDK is required to use the API.

Rebilly also offers [FramePay](https://docs.rebilly.com/docs/developer-docs/framepay/),
 a client-side iFrame-based solution to help
create payment tokens while minimizing PCI DSS compliance burdens
and maximizing the customization ability. [FramePay](https://docs.rebilly.com/docs/developer-docs/framepay/)
is interacting with the [payment tokens creation operation](https://api-reference.rebilly.com/tag/Payment-Tokens#operation/PostToken).

## Javascript SDK

Installation and usage instructions can be found [here](https://docs.rebilly.com/docs/developer-docs/sdks).
SDK code examples are included in these docs.

## PHP SDK
For all PHP SDK examples provided in these docs you need to configure the `$client`.
You may do it like this:

```php
$client = new Rebilly\Client([
    'apiKey' => 'YourApiKeyHere',
    'baseUrl' => 'https://api.rebilly.com',
]);
```

# Using filter with collections
Rebilly provides collections filtering. You can use `?filter` param on collections to define which records should be shown in the response.

Here is filter format description:

- Fields and values in filter are separated with `:`: `?filter=firstName:John`.

- Sub-fields are separated with `.`: `?filter=billingAddress.country:US`.

- Multiple filters are separated with `;`: `?filter=firstName:John;lastName:Doe`.
  They are joined with `AND` logic. In this example: `firstName:John` AND `lastName:Doe`.

- You can use multiple values using `,` as values separator: `?filter=firstName:John,Bob`.
  Multiple values specified for a field are joined with `OR` logic. In this example: `firstName:John` OR `firstName:Bob`.

- To negate the filter use `!`: `?filter=firstName:!John`.
  Note that you can negate multiple values like this: `?filter=firstName:!John,!Bob`.
  This filter rule excludes all Johns and Bobs from the response.

- You can use range filters like this: `?filter=amount:1..10`.

- You can use gte (greater than or equals) filter like this: `?filter=amount:1..`, or lte (less than or equals) than filter like this: `?filter=amount:..10`.
  This also works for datetime-based fields.

- You can create some [specified values lists](https://user-api-docs.rebilly.com/#tag/Lists) and use them in filter: `?filter=firstName:@yourListName`.
  You can also exclude list values: `?filter=firstName:!@yourListName`.

- Datetime-based fields accept values formatted using RFC 3339 like this: `?filter=createdTime:2021-02-14T13:30:00Z`. 

# Expand to include embedded objects
Rebilly provides the ability to pre-load additional objects with a request. 

You can use `?expand` param on most requests to expand and include embedded objects within the `_embedded` property of the response.

The `_embedded` property contains an array of 
objects keyed by the expand parameter value(s).

You may expand multiple objects by passing them
as comma-separated to the expand value like so:

```
?expand=recentInvoice,customer
```

And in the response, you would see:

```
"_embedded": [
    "recentInvoice": {...},
    "customer": {...}
]
```
Expand may be used not only on `GET` requests but also on `PATCH`, `POST`, `PUT` requests too.

# Getting started guide

This API has over [500 operations](https://api-reference-all.rebilly.com).
That's more than you need to implement your use cases.
If you have a use case you would like to implement,
please consult us for feedback on the best API operations for the task.

Our [getting started guides](https://www.rebilly.com/docs/content/dev-docs/concept/integrations/) demonstrates payment form use cases.
It allows us to highlight core resources in Rebilly that are helpful for many other use cases too.
