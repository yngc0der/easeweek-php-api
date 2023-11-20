<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->append([
        __FILE__,
    ])
;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP74Migration' => true,
        '@PhpCsFixer' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'php_unit_internal_class' => false,
        'php_unit_test_class_requires_covers' => false,
        'phpdoc_add_missing_param_annotation' => false,
        'phpdoc_align' => false,
        'phpdoc_separation' => false,
        'concat_space' => ['spacing' => 'one'],
        'declare_strict_types' => true,
        'ordered_class_elements' => true,
        'blank_line_before_statement' => true,
        'get_class_to_class_keyword' => false,
    ])
    ->setFinder($finder)
;
