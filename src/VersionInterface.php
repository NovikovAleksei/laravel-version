<?php

namespace NovikovAleksei\LaravelVersion;

interface VersionInterface
{
    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function getVersion(): string;
}