<?php

namespace TallUI\TalluiPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use TallUI\TalluiPackage\Commands\TalluiPackageCommand;

class TalluiPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tallui-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_tallui_package_table')
            ->hasCommand(TalluiPackageCommand::class);
    }
}
