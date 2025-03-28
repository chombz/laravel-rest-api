<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', '*'],  // Include wildcard
    'allowed_methods' => ['*'],  // Allow all methods
    'allowed_origins' => ['*'],  // Allow all origins for testing; change to ['http://localhost:3000'] in production
    'allowed_headers' => ['*'],  // Allow all headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
