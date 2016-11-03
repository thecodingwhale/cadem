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
        $school = factory(App\School::class, 1)->create([
            'name' => 'College of Industrial Arts'
        ]);
        $user->schools()->attach($school->id);
    }
}
