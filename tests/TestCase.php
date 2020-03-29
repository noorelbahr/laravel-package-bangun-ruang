<?php

namespace NoorElbahr\BangunRuang\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \NoorElbahr\BangunRuang\Providers\BangunRuangServiceProvider::class
        ];
    }
}
