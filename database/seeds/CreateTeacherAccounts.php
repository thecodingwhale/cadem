<?php

use Illuminate\Database\Seeder;

class CreateTeacherAccounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private function create()
    {
        $teacher = factory(App\User::class, 1)->create();
        $teacher->assignRole(App\Role::TEACHER);
        $teacher->schools()->attach([
            1
        ]);
    }

    public function run()
    {
        $count = 5;
        for ($i=0; $i < $count; $i++) {
            $this->create();
        }
    }
}
