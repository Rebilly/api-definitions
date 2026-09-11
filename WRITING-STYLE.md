# Writing style

This topic provides guidance on how to write API documentation descriptions.

## General guidance

- Start all sentences with a capital letter and end them with a period, except for summaries.
- Add meaningful descriptions to all operations, objects, and parameters.
- Do not start the first sentence of operation, response, field, or parameter descriptions with articles `The`, `A`, or `An`.
  This restriction does not apply to subsequent sentences.
- Avoid using [possessive apostrophes](#possessive-apostrophes) for inanimate objects.
- Use present tense in OpenAPI descriptions.
  Timestamp noun phrases may use past tense.
  For example, use `Date and time when the resource was created.`
  Response descriptions may use short status phrases such as `Report retrieved.`
  See [Future tense](#future-tense).
- Prefer [active voice](https://developers.google.com/tech-writing/one/active-voice).
  See [Passive and indirect outcomes](#passive-and-indirect-outcomes).
- Describe [observable API behavior](#describe-observable-behavior), not implementation details.
- Do not name a product, service, or vague entity as the actor when describing API behavior.
  See [Actor references](#actor-references).
- Avoid using `should`, `could`, and `can`.
- Avoid using [parentheses](#parentheses) in descriptions, except on the first instance of an acronym.
- To add multi-lined descriptions, after a `description:`, add one space, then insert `|-`.
  This escapes the YAML formatting and enables the use of Markdown.

## Parentheses

Avoid parentheses in API descriptions except when defining an acronym on first use.
Parentheses can interrupt sentence flow and can confuse readers.
Readers may interpret parenthetical text in different ways.

Rephrase the text as part of the main sentence, or split it into a separate sentence.

When defining an acronym on first use in a description, use parentheses.
For more information, see [Acronyms](#acronyms).

### Examples

Incorrect:

```yaml
description: Retrieves customer information (including payment methods).
```

Correct:

```yaml
description: Retrieves customer information, including payment methods.
```

Incorrect:

```yaml
description: Updates a subscription with a specified ID (use this to change plan items).
```

Correct:

```yaml
description: |-
  Updates a subscription with a specified ID.
  Use this operation to change plan items.
```

Acronym on first use:

```yaml
description: Retrieves Electronic Funds Transfer (EFT) transactions.
```

## Avoid knowledge bias

Do not assume that the reader has the same knowledge of the product as you.
Writers often do this to some extent.
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
It is infuriating if they need to continually do this to understand an API.
Over time, if the reader is persistent, they will learn these concepts themselves.
This is a major hurdle for new users to overcome.
Many readers may simply quit, or may label the docs as "bad" and not use them, or the product.

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

Possessive apostrophes, written as `'s`, indicate ownership.
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

## Anthropomorphism

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
It is important to be consistent in the use of acronyms and related descriptions in Rebilly documentation.
If documentation is not consistent, this may confuse the audience.

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

## Noun strings, or noun stacks

Avoid using a series of nouns together consecutively.
This can make descriptions difficult to understand because it may not be clear which words are modifier nouns and which noun is the object.
In writing, this is known as a [noun string, or noun stack](https://www.plainlanguage.gov/guidelines/words/avoid-noun-strings/).
This often occurs in business and technical content when the author attempts to make content concise, but mistakenly removes important context.

To avoid unclear noun strings, use a preposition or relative clause to show the relationship between nouns.
This makes it easier to understand the relationship between the words.
This often requires the use of articles such as `a`, `an`, and `the`, and prepositions such as `of`, `from`, `in`, `on`, `to`, and `for`.

### Examples

{% accordion title="Example 1" %}

#### Incorrect use

```yaml
scope:
  description: API key scope.
```
| Compound modifier | Head noun | |
|---|---|---|
| API key| scope |  ❌  |

#### Correct use

```yaml
scope:
  description: Scope of the API key.
```

| Head noun | Preposition & article | Object of the preposition | |
|---|---|---|---|
| Scope| of the | API key |  ✅ |

{% /accordion %}

{% accordion title="Example 2" %}

#### Incorrect use

```yaml
creationTime:
  description: Coupon creation time.
```

| Noun modifier | Noun modifier | Head noun | |
|---|---|---|---|
| Coupon | creation | time | ❌ |

#### Correct use

```yaml
creationTime:
  description: Time when the coupon was created.
```

| Head noun | Relative adverb | Article | Noun | Auxiliary verb | Past participle | |
|---|---|---|---|---|---|---|
| Time | when | the | coupon | was | created | ✅ |

{% /accordion %}

{% accordion title="Example 3" %}

#### Incorrect use

```yaml
organizationName:
  description: Organization name
```

| Noun modifier | Head noun | |
|---|---|---|
| Organization| name | ❌ |

#### Correct use

```yaml
organizationName:
  description: Name of the organization.
```

| Head noun | Preposition & article | Object of the preposition | |
|---|---|---|---|
| Name| of the | organization | ✅ |

{% /accordion %}

{% accordion title="Example 4" %}

#### Incorrect use

```yaml
taxNumberType:
  description: Tax number type.
```

| Compound modifier | Head noun | |
|---|---|---|
| Tax number | type | ❌ |

#### Correct use

```yaml
taxNumberType:
  description: Type of tax number.
```

| Head noun | Preposition | Object of the preposition | |
|---|---|---|---|
| Type | of | tax number | ✅ |

{% /accordion %}

## Describe observable behavior

API descriptions explain what happens when a client sends a request or reads a response.
Focus on observable API behavior rather than how the implementation achieves it.
Prefer terminology that matches the API contract, the UI, or user-visible behavior.
See also [Avoid knowledge bias](#avoid-knowledge-bias).

When a description explains API behavior, it should:

1. Identify the affected object.
2. Describe the action.
3. Describe the outcome.

### Implementation details

Do not describe internal storage or processing when the reader only needs the API effect.

Incorrect:

```yaml
description: |-
  ...
  The API sets the `customer.status` database column to `active`.
```

Correct:

```yaml
description: |-
  ...
  The status of the customer account changes to `active`.
```

### Actor references

Do not name a product, service, or vague entity as the actor when describing API behavior.
Do not use vague pronouns such as `it` or `they` to stand in for a product or service.
Using the product as the actor adds little information and places unnecessary emphasis on the product rather than the behavior.

This includes `Rebilly`, `Replay`, `Recomm`, `the system`, `the server`, `the platform`, and so on.

Describe the affected object, the relationship, and the outcome instead.
Prefer object-focused phrasing when it names the affected object and outcome clearly.
See also [Passive and indirect outcomes](#passive-and-indirect-outcomes).

Incorrect:

```yaml
description: |-
  ...
  Mercure includes the tournament ID in the event.
```

```yaml
description: |-
  ...
  When Rebilly skips unproven cards, it adds a timeline message on the gateway account.
```

Correct:

```yaml
description: |-
  ...
  The event contains the tournament ID.
```

```yaml
description: |-
  ...
  When unproven cards are skipped, a timeline message is added on the gateway account.
```

Exceptions:

- Use `Rebilly` when describing a product boundary, such as `processed outside of Rebilly`.
- Use `Rebilly` in tag descriptions or links when the reader needs product context.
- Use `the API` only when distinguishing the server from the client is necessary.
  Prefer describing the affected object instead.
  See [Implementation details](#implementation-details).

### Abstract nouns and operation names

Actions are easier to understand than abstract nouns or internal operation names.
Prefer verbs and verb phrases.

Incorrect:

```yaml
description: |-
  ...
  Use this operation for payout request status transitions.
  This operation performs the allocation of funds from the payout request to payment instruments.
```

Correct:

```yaml
description: |-
  ...
  Use this operation to change the status of a payout request.
  This operation allocates funds from the payout request to payment instruments.
```

### Passive and indirect outcomes

Describe what happens, not what becomes available, is determined, or is treated as something.
Prefer active voice when it is clearer.
Passive voice is acceptable when it names the affected object and the outcome clearly.
See also [active voice](https://developers.google.com/tech-writing/one/active-voice).

Incorrect:

```yaml
description: |-
  ...
  Blocked payout requests will no longer be available for status transitions.
  An omitted field is treated as "not provided" and keeps the stored value.
  This operation determines which payment instruments will be allocated funds.
```

Correct:

```yaml
description: |-
  ...
  Blocked payout requests cannot transition to new statuses.
  If the field is omitted, the field is not updated.
  This operation determines which payment instruments receive funds.
```

### Future tense

API descriptions describe behavior, not future events.
Use present tense, including for scheduled and time-based conditions.

Incorrect:

```yaml
description: |-
  ...
  Funds will be allocated to payment instruments in this order.
  Blocked payout requests will no longer transition to new statuses.
```

Correct:

```yaml
description: |-
  ...
  Funds are allocated to payment instruments in this order.
  Blocked payout requests cannot transition to new statuses.
```

### State descriptions vs effects

Choose the phrasing that best helps the reader understand the API contract.
An effect on a specific object is clearer than an abstract state description.

Incorrect:

```yaml
description: |-
  ...
  The stored value remains unchanged.
```

```yaml
description: |-
  ...
  Allocation is unavailable for blocked payout requests.
```

Correct:

```yaml
description: |-
  ...
  The field is not updated.
```

```yaml
description: |-
  ...
  Blocked payout requests cannot be allocated.
```

### Process metaphors

Avoid metaphors that obscure API behavior, such as `runs in the background`, `reaches fulfilled status`, or `reaches a worker`.
See also [Anthropomorphism](#anthropomorphism).
Prefer state transitions, direct outcomes, and explicit behavior when they are clearer.
See also [Internal terminology](#internal-terminology).

Incorrect:

```yaml
description: |-
  ...
  Report generation runs in the background until the report reaches completed status.
```

Correct:

```yaml
description: |-
  ...
  The status of the report changes to `completed` after the report is generated.
```

### Reduced relative clauses

A reduced relative clause can be concise, but it is not always easier to read.
Use a full relative clause when omitting a relative pronoun and a form of `be`, such as `that are` or `that were`, makes the modifier ambiguous.
Do not expand a short, clear modifier solely to avoid a reduced relative clause.

Incorrect:

```yaml
description: |-
  ...
  Transactions associated with payment instruments created in the last 30 days are returned.
```

Correct:

```yaml
description: |-
  ...
  This operation returns transactions that were created in the last 30 days and that are associated with payment instruments.
```

### Internal terminology

Do not expose implementation concepts without explanation.
Define the term or link to related content when more context is needed.

Incorrect:

```yaml
sticky:
  description: Specifies if sticky usage is enabled.
```

Correct:

```yaml
sticky:
  description: Specifies if the plan bills the last reported quantity from a previous service period instead of zero when no usage is reported during the current service period.
```

## Tags

Use tags to group related operations in the Rebilly API reference.
When searching operations, the reader may look at the tag description for the context.
Add detail to these descriptions and link to related content if required.

### Tag example

```yaml
- name: Customers
  description: |-
    A customer is an entity that purchases goods or services from a merchant and is the payer in transactions credited to the merchant.
    Customers are associated with payment cards, subscriptions, invoices,
    and other miscellaneous relationship models.

    In other systems, customers may be referred to as accounts, clients, members, patrons, or players.
```

## Summaries

- Do not end a summary with a period.
- Avoid using [possessive apostrophes](#possessive-apostrophes) for inanimate objects.
- Start with an imperative verb such as `Create`, `Retrieve`, `Merge`, or `Delete`.
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
For guidance that applies to operations, fields, parameters, and errors, see [Describe observable behavior](#describe-observable-behavior).

### Operations

- Start all operation descriptions with an active verb such as `Retrieves`, `Adds`, `Creates`, `Updates`, `Deletes`, `Sets`, or `Specifies`.
- Describe what the operation does.
  Use verb phrases for operation descriptions.
  For example, "Retrieves customer information with a specified ID."
- Describe [observable API behavior](#describe-observable-behavior), not implementation details.
- Do not start with an imperative such as `Create`, `Retrieve`, or `Merge`.
  The user may read this as a command.
- Avoid starting with "The" or "A".
  Omit articles for ease of reading.
- Avoid using [possessive apostrophes](#possessive-apostrophes) for inanimate objects.
- Provide detail and link to related content if necessary.

**Tip:**
> Place this imaginary text before your operation descriptions: This operation...
>
> Example: "This operation" creates a new customer account. \
> Result: Creates a new customer account.

> Use "This operation …" as a drafting aid for the first sentence.
> Do not start the first sentence with "This operation" in the final description.

> In multi-line descriptions, "This operation …" is acceptable in later sentences when it adds clarity.

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
- Avoid starting with articles `The`, `A`, or `An`.
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
> Place this imaginary text before your field descriptions: This field is the ….
>
> Example: "This field is the" date and time when the coupon expires. \
> Result: Date and time when the coupon expires.
>
> Example: "This field is the" ID of the coupon. \
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
      For more information, see [Obtain your organization ID and website ID](https://www.rebilly.com/docs/settings/organizations-and-websites#obtain-your-organization-id-and-website-id).
```

##### Organization ID example

This ID must be described in detail because the reader may not be aware of its context in the Rebilly product.

```yaml
  organizationId:
    description: |-
      Unique organization ID.
      An organization is an entity that represents a company as a merchant.
      For more information, see [Obtain your organization ID and website ID](https://www.rebilly.com/docs/settings/organizations-and-websites#obtain-your-organization-id-and-website-id).
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

### Parameters

Parameter descriptions depend on the parameter location.

- For `in: query` parameters, use imperative verb phrases because query parameters modify the request behavior.
  - Examples: "Filter by player IDs.", "Sort by created time.", "Limit the number of items returned."
- For `in: path`, `in: header`, and `in: cookie` parameters, use noun phrases that describe what the value is.
  - Examples: "ID of the transaction.", "Date and time when the coupon expires.", "status of the payout request.", "Total amount of the order."
- Avoid starting parameter descriptions with articles `The`, `A`, or `An`.

Parameter examples:

```yaml
  playerIds:
    type: array
    description: Filter by player IDs.
    items:
      type: string
```

```yaml
bookedFrom:
    type: string
    description: |-
      Year and month from which revenue is booked.
      If empty then booked revenue starts from the first booked amount.
    pattern: '^\d{4}-\d{2}$'
    example: 2022-01
```

```yaml
bookedTo:
    type: string
    description: |-
      Year and month up to which revenue is booked.
      If empty then booked revenue is taken until the most recently booked amount.
    pattern: '^\d{4}-\d{2}$'
    example: 2022-01
```
