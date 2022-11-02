<?php

namespace NovikovAleksei\LaravelVersion;

use Illuminate\Container\Container;

class Version
{
    /**
     * @var Container
     */
    private Container $app;

    /**
     * Version constructor.
     *
     * @param Container $app
     */
    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    /**
     * Get original application version string.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->app->version();
    }
}