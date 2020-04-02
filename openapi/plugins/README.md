## Plugins Folder

This folder contains post-process plugins that are run just after bundle.
Check out `x-rebillyMerge.js` plugin for reference.


## Available Plugins

### x-rebillyMerge
Inline references and merge all subschemas using [JSON Merge Patch](https://tools.ietf.org/html/rfc7386)
##### Usage:

```yaml
  x-rebillyMerge:
    - $ref: "#/components/arameters/someParam"
    - enum:
        - aaa
        - bbb
```

### x-sortableEnum
Prefix each enum value with `"-"`

##### Usage:

```yaml
x-sortableEnum:
  - aaa
  - bbb
```
Result:
```yaml
enum:
  - aaa
  - -aaa
  - bbb
  - -bbb
```
