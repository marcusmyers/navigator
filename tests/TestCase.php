<?php

namespace Marcusmyers\Navigator\Tests;

use Marcusmyers\Navigator\NavigatorServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->withFactories(__DIR__.'/../database/factories');
    }

    protected function getPackageProviders($app)
    {
        return [ NavigatorServiceProvider::class ];
    }

    protected function getPackageAliases($app)
    {
        return [
            
        ];
    }

    protected function getEnvironmentSetup($app)
    {
        include_once __DIR__.'/../database/migrations/create_navigations_table.php.stub';

        (new \CreateNavigationsTable)->up();
    }
}
