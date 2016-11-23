<?php

use Illuminate\Database\Seeder;

class CreateCurriculumCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCurriculumFourYearCourse(1, 1, 1);
        $this->createCurriculumFourYearCourse(1, 1, 2);
        $this->createCurriculumFourYearCourse(1, 1, 3);

        $this->createCurriculumFiveYearCourse(2, 2, 4);
        $this->createCurriculumFiveYearCourse(2, 2, 5);
        $this->createCurriculumFourYearCourse(2, 2, 6);
    }

    private function createCurriculumFourYearCourse($userId, $registrationId, $courseId)
    {
        // 1st year | 1st and 2nd semester
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 1,
            'semester' => 1
        ]);
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 1,
            'semester' => 2
        ]);

        // 2nd year | 1st and 2nd semester
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 2,
            'semester' => 1
        ]);
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 2,
            'semester' => 2
        ]);

        // 3rd year | 1st and 2nd semester
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 3,
            'semester' => 1
        ]);
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 3,
            'semester' => 2
        ]);

        // 4th year | 1st and 2nd semester
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 4,
            'semester' => 1
        ]);
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 4,
            'semester' => 2
        ]);
    }

    private function createCurriculumFiveYearCourse($userId, $registrationId, $courseId)
    {
        // 1st year | 1st and 2nd semester
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 1,
            'semester' => 1
        ]);
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 1,
            'semester' => 2
        ]);

        // 2nd year | 1st and 2nd semester
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 2,
            'semester' => 1
        ]);
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 2,
            'semester' => 2
        ]);

        // 3rd year | 1st and 2nd semester
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 3,
            'semester' => 1
        ]);
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 3,
            'semester' => 2
        ]);

        // 4th year | 1st and 2nd semester
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 4,
            'semester' => 1
        ]);
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 4,
            'semester' => 2
        ]);

        // 5th year | 1st and 2nd semester
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 5,
            'semester' => 1
        ]);
        factory(App\Curriculum::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'course_id' => $courseId,
            'year_level' => 5,
            'semester' => 2
        ]);
    }
}
