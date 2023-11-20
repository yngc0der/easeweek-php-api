<?php

return [
    'openapi-file' => __DIR__ . '/resources/EasyWeek-Partner-API.v1.json',
    'namespace' => 'Yngc0der\EasyWeek\Api',
    'directory' => __DIR__ . '/generated/',
    'reference' => true,
    'strict' => false,
    'clean-generated' => true,
    'use-fixer' => true,
    'fixer-config-file' => __DIR__ . '/.php-cs-fixer.php',
];
