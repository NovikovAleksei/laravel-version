<?php

namespace NovikovAleksei\LaravelVersion;

use Illuminate\Contracts\Foundation\Application;


class VersionLumen implements VersionInterface
{
    protected Application $app;

    /**
     * @param Application $container
     */
    public function __construct(Application $container)
    {
        $this->app = $container;
    }

    /**
     * @return Application
     */
    public function getApp(): Application
    {
        return $this->app;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->app->version();
    }
}