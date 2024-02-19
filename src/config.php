<?php

$config = [
    'affinidi' => [
        'callback' => getenv('APP_URL') . '/callback.php',
        'keys' => [
            'id' => getenv('PROVIDER_CLIENT_ID'),
            'secret' => getenv('PROVIDER_CLIENT_SECRET')
        ],
        'endpoints' => [
            'api_base_url' => getenv('PROVIDER_ISSUER'),
            'authorize_url' => getenv('PROVIDER_ISSUER') . '/oauth2/auth',
            'access_token_url' => getenv('PROVIDER_ISSUER') . '/oauth2/token',
        ]
    ],
];