<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\User::class, 1)->create([
            'name' => 'Aldren Terante',
            'email' => 'aldren.terante@gmail.com',
            'password' => bcrypt('secret')
        ]);
        $user->assignRole(Role::SUPERADMIN);
        $user->givePermissionTo(Permission::ALL);
        $userId = $user->id;
        $schoolFirst = factory(App\School::class, 1)->create([
            'name' => 'Technological University of the Philippines - Manila',
            'user_id' => $userId
        ]);
        $schoolFirstId = $schoolFirst->id;
        $schoolSecond = factory(App\School::class, 1)->create([
            'name' => 'Technological University of the Philippines - Cavite',
            'user_id' => $userId
        ]);
        $schoolSecondId = $schoolSecond->id;
        $user->schools()->attach([
            $schoolFirstId
        ]);
    }
}
