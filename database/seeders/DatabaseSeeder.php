<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role_supervisor = Role::create(['name' => 'Supervisor']);
        $role_ktt = Role::create(['name' => 'KTT']);
        $role_manager = Role::create(['name' => 'Manager']);

        $user_supervisor = \App\Models\User::create([
            'name' => 'Supervisor',
            'email' => 'supervisor@taj.com',
            'password' => Hash::make('password'),
        ]);
        $user_supervisor->assignRole($role_supervisor);
        $user_ktt = \App\Models\User::create([
            'name' => 'KTT',
            'email' => 'ktt@taj.com',
            'password' => Hash::make('password'),
        ]);
        $user_ktt->assignRole($role_ktt);
        $user_manager = \App\Models\User::create([
            'name' => 'Manager',
            'email' => 'manager@taj.com',
            'password' => Hash::make('password'),
        ]);
        $user_manager->assignRole($role_manager);
    }
}
