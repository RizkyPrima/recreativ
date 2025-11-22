<?php

namespace Config\Production;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Cache\Handlers\DummyHandler;

class Cache extends BaseConfig
{
    /**
     * Use dummy handler for serverless (Vercel) because filesystem is read-only.
     */
    public string $handler = 'dummy';

    public string $backupHandler = 'dummy';

    public string $storePath = '';

    public $cacheQueryString = false;

    public string $prefix = '';

    public int $ttl = 60;

    public string $reservedCharacters = '{}()/\@:';

    public array $file = [
        'storePath' => '',
        'mode'      => 0640,
    ];

    public array $validHandlers = [
        'dummy' => DummyHandler::class,
    ];
}
