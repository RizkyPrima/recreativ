<?php

namespace Config;

use CodeIgniter\Cache\CacheInterface;
use CodeIgniter\Cache\Handlers\DummyHandler;
use CodeIgniter\Config\BaseConfig;

class Cache extends BaseConfig
{
    /**
     * Primary Handler
     * Use dummy for Vercel (read-only filesystem)
     */
    public string $handler = 'dummy';

    /**
     * Backup Handler
     */
    public string $backupHandler = 'dummy';

    /**
     * Cache Directory Path
     */
    public string $storePath = '';

    /**
     * Cache Include Query String
     *
     * @var bool|list<string>
     */
    public $cacheQueryString = false;

    /**
     * Key Prefix
     */
    public string $prefix = '';

    /**
     * Default TTL
     */
    public int $ttl = 60;

    /**
     * Reserved Characters
     */
    public string $reservedCharacters = '{}()/\@:';

    /**
     * File settings (unused)
     *
     * @var array<string, int|string|null>
     */
    public array $file = [
        'storePath' => '',
        'mode'      => 0640,
    ];

    /**
     * Memcached settings (unused)
     */
    public array $memcached = [
        'host'   => '127.0.0.1',
        'port'   => 11211,
        'weight' => 1,
        'raw'    => false,
    ];

    /**
     * Redis settings (unused)
     */
    public array $redis = [
        'host'     => '127.0.0.1',
        'password' => null,
        'port'     => 6379,
        'timeout'  => 0,
        'database' => 0,
    ];

    /**
     * Valid Handlers — only dummy enabled
     */
    public array $validHandlers = [
        'dummy' => DummyHandler::class,
    ];
}
