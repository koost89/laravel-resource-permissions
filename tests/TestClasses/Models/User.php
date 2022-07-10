<?php

namespace Divel\ResourcePermissions\Tests\TestClasses\Models;

use Divel\ResourcePermissions\Tests\TestClasses\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['*'];

    protected static function newFactory(): Factory
    {
        return UserFactory::new();
    }
}
