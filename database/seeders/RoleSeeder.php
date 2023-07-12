<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'Administrator',
            'display_name' => 'Administrator', // optional
            'all' => 1, // optional
            'description' => 'Admin default created by Lblara', // optional
        ]);

        $executive = Role::create([
            'name' => 'Executive',
            'display_name' => 'Executive', // optional
            'description' => 'Executive default created by Lblara', // optional
        ]);
        $user = Role::create([
            'name' => 'User',
            'display_name' => 'User', // optional
            'description' => 'User default created  by Lblara', // optional
        ]);

        // store permission of user

        $viewUserPermission = Permission::create([
            'name' => 'manage-user',
            'display_name' => 'Manage user Permission'
        ]);
        $createUserPermission = Permission::create([
            'name' => 'create-user',
            'display_name' => 'Create user Permission'
        ]);
        $storeUserPermission = Permission::create([
            'name' => 'store-user',
            'display_name' => 'Store user Permission'
        ]);
        $editUserPermission = Permission::create([
            'name' => 'edit-user',
            'display_name' => 'Edit user Permission'
        ]);
        $updateUserPermission = Permission::create([
            'name' => 'update-user',
            'display_name' => 'Update user Permission'
        ]);
        $deleteUserPermission = Permission::create([
            'name' => 'delete-user',
            'display_name' => 'Delete user Permission'
        ]);
        $showUserPermission = Permission::create([
            'name' => 'show-user',
            'display_name' => 'Show user Permission'
        ]);

        $executive->attachPermission($viewUserPermission);
        $executive->attachPermission($createUserPermission);
        $executive->attachPermission($storeUserPermission);
        $executive->attachPermission($editUserPermission);
        $executive->attachPermission($updateUserPermission);
        $executive->attachPermission($deleteUserPermission);
        $executive->attachPermission($showUserPermission);

        Permission::create([
            'name' => 'manage-role',
            'display_name' => 'Manage role Permission'
        ])->create([
            'name' => 'create-role',
            'display_name' => 'Create role Permission'
        ])->create([
            'name' => 'store-role',
            'display_name' => 'Store role Permission'
        ])->create([
            'name' => 'edit-role',
            'display_name' => 'Edit role Permission'
        ])->create([
            'name' => 'update-role',
            'display_name' => 'Update role Permission'
        ])->create([
            'name' => 'delete-role',
            'display_name' => 'Delete role Permission'
        ]);

        Permission::create([
            'name' => 'manage-permission',
            'display_name' => 'Manage permission Permission'
        ])->create([
            'name' => 'create-permission',
            'display_name' => 'Create permission Permission'
        ])->create([
            'name' => 'store-permission',
            'display_name' => 'Store permission Permission'
        ])->create([
            'name' => 'edit-permission',
            'display_name' => 'Edit permission Permission'
        ])->create([
            'name' => 'update-permission',
            'display_name' => 'Update permission Permission'
        ])->create([
            'name' => 'delete-permission',
            'display_name' => 'Delete permission Permission'
        ]);

        Permission::create([
            'name' => 'manage-menu',
            'display_name' => 'Manage menu Permission'
        ])->create([
            'name' => 'create-menu',
            'display_name' => 'Create menu Permission'
        ])->create([
            'name' => 'store-menu',
            'display_name' => 'Store menu Permission'
        ])->create([
            'name' => 'edit-menu',
            'display_name' => 'Edit menu Permission'
        ])->create([
            'name' => 'update-menu',
            'display_name' => 'Update menu Permission'
        ])->create([
            'name' => 'delete-menu',
            'display_name' => 'Delete menu Permission'
        ]);

        Permission::create([
            'name' => 'manage-module',
            'display_name' => 'Manage module Permission'
        ])->create([
            'name' => 'create-module',
            'display_name' => 'Create module Permission'
        ])->create([
            'name' => 'store-module',
            'display_name' => 'Store module Permission'
        ])->create([
            'name' => 'edit-module',
            'display_name' => 'Edit module Permission'
        ])->create([
            'name' => 'update-module',
            'display_name' => 'Update module Permission'
        ])->create([
            'name' => 'delete-module',
            'display_name' => 'Delete module Permission'
        ]);

        Permission::create([
            'name' => 'manage-setting',
            'display_name' => 'Manage setting Permission'
        ])->create([
            'name' => 'create-setting',
            'display_name' => 'Create setting Permission'
        ])->create([
            'name' => 'store-setting',
            'display_name' => 'Store setting Permission'
        ])->create([
            'name' => 'edit-setting',
            'display_name' => 'Edit setting Permission'
        ])->create([
            'name' => 'update-setting',
            'display_name' => 'Update setting Permission'
        ])->create([
            'name' => 'delete-setting',
            'display_name' => 'Delete setting Permission'
        ]);

        Permission::create([
            'name' => 'manage-page',
            'display_name' => 'Manage page Permission'
        ])->create([
            'name' => 'create-page',
            'display_name' => 'Create page Permission'
        ])->create([
            'name' => 'store-page',
            'display_name' => 'Store page Permission'
        ])->create([
            'name' => 'edit-page',
            'display_name' => 'Edit page Permission'
        ])->create([
            'name' => 'update-page',
            'display_name' => 'Update page Permission'
        ])->create([
            'name' => 'delete-page',
            'display_name' => 'Delete page Permission'
        ]);


        Permission::create([
            'name' => 'manage-api',
            'display_name' => 'Manage api Permission'
        ])->create([
            'name' => 'create-api',
            'display_name' => 'Create api Permission'
        ])->create([
            'name' => 'store-api',
            'display_name' => 'Store api Permission'
        ])->create([
            'name' => 'edit-api',
            'display_name' => 'Edit api Permission'
        ])->create([
            'name' => 'update-api',
            'display_name' => 'Update api Permission'
        ])->create([
            'name' => 'delete-api',
            'display_name' => 'Delete api Permission'
        ]);


    }
}
