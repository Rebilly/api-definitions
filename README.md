# Rebilly OpenAPI Definitions

TBD: Add Redocly validation status badge.

## Links

- [Core API docs](https://api-reference.rebilly.com/)
- [Users API docs](https://user-api-docs.rebilly.com/)
- [Reports API docs](https://reports-api-docs.rebilly.com/)

## Working on the API definitions

### Install

1. Install [Node JS](https://nodejs.org/)
2. Clone repo and run `yarn install` in the repo root

### Usage

#### `yarn start`
Starts the development server to preview the docs (Core API by default).

- `yarn start core` - preview Core API docs
- `yarn start users` - preview Users API docs
- `yarn start reports` - preview Reports API doc
- `yarn start storefront` - preview Storefront API docs
- `yarn start combined` - preview combined API docs

#### `yarn build`
Bundles the definitions into a single file in the `dist` folder.

#### `yarn test`
Validates.

### Organization

Each API definition has its own root document in the root of the `openapi` folder.
