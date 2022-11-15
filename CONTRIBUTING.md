# Contributing to Rebilly's API definitions

👍🎉 Welcome! And thanks for taking the time to contribute! 🎉👍

**Important note:** we are designing in public (this repository is open for the world to see and contribute if they want). Do not post any confidential information in this repository (whether as a commit or a comment on a PR). See Rebilly's security policies for more information about data classification.

## Design APIs

Rebilly follows a design-first approach to APIs.

- Set up [your environment](./README.md#environment-setup).
- Use [GitHub flow](https://docs.github.com/en/get-started/quickstart/github-flow) (open a pull request for any change).
- Redocly CLI runs our `lint` and `bundle` command which are controlled through the `.redocly.yaml` configuration file when a pull request is opened (you will see the green checks or red x marks).
- In terms of sequence, merge the API definitions before merging and releasing software to production.

## API description writing guidance

For guidance on how to write API descriptions when contributing to Rebilly APIs, see [Writing style](./WRITING-STYLE.md).

## API style guide

Rebilly uses the following automated lint rules in addition to the [Redocly recommended rules](https://redocly.com/docs/cli/rules/):

### Severity level `error`

- [no-ambiguous-paths](https://redocly.com/docs/cli/rules/no-ambiguous-paths/)
- [no-invalid-parameter-examples](https://redocly.com/docs/cli/rules/no-invalid-parameter-examples/)
- [no-unused-components](https://redocly.com/docs/cli/rules/no-unused-components/)
- [operation-2xx-response](https://redocly.com/docs/cli/rules/operation-2xx-response/)
- [operation-operationId](https://redocly.com/docs/cli/rules/operation-operationId/)
- [operation-singular-tag](https://redocly.com/docs/cli/rules/operation-singular-tag/)
- [operation-tag-defined](https://redocly.com/docs/cli/rules/operation-tag-defined/)
- [paths-kebab-case](https://redocly.com/docs/cli/rules/paths-kebab-case/)
- [tag-description](https://redocly.com/docs/cli/rules/tag-description/)
- [custom-rules/description-punctuation](./plugins/rules/description-punctuation.js)

#### `assertions`

- [assert/headers-include-example](https://redocly.com/docs/cli/rules/assertions/)
- [assert/path-must-be-ref-file](https://redocly.com/docs/cli/rules/assertions/)
- [assert/x-sdk-operation-name](https://redocly.com/docs/cli/rules/assertions/)
- [assert/operation-id-delete]()
- [assert/operation-id-get]()
- [assert/operation-id-patch]()
- [assert/operation-id-post]()
- [assert/operation-id-put]()
- [assert/tag-description]()
- [assert/info-description]()
- [assert/operation-summary]()
- [assert/no-x-code-samples]()
- [assert/no-x-internal]()

### Severity level `warn`
- [custom-rules/no-unused-tags](./plugins/rules/no-unused-tags.js)

### Severity level `off`
- [operation-4xx-response](https://redocly.com/docs/cli/rules/operation-4xx-response/)

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
    - `ServerTimestamp`
- Most APIs have a `_links` property (with at least "self" link).
- If a resource has nested objects, consider separating them with the reference objects (`$ref`) if they have potential for reuse.
- You may organize schemas into sub-folders when appropriate.

### Operations

- Follow [path conventions](./openapi/paths/README.md)
- Use appropriate HTTP methods.
    - POST to insert new Resource into another.
    - PUT to create with specified ID or replace existing Resource (must return 200 for updated and 201 for created).
    - GET to get Resource or Collection.
    - DELETE to delete Resource.
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

## Feedback on design

When a draft pull request is opened, there is a change being proposed. It may be a new API proposal, enhancing or fixing documentation for an existing API.

Taking the time to review and provide feedback on APIs helps you manyfold by better understanding the entire collection of Rebilly's APIs.

While not a requirement, we have a preference to use [conventional comments](https://conventionalcomments.org/) for pull request comments.

## Helpful resources

- [OpenAPI CLI documentation](https://redoc.ly/docs/cli/)
- [Redocly VS Code extension](https://marketplace.visualstudio.com/items?itemName=Redocly.openapi-vs-code)
- [OpenAPI specification](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.3.md)
