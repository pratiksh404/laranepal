<?php

namespace Pratiksh\LaraNepal\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Pratiksh\LaraNepal\LaraNepalServiceProvider;

class TestCase extends BaseTestCase
{
    public function setup(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
        $this->artisan('migrate', ['--database' => 'testing']);

        $this->loadMigrationsFrom(__DIR__.'/../src/database/migrations');
        $this->loadLaravelMigrations(['--database' => 'testing']);

        $this->withFactories(__DIR__.'/../src/database/factories');
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.key', 'AckfSECXIvnK5r28GVIWUAxmbBSjTsmF');
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }

    protected function getPackageProviders($app)
    {
        return [LaraNepalServiceProvider::class];
    }
}
