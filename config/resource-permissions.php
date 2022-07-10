<?php

return [

    /**
     * The key that is added to your resource array.
     * For example:
     * UserResource
     *  name: Test
     *  ...
     *  can: [
     *      'viewAny',
     *  ]
     */
    'permission_key' => 'can',

    /**
     * The default policies to check.
     * If you do not supply any specific policies, these will get passed.
     * You can also supply these on the Resource itself
     */
    'default_permissions' => [
        'viewAny',
        'view',
        'create',
        'update',
        'delete',
        'forceDelete',
        'restore',
    ],

    /**
     * This value is only applicable when you use the provided JsonResource class
     * If you want to return the entire toArray() from the parent class
     * set this value to true.
     */
    'return_resource_array' => false,
];
