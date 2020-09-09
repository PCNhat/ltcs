<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Helpers\PermissionConstant;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::query()->updateOrCreate(
            [
                'username' => 'admin',
            ],
            [
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'phamcongnhat1415@gmail.com',
                'password' => Hash::make('admin123'),
            ]
        );

        $admin->assignRole(PermissionConstant::ROLE_ADMIN);

        $mod = User::query()->updateOrCreate(
            [
                'username' => 'mod',
            ],
            [
                'first_name' => 'Mod',
                'last_name' => 'Mod',
                'email' => 'phamcongnhat1415@gmail.com',
                'password' => Hash::make('admin123'),
            ]
        );

        $mod->assignRole(PermissionConstant::ROLE_MOD);
    }
}
