<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DefaultRolePermissionSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CreateSubjectsTableSeeder::class);
        $this->call(CreateCurriculaTableSeeder::class);
        $this->call(AddSubjectsToCurriculumSeeder::class);
    }
}
