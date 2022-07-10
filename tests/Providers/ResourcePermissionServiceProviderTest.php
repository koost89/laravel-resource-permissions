<?php

use Illuminate\Http\Resources\Json\JsonResource;

it('can boot the macro', function () {
    expect(JsonResource::hasMacro('appendResourcePermissions'))->toBeTrue();
});
