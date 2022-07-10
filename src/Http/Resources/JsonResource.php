<?php

namespace Divel\ResourcePermissions\Http\Resources;

use Divel\ResourcePermissions\Traits\HasResourcePermissions;

class JsonResource extends \Illuminate\Http\Resources\Json\JsonResource
{
    use HasResourcePermissions;

    public function toArray($request): array
    {
        $permissions = [
            config('resource-permissions.permission_key', 'can') => $this->when($this->hasResourcePermissionsToAppend, $this->handleGateChecks()),
        ];

        if (config('resource-permissions.return_resource_array', false)) {
            return array_merge(parent::toArray($request), $permissions);
        }

        return $permissions;
    }
}
