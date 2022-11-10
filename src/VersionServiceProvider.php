<?php

namespace NovikovAleksei\LaravelVersion;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class VersionServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind(VersionInterface::class, function ($app) {
            if (app() instanceof \Illuminate\Foundation\Application) {
                return new VersionLaravel($app->make(Application::class));
            } else {
                return new VersionLumen($app->make(Application::class));
            }
        });
    }
}