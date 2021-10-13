# Products bundler

File `openapi/openapi.yaml` is a single entrypoint for every bundled API definition.
All paths, tags and tag groups are listed there. It is a job of the `products-bundler`
plugin to bundle specific API definition file for a product.

This plugin uses the `API_BUNDLED_PRODUCT` env variable to read a config for the product
to override `x-tagGroups` needed and to filter out unneeded tags and paths from the result file.

If the `API_BUNDLED_PRODUCT` is empty or not provided - entire file will be bundled as a combined spec.

## Bundle a product API

To bundle the Storefront product bundle, for example, run the following command:

```shell
 API_BUNDLED_PRODUCT=Storefront openapi bundle openapi -o storefront.yaml
```

## API bundle configuration

Available configuration is available in the `mapping` directory. Every file in this directory
represents a configuration for bundling the result bundle. Use name of these files as a value
for the `API_BUNDLED_PRODUCT` env variable during build.
