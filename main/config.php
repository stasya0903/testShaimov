<?php
return [
    'name' => 'user',
    'defaultController' => 'user',
    'components' => [
        'db' => [
            'class' => \App\services\DB::class,
            'config' => [
                'driver' => 'mysql',
                'host' => 'localhost',
                'db' => 'onlineshop',
                'charset' => 'UTF8',
                'username' => 'root',
                'password' => 'root',
            ],
        ],
        'render' => [
            'class' => \App\services\renders\TwigRender::class,
        ],

    ],

];
