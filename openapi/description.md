# Introduction
The Rebilly API is built on HTTP.  Our API is RESTful.  It has predictable
resource URLs.  It returns HTTP response codes to indicate errors.  It also
accepts and returns JSON in the HTTP body.  You can use your favorite
HTTP/REST library for your programming language to use Rebilly's API, or
you can use one of our SDKs (currently available in [PHP](https://github.com/Rebilly/rebilly-php)
and [Javascript](https://github.com/Rebilly/rebilly-js-sdk)).

We have other APIs that are also available.  Every action from our [app](https://app.rebilly.com)
is supported by an API which is documented and available for use so that you
may automate any workflows necessary.  This document contains the most commonly
integrated resources.

# Authentication
When you sign up for an account, you are given your first secret API key.
You can generate additional API keys, and delete API keys (as you may
need to rotate your keys in the future). You authenticate to the
Rebilly API by providing your secret key in the request header.

Rebilly offers three forms of authentication:  secret key, publishable key, JSON Web Tokens, and public signature key.
- [Secret API key](#section/Authentication/SecretApiKey): used for requests made
  from the server side. Never share these keys. Keep them guarded and secure.
- [Publishable API key](#section/Authentication/PublishableApiKey): used for 
  requests from the client side. For now can only be used to create 
  a [Payment Token](#operation/PostToken) and 
  a [File token](#operation/PostFile).
- [JWT](#section/Authentication/JWT): short lifetime tokens that can be assigned a specific expiration time.

Never share your secret keys. Keep them guarded and secure.

<!-- ReDoc-Inject: <security-definitions> -->

# SDKs

Rebilly offers a Javascript SDK and a PHP SDK to help interact with
the API.  However, no SDK is required to use the API.

Rebilly also offers [FramePay](https://rebilly.github.io/framepay-docs/),
 a client-side iFrame-based solution to help
create payment tokens while minimizing PCI DSS compliance burdens
and maximizing the customizability. [FramePay](https://rebilly.github.io/framepay-docs/)
is interacting with the [payment tokens creation operation](#operation/PostToken).

## Javascript SDK

The [Javascript SDK](https://github.com/Rebilly/rebilly-js-sdk) is maintained 
within Github, and contains the installation and usage instructions.

## PHP SDK
For all PHP SDK examples provided in these docs you will need to configure the `$client`.
You may do it like this:

```php
$client = new Rebilly\Client([
    'apiKey' => 'YourApiKeyHere',
    'baseUrl' => 'https://api.rebilly.com',
]);
```

# Using filter with Collections
Rebilly provides collections filtering. You can use `?filter` param on collection to define which records should be shown in the response.

Here is filter format description:

- Fields and values in filter are separated with `:`: `?filter=firstName:John`.

- Fields in filter are separated with `;`: `?filter=firstName:John;lastName:Doe`.

- You can use multiple values using `,` as values separator: `?filter=firstName:John,Bob`.

- To negate the filter use `!`: `?filter=firstName:!John`. Note that you can negate multiple values like this: `?filter=firstName:!John,Bob`. This filter rule will exclude all Johns and Bobs from the response.

- You can use range filters like this: `?filter=amount:1..10`.

- You can use gte (greater than or equals) filter like this: `?filter=amount:1..`, or lte (less than or equals) than filter like this: `?filter=amount:..10`.

- You can create some [predefined values lists](https://user-api-docs.rebilly.com/#tag/Lists) and use them in filter: `?filter=firstName:@yourListName`. You can also exclude list values: `?filter=firstName:!@yourListName`

# Expand to Include Embedded Objects
Rebilly provides the ability to pre-load additional 
objects with a request. 

You can use `?expand` param on most requests to expand
and include embedded objects within the
`_embedded` property of the response.

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
Expand may be utilitized not only on `GET` requests but also on `PATCH`, `POST`, `PUT` requests too.


# Getting Started Guide

Rebilly's API has over 300 operations.  That's more than you'll 
need to implement your use cases.  If you have a use 
case you would like to implement, please consult us for
feedback on the best API operations for the task.

Our getting started guide will demonstrate a basic order form use
case.  It will allow us to highlight core resources
in Rebilly that will be helpful for many other use cases
too.

Within 25 minutes, you'll have sent API requests (via our console)
to create a subscription order.

[Click here to visit our API Guide Tutorial](https://api-guides.rebilly.com/).
