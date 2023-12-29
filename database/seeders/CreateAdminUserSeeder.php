<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name'=>'Sandev',
            'last_name'=>'Dullewa',
            'email' => 'sandev.net@gmail.com',
            'password' =>Hash::make('kalupusa321@'),
        ]);


        $role = Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Guest']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

    }
}
