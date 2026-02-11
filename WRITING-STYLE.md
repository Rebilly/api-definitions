# Writing style

This topic provides guidance on how to write API documentation descriptions.

## General guidance

- Start all sentences with a capital letter and end them with a period (except summaries).
- Add meaningful descriptions to all operations, objects, and parameters.
- Avoid using [possessive apostrophes](#possessive-apostrophes) for inanimate objects.
- Avoid future (often includes "will") and past tense (often includes words ending in "ed").
- Avoid [passive voice](https://developers.google.com/tech-writing/one/active-voice).
- Avoid using ("should", "could", "can").
- To add multi-lined descriptions, after a `description:`, add one space, then insert `|-`.
  This escapes the YAML formatting and enables the use of Markdown.

## Avoid knowledge bias

Do not assume that the reader has the same knowledge of the product as you.
We all do this to some extent.
This is a cognitive bias known as the [Curse of knowledge](https://effectiviology.com/curse-of-knowledge).

> The curse of knowledge is a cognitive bias that occurs when an individual, communicating with other individuals, unknowingly assumes that the others have the background to understand.

Avoid this bias by describing information that may seem obvious to you when writing.
For example, when describing the `hardLimit` field , describe what that value is and how it works in a Rebilly context, or link to detailed information.

### Undesired example of the knowledge bias

```yaml
  hardLimit:
    type: [ 'object', 'null' ]
    description: Hard usage limit.
```

This field may be obvious to you if you have expert knowledge of the product.
The reader may not.

If the reader does not know exactly what a hard limit is or are how it works in Rebilly, they need to search the docs to find out, and then come back to API docs.
This is frustrating for the reader.
It's infuriating if they need to continually do this to understand an API.
Over time, if the reader is persistent, they will learn these concepts themselves.
This is a major hurdle for new users to overcome.
Many readers may simply quit, or may label the docs as "bad" and not use them, or our product.

### Example which avoids knowledge bias

This description provides detail on what a hard limit is.

```yaml
  hardLimit:
    type: [ 'object', 'null' ]
    description: |-
      Defines a limit where the customer can no longer use the service.
      Hard limits are used in addition to soft limits.
      
      When a soft limit is reached,
      a customer may receive a notification
      but the service can still be provided up to the hard limit value so that the customer can upgrade their plan.
      When the reported usage reaches the configured limit,
      a specific event is triggered.

      To notify the customer in the merchant system, or block a service,
      a webhook and notification can be configured for this event.
      When the total usage reaches the hard limit quantity, or amount values,
      metered billing plan usages can no longer be reported.
```

## Possessive apostrophes

Possessive apostrophes (`'s`) indicate ownership.
Do not assign ownership to inanimate objects.
This is [anthropomorphic](https://www.oreilly.com/library/view/microsoft-manual-of/9780735669833/ch01s03.html), and in some instances, may infer a hierarchy.

### Examples

People:

- Update a customer's email address. ✅

Inanimate objects:

- Update a subscription's invoice. ❌
- Update an invoice for a subscription. ✅
- Edit an invoice's items. ❌
- Edit invoice items. ✅
- Edit the items of an invoice. ✅

Acronyms:

- KYC's settings configure risk score threshold and weight options. ❌
- Use KYC settings to configure risk score threshold and weight options. ✅

Products:

- Use Rebilly's data tables to view customer data. ❌
- Use data tables in Rebilly to view customer data. ✅
- To view customer data in Rebilly, use data tables. ✅

Features:

- Use revenue recognition's MRR report to view predictable recurring revenue. ❌
- Use the revenue recognition MRR report to view predictable recurring revenue. ✅
- Use the MRR report in revenue recognition to view predictable recurring revenue. ✅
- To view predictable recurring revenue, use the MRR report in revenue recognition. ✅

## Anthropomorphic verbs

Do not attribute human actions or capabilities to inanimate objects.
This is [anthropomorphic](https://www.oreilly.com/library/view/microsoft-manual-of/9780735669833/ch01s03.html).
Inanimate objects such as operations, features, or settings cannot "enable", "allow", "let", "help", or "prevent" actions.
Instead, describe what the user does with the object.

### Examples

Tag descriptions:

- Application owner operations enable you to register applications. ❌
- Use application owner operations to register applications. ✅
- Gateway account operations allow you to manage payment gateways. ❌
- Use gateway account operations to manage payment gateways. ✅

Feature descriptions:

- This feature allows you to customize settings. ❌
- Use this feature to customize settings. ✅
- KYC verification helps you validate customer identity. ❌
- Use KYC verification to validate customer identity. ✅

## Acronyms

An acronym is an abbreviation formed from the initial letters of words that are often used together.
Acronyms are often pronounced as a word, or each letter is spelt.

Do not assume that your audience will understand and be familiar with all acronyms, especially acronyms for financial terms or for state bodies that are specific to one country.
It is important to be consistent in our use of acronyms and related descriptions.
If we are not, we may confuse our audience.

In descriptions, define acronyms that may not be commonly used in their first instance.
Thereafter, use the acronym.

Example:

- First usage: Treasury Inflation Protected Securities (TIPS)
- Thereafter: TIPS

## Capitalization

Use sentence-style capitalization for all descriptions.
Capitalize the first letter of the first word and use lowercase thereafter.

### Exceptions

[Proper nouns](https://www.gingersoftware.com/content/grammar-rules/nouns/proper-noun/), including brand, product, and service names, must always be capitalized.

### Examples

- Installs the application.
- Tests your system.
- Checks system settings.
- Retrieves HD movies, TV shows, and more.
- 1 GB of cloud storage.
- Available for Microsoft partners.

## Line breaks

Use [semantic line breaks](https://sembr.org/).
This standard specifies that you must add a line break after each substantial unit of thought.
A written unit of thought ends with punctuation.
Only add a new line after a period, or a comma.

### Examples

```yaml
   description: |-
     Total number of allowed document upload attempts.
     Use `0` to allow unlimited upload attempts.
```

```yaml
  description: |-
    Property weights that are used for the KYC document verification process.

    All KYC documents start the verification process with a score of 100.
    If a check fails, the score is reduced by the corresponding weight.
    For example, if the `firstName` check weight is set to `5`, and the check fails,
    the KYC document score becomes `95`.
```

## Noun strings (or noun stacks)

Avoid using a series of nouns together consecutively.
This can make descriptions difficult to understand because it may not be clear which words are modifier nouns and which noun is the object.
In writing, this is known as a [noun string (or noun stack)](https://www.plainlanguage.gov/guidelines/words/avoid-noun-strings/).
This often occurs in business and technical content when the author attempts to make content concise, but mistakenly removes important context.

To avoid noun strings, place the modifier noun before the noun that it modifies.
This makes it easier to understand the relationship between the words.
This often requires the use of articles (a, an, the) and prepositions (of, from, in, on, to, for ...).

### Examples

<details>
<summary> Example 1</summary>

#### Incorrect use

```yaml
scope:
  description: API key scope.
```
| Noun (object)| modifier noun| |
|---|---|---|
| API key| scope |  ❌  |

#### Correct use

```yaml
scope:
  description: Scope of the API key.
```

| Modifier noun | preposition & article | noun (object)| |
|---|---|---|---|
| Scope| of the | API key |  ✅ |

</details>

<details>
<summary> Example 2 </summary>

#### Incorrect use

```yaml
creationTime:
  description: Coupon creation time.
```

| Noun (object)| modifier noun | noun | |
|---|---|---|---|
| Coupon | creation | time | ❌ |

#### Correct use

```yaml
creationTime:
  description: Time when the coupon was created.
```

| Noun | conjunction & article | noun (object)| verb | modifier noun | |
|---|---|---|---|---|---|
| Time| when the | coupon | was | created | ✅ |

</details>

<details>
<summary> Example 3</summary>

#### Incorrect use

```yaml
organizationName:
  description: Organization name
```

| Noun (object)| noun | |
|---|---|---|
| Organization| name | ❌ |

#### Correct use

```yaml
organizationName:
  description: Name of the organization.
```

| Noun | preposition & article | noun (object)| |
|---|---|---|---|
| Name| of the | organization | ✅ |

</details>

<details>
<summary> Example 4</summary>

#### Incorrect use

```yaml
taxNumberType:
  description: Tax number type.
```

| Noun (object) | modifier noun | |
|---|---|---|
| Tax number | type | ❌ |

#### Correct use

```yaml
taxNumberType:
  description: Type of tax number.
```

| Noun | preposition | noun (object)| |
|---|---|---|---|
| Type | of | tax number | ✅ |

</details>

## Tags

We use tags to group related operations.
When searching operations, the reader may look at the tag description for the context.
It is important that we add detail to these descriptions and link to related content if required.

### Tag example

```yaml
- name: Customers
  description: |-
    A customer is an entity that purchases goods or services from you (a merchant),
    and is the payee in any transaction that is credited to you.
    Customers are associated with payment cards, subscriptions, invoices,
    and other miscellaneous relationship models.

    In other systems, customers may be referred to as accounts, clients, members, patrons, or players.
```

## Summaries

- Do not end a summary with a period.
- Avoid using [possessive apostrophes](#possessive-apostrophes) for inanimate objects.
- Start with an imperative verb (Create, Retrieve, Merge, Delete ...)
- Use sentence case capitalization, capitalize the first letter of the first word and use lowercase thereafter.

### Summary examples

Create a payment instrument:

```yaml
summary: Create a payment instrument
```

Retrieve a payment instrument:

```yaml
summary: Retrieve a payment instrument
```

Deactivate a payment instrument:

```yaml
summary: Deactivate a payment instrument
```

## Descriptions

This section provides guidance on how to write operation, object, and parameter descriptions.

### Operations

- Start all operation descriptions with an active verb (Retrieves, Adds, Creates, Updates, Deletes, Sets, Specifies ...)
- Describe what the operation does.
  Use verb phrases for operation descriptions.
  For example, "Retrieves customer information with a specified ID."
- Do not start with an imperative (Create, Retrieve, Merge ...).
  The user may read this as a command.
- Avoid starting with "The" or "A".
  Omit articles for ease of reading.
- Avoid using [possessive apostrophes](#possessive-apostrophes) for inanimate objects.
- Provide detail and link to related content if necessary.

**Tip:**
> Place this imaginary text before your operation descriptions: _This operation..._.
>
> Example: _"This operation"_ Creates a new customer account. \
> Result: Creates a new customer account.

#### Operation examples

Get a customer by ID:

```yaml
  operationId: GetCustomer
  description: Retrieves customer information with a specified ID.
```

Create a new customer:

```yaml
  operationId: PostCustomer
  description: Creates a new customer account.
```

Delete a customer by ID:

```yaml
  operationId: DeleteCustomer
  description: Deletes a customer account with a specified ID.
```
### Fields

- Use [noun phrases](#noun-phrase-examples) for field descriptions.
  Describe what the field is, not what it does.
- Avoid using [possessive apostrophes](#possessive-apostrophes) for inanimate objects.
- Avoid starting with "The" or "A".
  Omit articles for ease of reading.
- Provide detail and link to related content if necessary.

Example:

```yaml
state:
  description: State of the bonus.
```

#### Noun phrase examples

Use noun phrases to describe fields.

A noun phrase describes what the field is, not what it does.

**Tip:**
> Place this imaginary text before your field descriptions: _This field is the …_.
>
> Example: _"This field is the"_ Date and time when the coupon expires. \
> Result: Date and time when the coupon expires.
>
> Example: _"This field is the"_ ID of the coupon. \
> Result: ID of the coupon.

#### ID fields

Avoid repeating the field name as the description.
This provides no value to the reader.
Also, avoid using [possessive apostrophes](#possessive-apostrophes) for inanimate objects.

##### ID examples

Invoice ID:

```yaml
  invoiceId:
    description: ID of the invoice.

Invoice item ID:

```yaml
  invoiceItemId:
    description: ID of the invoice item.
```

Customer ID:

```yaml
  customerId:
    description: ID of the customer.
```

#### Timestamp fields

Use the following format to convey times.

##### Examples

Coupon created time:

```yaml
  createdTime:
    description: Date and time when the coupon is created.
```

Coupon expired time:

```yaml
  expiredTime:
    description: Date and time when the coupon expires.
```

### Boolean fields

Use the following format to convey boolean types.

##### Examples

Is Java enabled in a browser:

```yaml
  isJavaEnabled:
    type: boolean
    description: Specifies if Java is enabled in a browser.
```

Is OTP required:

```yaml
  otpRequired:
    type: boolean
    description: Specifies if a One-Time Password (OTP) is required to exchange the authentication token.
```

Is processed outside of Rebilly:

```yaml
  isProcessedOutside:
    type: boolean
    description: Specifies if the transaction was processed outside of Rebilly.
```

##### Website ID example

This ID must be described in detail because the reader may not be aware of its context in the Rebilly product.

```yaml
  websiteId:
    description: |-
      Unique website ID.
      This value is a unique identifier which describes a website or websites in Rebilly.
      A website is where an organization obtains a customer through a subscription.
      For more information, see [Obtain an organization ID and website ID](https://www.rebilly.com/settings/organizations-and-websites/#obtain-your-organization-id-and-website-id).
```

##### Organization ID example

This ID must be described in detail because the reader may not be aware of its context in the Rebilly product.

```yaml
  organizationId:
    description: |-
      Unique organization ID.
      An organization is an entity that represents a company as a merchant.
      For more information, see [Obtain an organization ID and website ID](https://www.rebilly.com/settings/organizations-and-websites/#obtain-your-organization-id-and-website-id).
```

### Response objects

Where possible, to reduce verbiage, avoid using "was" or "will" in response messages.

Response example:

```yaml
responses:
  '200':
    description: Revenue audit report retrieved.
```

Response example:

```yaml
responses:
  '200':
    description: Report retrieved.
```

### Objects, parameters, and properties descriptions examples

Provide as much detail as is necessary for the reader to understand what the value is, and how it relates to an operation.
Avoid using [possessive apostrophes](#possessive-apostrophes) for inanimate objects.

```Markdown
- Number of elements in a customer object.
- List of available payment methods.
- Specifies the trial end date and time.
```

Parameter example:

```yaml
bookedFrom:
    type: string
    description: |-
      Year and month from which revenue is booked.
      If empty then booked revenue starts from the first booked amount.
    pattern: '^\d{4}-\d{2}$'
    example: 2022-01
```

Parameter example:

```yaml
bookedTo:
    type: string
    description: |-
      Year and month up to which revenue is booked.
      If empty then booked revenue is taken until the most recently booked amount.
    pattern: '^\d{4}-\d{2}$'
    example: 2022-01
```
