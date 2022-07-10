<?php

namespace Divel\ResourcePermissions\Commands;

use Illuminate\Console\Command;

class ResourcePermissionsCommand extends Command
{
    public $signature = 'laravel-resource-permissions';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
