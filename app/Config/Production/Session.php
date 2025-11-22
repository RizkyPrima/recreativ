<?php

namespace Config\Production;

use CodeIgniter\Config\BaseConfig;

class Session extends BaseConfig
{
    // Use ArrayHandler on serverless (non-persistent per-request)
    public string $driver = 'CodeIgniter\Session\Handlers\ArrayHandler';
    public string $cookieName = 'ci_session';
    public int $expiration = 7200;
    public string $savePath = '';
    public bool $matchIP = false;
    public int $timeToUpdate = 300;
    public bool $regenerateDestroy = false;
}
