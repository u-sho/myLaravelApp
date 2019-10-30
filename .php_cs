<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('bootstrap/cache')
    ->exclude('resources/assets')
    ->exclude('resources/views')
    ->exclude('storage')
    ->exclude('node_modules')
    ->in(__DIR__);

$fixers = [
    '@PSR2'        => true,
    'array_syntax' => ['syntax' => 'short'],
    'braces'       => false,
];

return PhpCsFixer\Config::create()
    ->setRules($fixers)
    ->setFinder($finder)
    ->setUsingCache(false);
