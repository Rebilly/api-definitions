# Products bundler

TODO: remove after spec permalinks are replaced.

File `openapi/openapi.yaml` is a single entrypoint for every bundled API definition.
It should include all paths, tags and webhooks. It is a job of the `products-bundler`
plugin to bundle specific API definition file for a product.

This plugin uses the `REBILLY_API_PRODUCT` env variable to read a config for the product
to override `x-tagGroups` needed and to filter out unneeded tags and paths from the result file.

If the `REBILLY_API_PRODUCT` is empty or not provided - entire file will be bundled as a combined spec.

## Bundle a product API

To bundle the Core product bundle, for example, run the following command:

```shell
 REBILLY_API_PRODUCT=Core openapi bundle openapi -o core.yaml
```

## Preview a product API

To preview the Core product bundle, for example, run the following command:

```shell
 REBILLY_API_PRODUCT=Core openapi preview-docs openapi
```

## API bundle configuration

All products' configuration is available in the `mapping` directory. Every file in this directory
represents a configuration for bundling the result bundle. Use name of these files as a value
for the `REBILLY_API_PRODUCT` env variable during build.

Add a new product bundle by adding a new YAML file in the `mapping` directory with a structure similar to the other files there.
The env variable `REBILLY_API_PRODUCT` value maps to the YAML file used during the `bundle` process.
