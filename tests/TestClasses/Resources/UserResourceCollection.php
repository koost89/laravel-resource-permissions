<?php

namespace Divel\ResourcePermissions\Tests\TestClasses\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserResourceCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'links' => ['https://test.com'],
        ];
    }
}
