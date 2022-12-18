<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateCommonUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Comum',
            'email' => 'comum@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $role = Role::create(['name' => 'Comum']);

        $permissions = Permission::whereIn('name', ['category', 'product', 'manufacturer'])->pluck('id', 'id');

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}