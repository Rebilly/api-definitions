# Rebilly OpenAPI Definitions

TBD: Add Redocly validation status badge.

## Links

- [Core API docs](https://api-reference.rebilly.com/)
- [Users API docs](https://user-api-docs.rebilly.com/)
- [Reports API docs](https://reports-api-docs.rebilly.com/)
- [Storefront API docs](https://storefront-api-docs.rebilly.com/)

## Working on the API definitions

### Install

1. Install [Node JS](https://nodejs.org/)
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

Run `npm build` to bundle the definitions into a single file in the `dist` folder.

#### Validate

Run `npm test` to validate the definitions.

### Organization

Each API definition has its own root document in the root of the `openapi` folder.
