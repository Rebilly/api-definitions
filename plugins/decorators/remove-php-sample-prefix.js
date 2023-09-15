module.exports = RemovePhpSamplePrefix;

/** @type {import('@redocly/cli').OasDecorator} */

function RemovePhpSamplePrefix() {
  return {
    XCodeSample: {
      leave(sample) {
        if (!sample.lang.includes('PHP')) {
          return;
        }
        if (sample.source.startsWith('<?php')) {
          sample.source = sample.source.substring(5).trim();
        }
      }
    }
  }
};
