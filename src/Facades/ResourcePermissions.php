<?php

namespace Divel\ResourcePermissions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Divel\ResourcePermissions\ResourcePermissions
 */
class ResourcePermissions extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-resource-permissions';
    }
}
