<?php

namespace MPK\BlueprintAddonLaravelData\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use MPK\BlueprintAddonLaravelData\BlueprintAddonLaravelDataServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MPK\\BlueprintAddonLaravelData\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            BlueprintAddonLaravelDataServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_blueprint-addon-laravel-data_table.php.stub';
        $migration->up();
        */
    }
}
