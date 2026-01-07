# Rebilly OpenAPI Definitions

Our website (www.rebilly.com) is powered by [Redocly Realm](https://redocly.com/realm/).

## View API docs

To view the full Rebilly API reference documentation, go to [https://www.rebilly.com/catalog/all/](https://www.rebilly.com/catalog/all/).

The full Rebilly API reference documentation has over 500 operations.
This is likely more than you may need to implement your use cases.
If you would like to implement a particular use case, [contact Rebilly](https://www.rebilly.com/support/) for guidance and feedback on the best API operations to use for the task.

To integrate Rebilly, and learn about related resources and concepts,
see [Get started](https://www.rebilly.com/docs/dev-docs#get-started).

## Contributing

[Read our contribution guide](./CONTRIBUTING.md).

## Environment setup

If you use VS Code, use the [Redocly VS Code extension](https://marketplace.visualstudio.com/items?itemName=Redocly.openapi-vs-code) to edit this repo and get inline lint feedback and previews.

### Install

1. Install [Node JS](https://nodejs.org/) (current LTS version or more recent)
2. Clone repo and run `pnpm install` in the repo root

### Usage

#### Preview

Run `npx @redocly/cli preview` to start a local development server with a preview of the docs.

#### Bundle

Run `pnpm run build:latest` to bundle the definitions into a single file in the `catalog` folder.

#### Validate

Run `npx @redocly/cli lint` to validate the definitions.
