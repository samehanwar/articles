<?php

namespace Modules\auth\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Modules\Auth\Entities\User;

class AuthDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // add super admin user
      $id = DB::table('users')->insertGetId([
          'name' => 'admin',
          'email' => 'test@example.com',
          'username' => 'Admin',
          'password' => bcrypt('Password'),
      ]);
      $user = User::find($id);
      $role = Role::create(['name' => 'Admin']);
      $permission = Permission::create(['name' => 'super administrator']);
      $user->assignRole('Admin');
      $role->givePermissionTo('super administrator');


      // add normal user
      $userId = DB::table('users')->insertGetId([
          'name' => 'user',
          'email' => 'user@example.com',
          'username' => 'User',
          'password' => bcrypt('Pass'),
      ]);
      $userRow = User::find($userId);
      $userRole = Role::create(['name' => 'Article Viewer']);
      $userPermission = Permission::create(['name' => 'display & view articles']);
      $userRow->assignRole('Article Viewer');
      $userRole->givePermissionTo('display & view articles');

      //seed a single article
      $userId = DB::table('articles')->insert([
          'name' => 'product item sample',
          'body' => 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
           'created_at' => date('Y-m-d H:i:s'),
           'updated_at' => date('Y-m-d H:i:s')
      ]);
    }
}
