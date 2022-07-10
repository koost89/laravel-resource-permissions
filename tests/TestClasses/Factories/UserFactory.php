<?php

namespace Divel\ResourcePermissions\Tests\TestClasses\Factories;

use Divel\ResourcePermissions\Tests\TestClasses\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
        ];
    }
}
