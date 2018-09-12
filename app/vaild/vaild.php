<?php

$vaildConfigs = [
    'api/ipinfo' => [
        'ip' => 'present|ip|length_max:16',
    ],
    'api/ip' => [
    ],
    'collect/ip' => [
    ],
    'collect/ipinfo' => [
        'key' => 'present|string|length_max:64',
        'start' => 'present|timestamp',
        'end' => 'present|timestamp',
    ],
    'collect/searchusers' => [
        'nickname' => 'string|length_max:16',
    ],
];
