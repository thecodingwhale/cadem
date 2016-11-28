<?php

use Illuminate\Database\Seeder;
use App\Course;

class CreateSampleEnrollmentWithCoursesSeeder extends Seeder
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
            'open' => 1,
            'user_id' => $userId,
            'registration_id' => $registrationId
        ]);

        $courses = Course::where('registration_id', $registrationId);

        $enrollment->courses()->attach(
            $courses->pluck('id')->toArray()
        );

    }
}
