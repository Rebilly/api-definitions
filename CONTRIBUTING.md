# Contributing to the Rebilly API definitions

👍🎉 Welcome! And thanks for taking the time to contribute! 🎉👍

**Important note:** we are designing in public (this repository is open for the world to see and contribute if they want).
Do not post any confidential information in this repository (whether as a commit or a comment on a PR).
See Rebilly security policies for more information about data classification.

## Design APIs

Rebilly follows a design-first approach to APIs.

- Use OpenAPI 3.1 to describe APIs according to below.
- Use [GitHub flow](https://docs.github.com/en/get-started/quickstart/github-flow) (create a branch and open a pull request for any change).
- Check your work with Redocly CLI which runs `lint` and `bundle` commands controlled through the `redocly.yaml` configuration file when a pull request is opened (you will see the green checks or red x marks).
- In terms of sequence, merge the API definitions before merging and releasing software to production.

To get started:
- Set up your environment.
- Read the remainder of this page to understand how we design APIs and write API definitions.

## API description writing guidance

For guidance on how to write API descriptions when contributing to Rebilly APIs, see [Writing style](./WRITING-STYLE.md).

## API style guide

Rebilly uses the following lint rules:
- The Redocly `recommended` configuration denoted as "recommended"
- Additional available [Redocly rules](https://redocly.com/docs/cli/rules/) denoted as "Redocly additional rules"
- Custom rules denoted as "custom rules".

### General

- [no-unresolved-refs](https://redocly.com/docs/cli/rules/no-unresolved-refs/) (recommended)
- [no-unused-components](https://redocly.com/docs/cli/rules/no-unused-components/) (Redocly additional rules)
- [security-defined](https://redocly.com/docs/cli/rules/security-defined/) (recommended)
- [spec](https://redocly.com/docs/cli/rules/spec/) (recommended)
- [spec-components-invalid-map-name](https://redocly.com/docs/cli/rules/spec-components-invalid-map-name/) (recommended)

### Info

- [info-contact](https://redocly.com/docs/cli/rules/info-contact/)
- [info-license](https://redocly.com/docs/cli/rules/info-license/)
- [info-license-url](https://redocly.com/docs/cli/rules/info-license-url/)

### Operations

- [operation-2xx-response](https://redocly.com/docs/cli/rules/operation-2xx-response/) (Redocly additional rules)
- [operation-4xx-response](https://redocly.com/docs/cli/rules/operation-4xx-response/) (turned off due to webhooks)
- [operation-4xx-problem-details-rfc7807](https://redocly.com/docs/cli/rules/operation-4xx-problem-details-rfc7807/) (not used)
- [operation-description](https://redocly.com/docs/cli/rules/operation-description/) (use custom rules instead)
- [operation-operationId](https://redocly.com/docs/cli/rules/operation-operationId/) (Redocly additional rules)
- [operation-operationId-unique](https://redocly.com/docs/cli/rules/operation-operationId-unique/) (recommended)
- [operation-operationId-url-safe](https://redocly.com/docs/cli/rules/operation-operationId-url-safe/) (recommended)
- [operation-summary](https://redocly.com/docs/cli/rules/operation-summary/) (recommended)
- [rule/x-sdk-operation-name](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/operation-id-delete](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/operation-id-get](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/operation-id-patch](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/operation-id-post](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/operation-id-put](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/no-x-code-samples](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/no-x-internal](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)

### Parameters

- [boolean-parameter-prefixes](https://redocly.com/docs/cli/rules/boolean-parameter-prefixes/) (Redocly additional rules)
- [no-invalid-parameter-examples](https://redocly.com/docs/cli/rules/no-invalid-parameter-examples/) (Redocly additional rules)
- [operation-parameters-unique](https://redocly.com/docs/cli/rules/operation-parameters-unique/) (recommended)
- [parameter-description](https://redocly.com/docs/cli/rules/parameter-description/) (Redocly additional rules)
- [path-declaration-must-exist](https://redocly.com/docs/cli/rules/path-declaration-must-exist/) (recommended)
- [path-not-include-query](https://redocly.com/docs/cli/rules/path-not-include-query/) (recommended)
- [path-parameters-defined](https://redocly.com/docs/cli/rules/path-parameters-defined/) (recommended)
- [rule/params-must-include-examples](redocly.yaml) (custom rules)

### Paths

- [no-ambiguous-paths](https://redocly.com/docs/cli/rules/no-ambiguous-paths/) (Redocly additional rules)
- [no-http-verbs-in-paths](https://redocly.com/docs/cli/rules/no-http-verbs-in-paths/) (Redocly additional rules) (1 exception)
- [no-identical-paths](https://redocly.com/docs/cli/rules/no-identical-paths/) (recommended)
- [no-path-trailing-slash](https://redocly.com/docs/cli/rules/no-path-trailing-slash/) (recommended)
- [path-excludes-patterns](https://redocly.com/docs/cli/rules/path-excludes-patterns/)
- [path-segment-plural](https://redocly.com/docs/cli/rules/path-segment-plural/) (Redocly additional rules)
- [paths-kebab-case](https://redocly.com/docs/cli/rules/paths-kebab-case/) (Redocly additional rules)
- [rule/path-must-be-ref-file](redocly.yaml) (custom rules)

### Requests, Responses, and Schemas

- [no-enum-type-mismatch](https://redocly.com/docs/cli/rules/no-enum-type-mismatch/) (recommended)
- [no-example-value-and-externalValue](https://redocly.com/docs/cli/rules/no-example-value-and-externalValue/) (recommended)
- [no-invalid-media-type-examples](https://redocly.com/docs/cli/rules/no-invalid-media-type-examples/) (Redocly additional rules)
- [no-invalid-schema-examples](https://redocly.com/docs/cli/rules/no-invalid-schema-examples/) (Redocly additional rules)
- [request-mime-type](https://redocly.com/docs/cli/rules/request-mime-type/) (Redocly additional rules)
- [response-mime-type](https://redocly.com/docs/cli/rules/response-mime-type/) (Redocly additional rules)
- [response-contains-header](https://redocly.com/docs/cli/rules/response-contains-header/) (Redocly additional rules)
- [response-contains-property](https://redocly.com/docs/cli/rules/response-contains-property/)
- [scalar-property-missing-example](https://redocly.com/docs/cli/rules/scalar-property-missing-example/)
- [rule/headers-include-example](redocly.yaml) (custom rules)
- [rule/schema-properties-both-created-time-and-updated-time](redocly.yaml) (custom rules)
- [rule/put-200-and-201](redocly.yaml) (custom rules) (this has some exceptions)
- [rule/schema-properties-camelCase](redocly.yaml) (custom rules)
- [rule/embedded-is-object](redocly.yaml) (custom rules)

### Servers

- [no-empty-servers](https://redocly.com/docs/cli/rules/no-empty-servers/) (recommended)
- [no-server-example.com](https://redocly.com/docs/cli/rules/no-server-example-com/) (Redocly additional rules)
- [no-server-trailing-slash](https://redocly.com/docs/cli/rules/no-server-trailing-slash/) (recommended)
- [no-server-variables-empty-enum](https://redocly.com/docs/cli/rules/no-server-variables-empty-enum/) (recommended)
- [no-undefined-server-variable](https://redocly.com/docs/cli/rules/no-undefined-server-variable/) (recommended)

### Tags

- [operation-singular-tag](https://redocly.com/docs/cli/rules/operation-singular-tag/) (Redocly additional rules)
- [operation-tag-defined](https://redocly.com/docs/cli/rules/operation-tag-defined/) (Redocly additional rules)
- [tag-description](https://redocly.com/docs/cli/rules/tag-description/)
- [tags-alphabetical](https://redocly.com/docs/cli/rules/tags-alphabetical/)
- [custom-rules/no-unused-tags](redocly.yaml) (custom rules)


### Writing style

- [rule/operation-summary](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/tag-description](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/info-description](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/description-capitalization](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/description-punctuation](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/no-anthropomorphic-possessives](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/no-past-future](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)
- [rule/no-description-start-with-the-a-an](https://redocly.com/docs/cli/rules/custom-rules/) (custom rules)

### Maintenance

Set up lint rules to enforce any design rules to keep this list to a minimum (and remove from this list as rules are enabled to automate these checks).

### Schemas

- The schema filename should be singular and start with an uppercase letter (`Customer.yaml`).
- Always use US-English.
- Define all properties explicitly (whenever possible).
- List required properties.
- Mark properties read or write only when appropriate.
- Re-use schemas by reference objects (`$ref`). Some commonly used include:
    - `ResourceId`
    - `CreatedTime`
    - `UpdatedTime`
- Most APIs have a `_links` property (with at least "self" link).
- If a resource has nested objects, consider separating them with the reference objects (`$ref`) if they have potential for reuse.
- You may organize schemas into sub-folders when appropriate.

### Operations

- Follow [path conventions](./openapi/paths/README.md)
- Use appropriate HTTP methods.
    - POST to insert a new resource.
    - PUT to create with specified ID or replace existing Resource (must return 200 for updated and 201 for created).
    - GET to get a resource or a collection.
    - DELETE to delete a resource.
- Response must contain http header `Location` of the newly created resource; if the status is 201, the `Location` header must exist.

#### Collections

- Add `"#/parameters/collectionLimit"` and `"#/parameters/collectionOffset"` to Resource collection, if pagination is needed.
- Add `"#/parameters/collectionFields"` to Resource collection to allow return only specified fields.
- Add `"#/parameters/collectionExpand"` to Resource collection if Resource contains embedded resources.
- Add `"#/parameters/collectionQuery"` to Resource collection if Resource support search by ‘?q=’ param.
- Add `"#/parameters/collectionFilter"` to Resource collection if Resource support search by ‘?filter=’ param.
- Add `"#/parameters/collectionCriteria"` to Resource collection if Resource support search by ‘?criteria=’ param.
- Add `"#/parameters/collectionSort"` to Resource collection if Resource support sorting.
    - Define all sortable properties.

## Helpful resources

- [Redocly CLI documentation](https://redocly.com/docs/cli/)
- [Redocly VS Code extension](https://marketplace.visualstudio.com/items?itemName=Redocly.openapi-vs-code)
- [OpenAPI specification](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.3/)
