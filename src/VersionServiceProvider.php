<?php

namespace NovikovAleksei\LaravelVersion;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class VersionServiceProvider extends ServiceProvider
{
    public function boot() :string
    {

    }

    public function register()
    {
        $this->app->bind(VersionLaravel::class, function ($app) {
            return new VersionLaravel($app->make(Application::class));
        });
    }
}