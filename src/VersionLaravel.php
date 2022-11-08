<?php

namespace NovikovAleksei\LaravelVersion;

use NovikovAleksei\LaravelVersion\VersionInterface;

class VersionLaravel implements VersionInterface
{
    public function getVersion() : string
    {
        return 'Laravel version is : ';
    }
}