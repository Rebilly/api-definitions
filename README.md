# Rebilly OpenAPI Definitions

- Our website (www.rebilly.com) is powered by the [Redocly Portal](https://redocly.com/developer-portal/).
- Our API reference is powered by [Redocly API docs](https://redocly.com/reference-docs/).

TBD: Add Redocly validation status badge.

## Links

- [Core API docs](https://api-reference.rebilly.com/)
- [Users API docs](https://user-api-docs.rebilly.com/)
- [Reports API docs](https://reports-api-docs.rebilly.com/)
- [Storefront API docs](https://storefront-api-docs.rebilly.com/) (this API is in development and subject to change)

## Contributing

[Read our contribution guide](./CONTRIBUTING.md).

## Environment setup

If you use VS Code, use the [Redocly VS Code extension](https://marketplace.visualstudio.com/items?itemName=Redocly.openapi-vs-code) to edit this repo and get inline lint feedback and previews.

### Install

1. Install [Node JS](https://nodejs.org/) (version 14 or more recent)
2. Clone repo and run `npm ci` in the repo root

### Usage

#### Preview

Starts the development server to preview the docs:

- `npm run serve-core` - preview Core API docs
- `npm run serve-users` - preview Users API docs
- `npm run serve-reports` - preview Reports API doc
- `npm run serve-storefront` - preview Storefront API docs
- `npm run serve-combined` - preview combined API docs

#### Build

Run `npm run build` to bundle the definitions into a single file in the `dist` folder.

#### Validate

Run `npx redocly lint` to validate the definitions.

