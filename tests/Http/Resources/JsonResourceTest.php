<?php

use Divel\ResourcePermissions\Tests\TestClasses\Models\User;
use Divel\ResourcePermissions\Tests\TestClasses\Resources\UserResource;
use Divel\ResourcePermissions\Tests\TestClasses\Resources\UserResourceCollection;

it('can append the permissions to a resource', function () {
    $resource = UserResource::make(User::factory()->make())
        ->appendResourcePermissions(['view']);

    expect($resource->response()->getContent())
        ->json()
        ->data
        ->toHaveKey('can', ['view' => false]);
});

it('can append the permissions to a anonymous resource collection', function () {

    $resource = UserResource::collection(User::factory()->count(2)->make())
        ->appendResourcePermissions(['view']);

    expect($resource->response()->getContent())
        ->json()
        ->data
        ->each
        ->toHaveKey('can', ['view' => false]);
});

it('can append the permissions to a specific resource collection', function () {

    $resource = UserResourceCollection::make(User::factory()->count(2)->make())
        ->appendResourcePermissions(['view']);

    expect($resource->response()->getContent())
        ->json()
        ->data
        ->each
        ->toHaveKey('can', ['view' => false]);
});
