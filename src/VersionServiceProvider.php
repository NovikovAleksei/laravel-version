<?php

namespace NovikovAleksei\LaravelVersion;

use Illuminate\Support\ServiceProvider;

class VersionServiceProvider extends ServiceProvider
{
    public function boot() :string
    {

    }

    public function register()
    {
        $this->app->bind('get-version', function () {
            return new VersionLaravel();
        });
    }
}