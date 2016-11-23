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
        $this->createFirstAccount();
        $this->createSecondAccount();
    }

    private function createFirstAccount()
    {
        $registration = factory(App\Registration::class, 1)->create();

        $user = factory(App\User::class, 1)->create([
            'registration_id' => $registration->id,
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => bcrypt('secret'),
            'main_account' => true,
            'active' => true,
        ]);
        $user->assignRole(Role::SUPERADMIN);
        $user->givePermissionTo(Permission::ALL);

        $firstSchool = factory(App\School::class, 1)->create([
            'registration_id' => $registration->id,
            'user_id' => $user->id,
            'name' => 'Ateneo de Manila University'
        ]);
        $secondSchool = factory(App\School::class, 1)->create([
            'registration_id' => $registration->id,
            'user_id' => $user->id,
            'name' => 'Ateneo de Naga University'
        ]);

        $user->schools()->attach([
            $firstSchool->id,
            $secondSchool->id
        ]);

        factory(App\Course::class, 1)->create([
            'registration_id' => $registration->id,
            'user_id' => $user->id,
            'name' => 'Bachelor of Science in Computer Science',
            'code' => 'BSCS'
        ]);
        factory(App\Course::class, 1)->create([
            'registration_id' => $registration->id,
            'user_id' => $user->id,
            'name' => 'Bachelor of Science in Nursing',
            'code' => 'BSN'
        ]);
        factory(App\Course::class, 1)->create([
            'registration_id' => $registration->id,
            'user_id' => $user->id,
            'name' => 'Bachelor of Science in Hotel and Restaurant Management',
            'code' => 'BSHRM'
        ]);
    }

    private function createSecondAccount()
    {
        $registration = factory(App\Registration::class, 1)->create();

        $user = factory(App\User::class, 1)->create([
            'registration_id' => $registration->id,
            'name' => 'Dexter Dy',
            'email' => 'dexter.dy@gmail.com',
            'password' => bcrypt('secret'),
            'main_account' => true,
            'active' => true,
        ]);
        $user->assignRole(Role::SUPERADMIN);
        $user->givePermissionTo(Permission::ALL);

        $firstSchool = factory(App\School::class, 1)->create([
            'registration_id' => $registration->id,
            'user_id' => $user->id,
            'name' => 'De La Salle University Manila'
        ]);
        $secondSchool = factory(App\School::class, 1)->create([
            'registration_id' => $registration->id,
            'user_id' => $user->id,
            'name' => 'De La Salle University Dasmarinas'
        ]);

        $user->schools()->attach([
            $firstSchool->id,
            $secondSchool->id
        ]);

        factory(App\Course::class, 1)->create([
            'registration_id' => $registration->id,
            'user_id' => $user->id,
            'name' => 'Bachelor of Science in Civil Engineering',
            'code' => 'BSCE'
        ]);
        factory(App\Course::class, 1)->create([
            'registration_id' => $registration->id,
            'user_id' => $user->id,
            'name' => 'Bachelor of Science in Mechanical Engineering',
            'code' => 'BSME'
        ]);
        factory(App\Course::class, 1)->create([
            'registration_id' => $registration->id,
            'user_id' => $user->id,
            'name' => 'Bachelor of Science in Psychology',
            'code' => 'BSP'
        ]);
    }
}
