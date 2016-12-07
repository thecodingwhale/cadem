<?php

use Illuminate\Database\Seeder;
use App\Curriculum;

class CreateSampleEnrollmentWithCoursesWithAssignSectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = 1;
        $registrationId = 1;

        $enrollment = factory(App\Enrollment::class, 1)->create([
            'semester' => 1,
            'school_year_from' => 2016,
            'school_year_to' => 2017,
            'user_id' => $userId,
            'registration_id' => $registrationId
        ]);

        $curricula = Curriculum::where([
            ['registration_id', $registrationId],
            ['semester', 1]
        ])->get();

        foreach ($curricula as $curriculum) {
            $enrollmentCourse = factory(App\EnrollmentCourse::class, 1)->create([
                'enrollment_id' => $enrollment->id,
                'course_id' => $curriculum->course_id,
                'year_level' => $curriculum->year_level
            ]);

            factory(App\EnrollmentCourseSection::class, 1)->create([
                'enrollment_course_id' => $enrollmentCourse->id,
                'section' => 'Block A'
            ]);

            factory(App\EnrollmentCourseSection::class, 1)->create([
                'enrollment_course_id' => $enrollmentCourse->id,
                'section' => 'Block B'
            ]);

            factory(App\EnrollmentCourseSection::class, 1)->create([
                'enrollment_course_id' => $enrollmentCourse->id,
                'section' => 'Block C'
            ]);
        }
    }
}
