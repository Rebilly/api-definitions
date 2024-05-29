<?php
/**
 * This source file is proprietary and part of Rebilly.
 *
 * (c) Rebilly SRL
 *     Rebilly Ltd.
 *     Rebilly Inc.
 *
 * @see https://www.rebilly.com
 */

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$rules = [
    '@PhpCsFixer' => true,
    'fully_qualified_strict_types' => false,
    'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
    'concat_space' => ['spacing' => 'one'],
];

$finder = (new Finder())
    ->exclude('vendor')
    ->in(__DIR__);

return (new Config())
    ->setFinder($finder)
    ->setRules($rules)
    ->setRiskyAllowed(true)
    ->setUsingCache(true);
