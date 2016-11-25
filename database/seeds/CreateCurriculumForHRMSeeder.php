<?php

use Illuminate\Database\Seeder;

class CreateCurriculumForHRMSeeder extends Seeder
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
        $this->createFirstYearFirstSemester($userId, $registrationId);
        $this->createFirstYearSecondSemester($userId, $registrationId);
    }

    private function createFirstYearFirstSemester($userId, $registrationId)
    {
        $subjectOne = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'College Algebra 1',
            'code' => 'Math - 11',
            'units' => 3,
            'hours' => 3
        ]);

        $subjectTwo = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Fundamentals of Chemistry and Physics',
            'code' => 'Nat Sci 12',
            'units' => 3,
            'hours' => 3
        ]);

        $subjectThree = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Introduction to Hotel/Restaurant and Related Institutions Management (Housekeeping)',
            'code' => 'HRM 111',
            'units' => 3,
            'hours' => 3
        ]);

        $subjectFour = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Man and Religion',
            'code' => 'Theo 11',
            'units' => 3,
            'hours' => 3
        ]);

        $subjectFive = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Komunikasyon sa Akademikong Filipino',
            'code' => 'Fil 11',
            'units' => 3,
            'hours' => 3
        ]);

        $curriculumFirstSemester = \App\Curriculum::find(17);
        $curriculumFirstSemester->subjects()->attach([
            1,
            3,
            7,
            $subjectOne->id,
            $subjectTwo->id,
            $subjectThree->id,
            $subjectFour->id,
            $subjectFive->id
        ]);
    }

    private function createFirstYearSecondSemester($userId, $registrationId)
    {
        $subjectOne = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Pagbasa at Pagsulat Tungo sa Pananaliksik',
            'code' => 'Fil 12',
            'units' => 3,
            'hours' => 3
        ]);

        $subjectTwo = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Basic Statistics',
            'code' => 'Math 12',
            'units' => 3,
            'hours' => 3
        ]);

        $subjectThree = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Fundamentals of Biology and Earth Science',
            'code' => 'Nat Sci 11',
            'units' => 3,
            'hours' => 3
        ]);

        $subjectFour = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Information Technology Essentials',
            'code' => 'Computer 11',
            'units' => 3,
            'hours' => 3
        ]);

        $subjectFive = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Food Hygiene, Sanitation and Environmental Concerns',
            'code' => 'Food Hygiene 100 ',
            'units' => 3,
            'hours' => 3
        ]);

        $subjectSix = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Culinary Arts and Sciences (Commercial Cooking)',
            'code' => 'CAS 100',
            'units' => 2,
            'hours' => 4
        ]);

        $subjectSeven = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Man and Morality',
            'code' => 'Theo 12',
            'units' => 3,
            'hours' => 3
        ]);

        $curriculumSecondSemester = \App\Curriculum::find(18);
        $curriculumSecondSemester->subjects()->attach([
           2,
           4,
           8,
           $subjectOne->id,
           $subjectTwo->id,
           $subjectThree->id,
           $subjectFour->id,
           $subjectFive->id,
           $subjectSix->id,
           $subjectSeven->id
        ]);
    }

}
