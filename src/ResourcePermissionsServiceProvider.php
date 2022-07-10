<?php

namespace Divel\ResourcePermissions;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ResourcePermissionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-resource-permissions')
            ->hasConfigFile();

        $this->defineMacros();
    }

    protected function defineMacros(): void
    {
        JsonResource::macro('appendResourcePermissions', function (array $permissions = []) {
            if ($this instanceof ResourceCollection) {
                $this->collection->each->appendResourcePermissions($permissions);

                return $this;
            }

            $this->resource->appendResourcePermissions($permissions);

            return $this;
        });
    }
}
