<?php

$routeConfigs = [
    // ip
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

    // cms
    [
        'type' => 'rewrite',
        'match' => '/cms/get/slideshow',
        'route' => [
            'controller' => 'cms',
            'action' => 'slideshow',
        ],
    ],
    [
        'type' => 'rewrite',
        'match' => '/cms/get/news',
        'route' => [
            'controller' => 'cms',
            'action' => 'news',
        ],
    ],
    [
        'type' => 'rewrite',
        'match' => '/cms/get/contact',
        'route' => [
            'controller' => 'cms',
            'action' => 'contact',
        ],
    ],
];
