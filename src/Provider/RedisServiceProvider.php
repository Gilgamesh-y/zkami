<?php

namespace Src\Provider;

use Src\App;
use Src\Server\Redis\RedisManager;

class RedisServiceProvider extends AbstractProvider
{
    protected $serviceName = 'php_redis';

    public function register()
    {
        $this->app->set($this->serviceName, function () {
            return new RedisManager();
        });
    }
}