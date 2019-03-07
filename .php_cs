<?php

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ]
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
        ->exclude([
          'vendor',
          'node_modules',
          'bootstrap',
          'storage/framework'          
        ])
        ->notPath('config-modelo.php')
        ->notName('*.md')
        ->notName('*.xml')
        ->notName('*.yml')
        ->notName('*.lock')
    );
