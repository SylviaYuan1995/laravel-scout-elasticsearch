<?php
$elasticsearchHosts = explode(',', env('ELASTICSEARCH_HOST', '127.0.0.1:9200'));
$elasticsearchHostPort = [];
foreach ($elasticsearchHosts as $elasticsearchHost) {
    $elasticsearchHostPortArray = explode(':', $elasticsearchHost);
    $currentUrl = [
        'host' => $elasticsearchHostPortArray[0],
        'port' => $elasticsearchHostPortArray[1],

    ];
    if (env('ELASTICSEARCH_USER', null)) {
        $currentUrl['user'] = env('ELASTICSEARCH_USER', null);
        $currentUrl['pass'] = env('ELASTICSEARCH_PASS', null);
    }
    $elasticsearchHostPort[] = $currentUrl;
}

return [
    'host' => $elasticsearchHosts,

    'indices' => [
        'mappings' => [
            'default' => [
                'properties' => [
                    'id' => [
                        'type' => 'keyword',
                    ],
                ],
            ],
        ],
        'settings' => [
            'default' => [
                'number_of_shards' => 1,
                'number_of_replicas' => 0,
            ],
        ],
    ]
];
