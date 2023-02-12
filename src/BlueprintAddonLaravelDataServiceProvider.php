<?php

namespace MPK\BlueprintAddonLaravelData;

use MPK\BlueprintAddonLaravelData\Commands\BlueprintAddonLaravelDataCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BlueprintAddonLaravelDataServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('blueprint-addon-laravel-data')
            ->hasConfigFile('blueprint-addon-laravel-data')
            ->hasCommand(BlueprintAddonLaravelDataCommand::class);
    }
}
