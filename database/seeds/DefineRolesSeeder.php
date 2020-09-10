<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Helpers\PermissionConstant;

class DefineRolesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::query()->updateOrCreate(
            ['name' => PermissionConstant::ROLE_ADMIN],
            ['guard_name' => 'web']
        );

        $modRole = Role::query()->updateOrCreate(
            ['name' => PermissionConstant::ROLE_MOD],
            ['guard_name' => 'web']
        );

        $memberRole = Role::query()->updateOrCreate(
            ['name' => PermissionConstant::ROLE_MEMBER],
            ['guard_name' => 'web']
        );

        Permission::query()->updateOrCreate(
            ['name' => PermissionConstant::PERMISSION_CREATE_MOD],
            ['guard_name' => 'web']
        );

        Permission::query()->updateOrCreate(
            ['name' => PermissionConstant::PERMISSION_UPDATE_MOD],
            ['guard_name' => 'web']
        );

        Permission::query()->updateOrCreate(
            ['name' => PermissionConstant::PERMISSION_DELETE_MOD],
            ['guard_name' => 'web']
        );

        Permission::query()->updateOrCreate(
            ['name' => PermissionConstant::PERMISSION_UPDATE_MEMBER],
            ['guard_name' => 'web']
        );

        Permission::query()->updateOrCreate(
            ['name' => PermissionConstant::PERMISSION_DELETE_MEMBER],
            ['guard_name' => 'web']
        );

        Permission::query()->updateOrCreate(
            ['name' => PermissionConstant::PERMISSION_CREATE_POST],
            ['guard_name' => 'web']
        );

        Permission::query()->updateOrCreate(
            ['name' => PermissionConstant::PERMISSION_UPDATE_POST],
            ['guard_name' => 'web']
        );

        Permission::query()->updateOrCreate(
            ['name' => PermissionConstant::PERMISSION_DELETE_POST],
            ['guard_name' => 'web']
        );

        Permission::query()->updateOrCreate(
            ['name' => PermissionConstant::PERMISSION_CREATE_PRODUCT],
            ['guard_name' => 'web']
        );

        Permission::query()->updateOrCreate(
            ['name' => PermissionConstant::PERMISSION_UPDATE_PRODUCT],
            ['guard_name' => 'web']
        );

        Permission::query()->updateOrCreate(
            ['name' => PermissionConstant::PERMISSION_DELETE_PRODUCT],
            ['guard_name' => 'web']
        );

        Permission::query()->updateOrCreate(
            ['name' => PermissionConstant::PERMISSION_VIEW_ADMIN_PAGE],
            ['guard_name' => 'web']
        );

        $adminRole->givePermissionTo([
            PermissionConstant::PERMISSION_CREATE_MOD,
            PermissionConstant::PERMISSION_UPDATE_MOD,
            PermissionConstant::PERMISSION_DELETE_MOD,
            PermissionConstant::PERMISSION_UPDATE_MEMBER,
            PermissionConstant::PERMISSION_DELETE_MEMBER,
            PermissionConstant::PERMISSION_CREATE_POST,
            PermissionConstant::PERMISSION_UPDATE_POST,
            PermissionConstant::PERMISSION_DELETE_POST,
            PermissionConstant::PERMISSION_CREATE_PRODUCT,
            PermissionConstant::PERMISSION_UPDATE_PRODUCT,
            PermissionConstant::PERMISSION_DELETE_PRODUCT,
            PermissionConstant::PERMISSION_VIEW_ADMIN_PAGE,
        ]);

        $modRole->givePermissionTo([
            PermissionConstant::PERMISSION_UPDATE_MEMBER,
            PermissionConstant::PERMISSION_DELETE_MEMBER,
            PermissionConstant::PERMISSION_CREATE_POST,
            PermissionConstant::PERMISSION_UPDATE_POST,
            PermissionConstant::PERMISSION_DELETE_POST,
            PermissionConstant::PERMISSION_CREATE_PRODUCT,
            PermissionConstant::PERMISSION_UPDATE_PRODUCT,
            PermissionConstant::PERMISSION_DELETE_PRODUCT,
            PermissionConstant::PERMISSION_VIEW_ADMIN_PAGE,
        ]);

        $memberRole->givePermissionTo([
            PermissionConstant::PERMISSION_CREATE_POST,
            PermissionConstant::PERMISSION_UPDATE_POST,
            PermissionConstant::PERMISSION_DELETE_POST,
            PermissionConstant::PERMISSION_CREATE_PRODUCT,
            PermissionConstant::PERMISSION_UPDATE_PRODUCT,
            PermissionConstant::PERMISSION_DELETE_PRODUCT,
        ]);
    }
}
