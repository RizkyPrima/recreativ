<?php

namespace Config;

use CodeIgniter\Cache\CacheInterface;
use CodeIgniter\Cache\Handlers\DummyHandler;
use CodeIgniter\Config\BaseConfig;

class Cache extends BaseConfig
{
    /**
     * Primary Handler
     * Using 'dummy' on serverless platforms (Vercel) because filesystem is read-only.
     */
    public string $handler = 'dummy';

    /**
     * Backup Handler
     */
    public string $backupHandler = 'dummy';

    /**
     * Cache directory (keep empty — not used by dummy handler)
     */
    public string $storePath = '';

    /**
     * Whether to include query string in cache file naming
     *
     * @var bool|list<string>
     */
    public $cacheQueryString = false;

    /**
     * Key prefix to avoid collisions
     */
    public string $prefix = '';

    /**
     * Default TTL in seconds
     */
    public int $ttl = 60;

    /**
     * Reserved characters for keys/tags
     */
    public string $reservedCharacters = '{}()/\@:';

    /**
     * File-specific settings (kept empty / safe)
     *
     * @var array<string, int|string|null>
     */
    public array $file = [
        'storePath' => '',
        'mode'      => 0640,
    ];

    /**
     * Memcached settings (unused here)
     */
    public array $memcached = [
        'host'   => '127.0.0.1',
        'port'   => 11211,
        'weight' => 1,
        'raw'    => false,
    ];

    /**
     * Redis settings (unused here)
     */
    public array $redis = [
        'host'     => '127.0.0.1',
        'password' => null,
        'port'     => 6379,
        'timeout'  => 0,
        'database' => 0,
    ];

    /**
     * Valid handlers — limit to dummy only to avoid accidental file writes
     */
    public array $validHandlers = [
        'dummy' => DummyHandler::class,
    ];
}
