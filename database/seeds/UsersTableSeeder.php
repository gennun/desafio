<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);
        
        $user1 = User::create([
            'name' => 'Usuário',
            'email' => 'user@user.com',
            'password' => bcrypt('user')
        ]);
        
        
        $users = factory(User::class, 15)->create();

        $user1->roles()->attach($userRole);

        $admin->roles()->attach($adminRole);
        
        foreach ($users as $user)
        {
            $user->roles()->attach($userRole);
        }
        
    }
}
