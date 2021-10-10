# Products bundler

File `openapi/openapi.yaml` is a single entrypoint for every bundled API definition.
All paths, tags and tag groups are listed there. It is a job of the `products-bundler`
plugin to bundle specific API definition file for a product.

This plugin uses the `API_BUNDLED_PRODUCT` env variable to read a config for the product
to override `x-tagGroups` needed and to filter out unneeded tags ad paths from the result file.
