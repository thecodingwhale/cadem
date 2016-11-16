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
        $registration = factory(App\Registration::class, 1)->create();

        $user = factory(App\User::class, 1)->create([
            'registration_id' => $registration->id,
            'name' => 'Aldren Terante',
            'email' => 'aldren.terante@gmail.com',
            'password' => bcrypt('secret'),
            'main_account' => true,
            'active' => true,
        ]);
        $user->assignRole(Role::SUPERADMIN);
        $user->givePermissionTo(Permission::ALL);

        $school = factory(App\School::class, 1)->create([
            'registration_id' => $registration->id,
            'user_id' => $user->id,
            'name' => 'Xavier University'
        ]);

        $user->schools()->attach($school->id);

        factory(App\Course::class, 1)->create([
            'registration_id' => $registration->id,
            'user_id' => $user->id,
            'name' => 'Bachelor of Science in Computer Science',
            'code' => 'BSCS'
        ]);
        factory(App\Course::class, 1)->create([
            'registration_id' => $registration->id,
            'user_id' => $user->id,
            'name' => 'Bachelor of Science in Hotel and Restaurant Management',
            'code' => 'BSHRM'
        ]);
    }
}
