<?php

namespace Divel\ResourcePermissions;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Divel\ResourcePermissions\Commands\ResourcePermissionsCommand;

class ResourcePermissionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-resource-permissions')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-resource-permissions_table')
            ->hasCommand(ResourcePermissionsCommand::class);
    }
}
