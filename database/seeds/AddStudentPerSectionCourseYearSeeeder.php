<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Enrollment;

class AddStudentPerSectionCourseYearSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enrollment = Enrollment::findOrFail(1);
        foreach ($enrollment->enrollmentCourses()->get() as $enrollmentCourse) {
            $getSections = $enrollmentCourse->sections()->get();
            foreach ($getSections as $section) {
                for ($i=0; $i < 5; $i++) {
                    $user = factory(App\User::class, 1)->create([
                        'registration_id' => 1,
                        'active' => true
                    ]);
                    $user->assignRole(Role::STUDENT);
                    $user->schools()->attach([
                        1
                    ]);
                    factory(App\Student::class, 1)->create([
                        'user_id' => $user->id,
                        'year_level' => $enrollmentCourse->year_level,
                        'course_id' => $enrollmentCourse->course_id,
                        'enrollment_id' => $enrollmentCourse->enrollment_id,
                        'section_id' => $section->id
                    ]);
                }
            }
        }
    }
}
