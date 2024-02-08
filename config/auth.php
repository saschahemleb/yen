<?php

return [
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \Yen\Models\User::class,
        ],
    ],
];
