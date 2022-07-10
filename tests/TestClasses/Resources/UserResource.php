<?php

namespace Divel\ResourcePermissions\Tests\TestClasses\Resources;

use Divel\ResourcePermissions\Http\Resources\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request): array
    {
        return parent::toArray($request) + [
            'name' => $this->name,
        ];
    }
}
