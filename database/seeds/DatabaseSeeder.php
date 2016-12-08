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
        $this->call(CreateCurriculumCourseSeeder::class);
        $this->call(CreateCurriculumComputerScienceSeeder::class);
        $this->call(CreateCurriculumForHRMSeeder::class);
        $this->call(CreateSampleEnrollmentWithCoursesWithAssignSectionsSeeder::class);
        $this->call(AddStudentPerSectionCourseYearSeeeder::class);
    }
}
