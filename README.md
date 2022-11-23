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

This process describes how to start a development server docs preview for the Rebilly API docs. 
Changes made to the API specification while the development server is running are immediately displayed in the docs preview.

Rebilly uses [Redocly](https://redocly.com/) to generate, manage, and preview API docs.

1. In a terminal, install the [Redocly CLI](https://github.com/Redocly/redocly-cli). \
   Use this command to install the package globally on your machine: `sudo npm install @redocly/cli -g`
1. [Sign in or create a Redocly account](https://app.redocly.com/signup). \
   If you are Rebilly employee, sign in using SSO and your Rebilly email address.
1. In Redocly, in the top right of the screen, click your name, then click **My profile**.
1. In the **Personal API keys** section, click **Add API key**.
1. Enter an API key name, then click **Save**.
1. Copy the API key.
1. In the terminal, execute the following command: `openapi login`. 
1. When prompted, paste your API key.
1. Execute one of the following commands to start a development server docs preview:
    - Core API docs: `npm run serve-core`
    - Users API docs: `npm run serve-users`
    - Reports API docs: `npm run serve-reports`
    - Storefront API docs: `npm run serve-storefront`
    - Combined API docs: `npm run serve-combined`
 1. In a web browser, open the preview server URL that is displayed in the terminal.

#### Build

Run `npm run build` to bundle the definitions into a single file in the `dist` folder.

#### Validate

Run `npx redocly lint` to validate the definitions.

