<?php

$routeConfigs = [
    [
        'type' => 'rewrite',
        'match' => '/service/getipinfo',
        'route' => [
            'controller' => 'api',
            'action' => 'ipinfo',
        ],
    ],
    [
        'type' => 'rewrite',
        'match' => '/service/ip',
        'route' => [
            'controller' => 'api',
            'action' => 'ip',
        ],
    ],
    [
        'type' => 'rewrite',
        'match' => '/collect/ip',
        'route' => [
            'controller' => 'collect',
            'action' => 'ip',
        ],
    ],
    [
        'type' => 'rewrite',
        'match' => '/collect/service/get/ipinfo',
        'route' => [
            'controller' => 'collect',
            'action' => 'ipinfo',
        ],
    ],
    [
        'type' => 'rewrite',
        'match' => '/collect/service/search/users',
        'route' => [
            'controller' => 'collect',
            'action' => 'searchusers',
        ],
    ],
];
