<?php

namespace Divel\ResourcePermissions\Traits;

use Illuminate\Support\Facades\Gate;

trait HasResourcePermissions
{
    protected bool $hasResourcePermissionsToAppend = false;

    protected array $resourcePermissionsToCheck = [];

    public function appendResourcePermissions(array $permissions = []): self
    {
        $this->hasResourcePermissionsToAppend = true;
        $this->resourcePermissionsToCheck = $permissions;

        return $this;
    }

    protected function handleGateChecks(): array
    {
        $permissions = ! empty($this->resourcePermissionsToCheck) ? $this->resourcePermissionsToCheck : $this->getDefaultPermissions();

        return collect($permissions)
            ->mapWithKeys(function ($permissionValue, $permissionKey) {
                if (is_string($permissionKey)) {
                    return [$permissionKey => Gate::allows($permissionKey, $permissionValue)];
                }

                return [$permissionValue => Gate::allows($permissionValue, $this)];
            })
            ->toArray();
    }

    protected function getDefaultPermissions(): array
    {
        return config('resource-permissions.defaultPermissions', []);
    }
}
