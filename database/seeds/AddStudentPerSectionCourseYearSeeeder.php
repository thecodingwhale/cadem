<?php

use Illuminate\Database\Seeder;
use App\Role;

class AddStudentPerSectionCourseYearSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            $user = factory(App\User::class, 1)->create([
                'registration_id' => 1,
                'active' => true
            ]);
            $user->assignRole(Role::STUDENT);
            $user->schools()->attach([
                1
            ]);

            factory(App\Student::class, 1)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
