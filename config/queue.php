<?php

return [
    'default' => env('QUEUE_CONNECTION', 'sync'),
    'connections' => [
        'sync' => [
            'driver' => 'sync',
        ],
        'database' => [
            'driver' => 'database',
            'connection' => env('QUEUE_DB_CONNECTION'),
            'table' => env('QUEUE_TABLE', 'jobs'),
        ],
        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => env('BEANSTALKD_HOST', 'localhost'),
            'queue' => env('BEANSTALKD_QUEUE', 'default'),
            'retry_after' => 90,
            'block_for' => 0,
            'after_commit' => false,
        ],
        'redis' => [
            'driver' => 'redis',
            'connection' => env('QUEUE_REDIS_CONNECTION', 'default'),
            'queue' => env('QUEUE_REDIS_QUEUE', 'default'),
            'retry_after' => 90,
            'block_for' => null,
            'after_commit' => false,
        ],
    ],
    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database'),
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => env('QUEUE_FAILED_TABLE', 'failed_jobs'),
    ],
];
