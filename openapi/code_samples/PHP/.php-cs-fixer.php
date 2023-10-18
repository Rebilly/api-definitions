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
    '@PSR12' => true,
    'align_multiline_comment' => true,
    'array_syntax' => ['syntax' => 'short'],
    'array_indentation' => true,
    'blank_line_before_statement' => true,
    'binary_operator_spaces' => true,
    'cast_spaces' => true,
    'class_attributes_separation' => true,
    'combine_consecutive_issets' => true,
    'combine_consecutive_unsets' => true,
    'compact_nullable_typehint' => true,
    'concat_space' => ['spacing' => 'one'],
    'heredoc_to_nowdoc' => true,
    'general_phpdoc_annotation_remove' => ['annotations' => ['author', 'version']],
    'list_syntax' => ['syntax' => 'short'],
    'lowercase_cast' => true,
    'magic_constant_casing' => true,
    'mb_str_functions' => true,
    'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
    'modernize_types_casting' => true,
    'native_function_casing' => true,
    'new_with_braces' => true,
    'no_empty_comment' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    'no_extra_blank_lines' => ['tokens' => ['break', 'continue', 'extra', 'return', 'throw', 'use', 'parenthesis_brace_block', 'square_brace_block', 'curly_brace_block', 'switch', 'case', 'default']],
    'no_homoglyph_names' => true,
    'no_leading_import_slash' => true,
    'no_leading_namespace_whitespace' => true,
    'no_mixed_echo_print' => true,
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_null_property_initialization' => true,
    // 'no_short_echo_tag' => true,
    'no_short_bool_cast' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_spaces_around_offset' => true,
    'no_superfluous_elseif' => true,
    'no_trailing_comma_in_singleline' => true,
    'no_unneeded_control_parentheses' => true,
    'no_unneeded_curly_braces' => true,
    'no_unneeded_final_method' => true,
    'no_unreachable_default_argument_value' => true,
    'no_unused_imports' => true,
    'no_useless_else' => true,
    'no_useless_return' => true,
    'no_whitespace_before_comma_in_array' => true,
    'no_whitespace_in_blank_line' => true,
    'normalize_index_brace' => true,
    'ordered_class_elements' => true,
    'ordered_imports' => true,
    'php_unit_strict' => true,
    // 'php_unit_test_class_requires_covers' => true,
    'phpdoc_add_missing_param_annotation' => true,
    'phpdoc_order' => true,
    'phpdoc_types_order' => true,
    'protected_to_private' => true,
    'return_type_declaration' => true,
    'self_accessor' => true,
    // 'semicolon_after_instruction' => false,
    'semicolon_after_instruction' => true,
    'short_scalar_cast' => true,
    'single_line_comment_style' => true,
    'single_quote' => true,
    'standardize_not_equals' => true,
    'strict_comparison' => true,
    'strict_param' => true,
    'ternary_to_null_coalescing' => true,
    'trailing_comma_in_multiline' => ['elements' => []],
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'visibility_required' => ['elements' => ['property', 'method', 'const']],
    'void_return' => true,
    'yoda_style' => ['equal' => false, 'identical' => false],
    'object_operator_without_whitespace' => true,
    'ternary_operator_spaces' => true,
    'fully_qualified_strict_types' => true,
    'global_namespace_import' => [
        'import_constants' => false,
        'import_functions' => false,
        'import_classes' => true,
    ],
    'single_space_around_construct' => true,
];

$finder = (new Finder())
    ->exclude('vendor')
    ->in(__DIR__);

return (new Config())
    ->setFinder($finder)
    ->setRules($rules)
    ->setRiskyAllowed(true)
    ->setUsingCache(true);
