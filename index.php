<?php

Kirby::plugin('pixelopen/kirby-cookie-consent', [
    'snippets' => [
        'cookie-consent' => __DIR__ . '/snippets/cookie-consent.php',
        'cookie-services' => __DIR__ . '/snippets/cookie-services.php',
    ],
    'blueprints' => [
        'tabs/cookie-consent' => __DIR__ . '/blueprints/tabs/cookie-consent.yml',
        'utils/toggle' => __DIR__ . '/blueprints/utils/toggle.yml',
    ],
    'translations' => require __DIR__ . '/i18n.php',
]);
