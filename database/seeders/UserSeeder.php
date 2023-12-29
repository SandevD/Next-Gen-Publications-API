<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name'=>'zuse',
            'last_name'=>'lk',
            'email' => 'zuse@gmail.com',
            'password' =>Hash::make('kalupusa321@'),
        ]);

        $permissions = [
            'role-list',
            'role-create',
            'role-edit',

            'book-list',
            'book-create',
            'book-edit',

            'user-list',
            'user-create',
            'user-edit',

         ];

         $role = Role::where('id', 2)->first();

         $role->syncPermissions($permissions);

         $user->assignRole([$role->id]);

    }
}
