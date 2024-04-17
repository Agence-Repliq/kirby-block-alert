<?php

Kirby::plugin('agence-repliq/kirby-block-alert', [
    'blueprints' => [
        'blocks/alert' => __DIR__ . '/blocks/alert.yml',
    ],
    'snippets' => [
        'blocks/alert' => __DIR__ . '/snippets/blocks/alert.php',
    ],
    'translations' => [
        'fr' => require 'languages/fr.php',
        'en' => require 'languages/en.php'
    ]
]);