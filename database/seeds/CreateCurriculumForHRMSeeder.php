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
        $this->createSecondYearFirstSemester($userId, $registrationId);
        $this->createSecondYearSecondSemester($userId, $registrationId);
        $this->createThirdfYearFirstSemester($userId, $registrationId);
        $this->createThirdfYearSecondSemester($userId, $registrationId);
        $this->createFourthYearFirstSemester($userId, $registrationId);
        $this->createFourthYearSecondSemester($userId, $registrationId);
    }

    private function createFourthYearSecondSemester($userId, $registrationId)
    {
        $subjectOne = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Practicum 2',
            'code' => 'HRM 183',
            'units' => 10,
        ]);

        $curriculumSecondSemester = \App\Curriculum::find(24);
        $curriculumSecondSemester->subjects()->attach([
            $subjectOne->id
        ]);
    }

    private function createFourthYearFirstSemester($userId, $registrationId)
    {
        $subjectOne = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Computer Application',
            'code' => 'Comp 21',
            'units' => 3,
        ]);

        $subjectTwo = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Human Behavior in Organization',
            'code' => 'Management 102',
            'units' => 3,
        ]);

        $subjectThree = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Total Quality Management',
            'code' => 'TQM 101',
            'units' => 3,
        ]);

        $subjectFour = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Research in HRM',
            'code' => 'HRM 191',
            'units' => 3,
        ]);

        $subjectFive = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Entrepreneurship and Business Planning',
            'code' => 'Entrep 101',
            'units' => 3,
        ]);

        $subjectSix = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Events Management',
            'code' => 'Tourism 103',
            'units' => 3,
        ]);

        $subjectSeven = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Cruise, Leisure and Recreation Management',
            'code' => 'HRM 131',
            'units' => 3,
        ]);

        $subjectEight = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Science Technology and Society',
            'code' => 'STS 100 ',
            'units' => 3,
        ]);

        $curriculumSecondSemester = \App\Curriculum::find(23);
        $curriculumSecondSemester->subjects()->attach([
            $subjectOne->id,
            $subjectTwo->id,
            $subjectThree->id,
            $subjectFour->id,
            $subjectFive->id,
            $subjectSix->id,
            $subjectSeven->id,
            $subjectEight->id
        ]);
    }

    private function createThirdfYearSecondSemester($userId, $registrationId)
    {
        $subjectOne = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Rizal’s Life, Works and Writings',
            'code' => 'Soc Sci 13',
            'units' => 3,
        ]);

        $subjectTwo = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Society and Culture',
            'code' => 'Soc Sci 15',
            'units' => 3,
        ]);

        $subjectThree = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Applied Mathematics',
            'code' => 'Math 101',
            'units' => 3,
        ]);

        $subjectFour = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Tourism Planning and Development',
            'code' => 'Tourism 101',
            'units' => 3,
        ]);

        $subjectFive = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Legal Aspects in HR and Tourism',
            'code' => 'HRM 152',
            'units' => 3,
        ]);

        $subjectSix = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'F and B Management and Control System',
            'code' => 'HRM 122',
            'units' => 3,
        ]);

        $subjectSeven = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Facilities Planning and Design Management',
            'code' => 'HRM 126',
            'units' => 3,
        ]);

        $subjectEight = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'International Cuisine 2',
            'code' => 'HRM 172',
            'units' => 3,
        ]);

        $subjectNine = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Foreign Language 2',
            'code' => 'HRM 12',
            'units' => 3,
        ]);

        $curriculumSecondSemester = \App\Curriculum::find(22);
        $curriculumSecondSemester->subjects()->attach([
            $subjectOne->id,
            $subjectTwo->id,
            $subjectThree->id,
            $subjectFour->id,
            $subjectFive->id,
            $subjectSix->id,
            $subjectSeven->id,
            $subjectEight->id,
            $subjectNine->id
        ]);
    }

    private function createThirdfYearFirstSemester($userId, $registrationId)
    {
        $subjectOne = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Foundations of Philosophy and Ethics',
            'code' => 'HUM - 12',
            'units' => 3,
        ]);

        $subjectTwo = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'World Classics',
            'code' => 'HUM - 13',
            'units' => 3,
        ]);

        $subjectThree = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Principles of Economics, Taxation and Land Reform with Cooperatives',
            'code' => 'Soc Sci - 12',
            'units' => 3,
        ]);

        $subjectFour = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'General Psychology',
            'code' => 'Soc Sci - 14',
            'units' => 3,
        ]);

        $subjectFive = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Basic Finance',
            'code' => 'Finance 101',
            'units' => 3,
        ]);

        $subjectSix = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Tourism Industry Overview',
            'code' => 'Tourism 101',
            'units' => 3,
        ]);

        $subjectSeven = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'International Cuisine 1',
            'code' => 'HRM - 171',
            'units' => 3,
        ]);

        $subjectEight = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'International Cuisine 1',
            'code' => 'HRM - 171',
            'units' => 2,
        ]);

        $subjectNine = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Rooms Division Management and Control System',
            'code' => 'HRM - 125',
            'units' => 2,
        ]);

        $subjectTen = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Foreign Language 1',
            'code' => 'For Lang - 11',
            'units' => 3,
        ]);

        $curriculumSecondSemester = \App\Curriculum::find(21);
        $curriculumSecondSemester->subjects()->attach([
            $subjectOne->id,
            $subjectTwo->id,
            $subjectThree->id,
            $subjectFour->id,
            $subjectFive->id,
            $subjectSix->id,
            $subjectSeven->id,
            $subjectEight->id,
            $subjectNine->id,
            $subjectTen->id
        ]);
    }

    private function createSecondYearSecondSemester($userId, $registrationId)
    {

        $subjectOne = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Communication 4',
            'code' => 'AH - 4',
            'units' => 3,
        ]);

        $subjectTwo = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Introduction to Arts',
            'code' => 'HUM - 11',
            'units' => 3,
        ]);

        $subjectThree = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Asian Literature',
            'code' => 'HUM - 14',
            'units' => 3,
        ]);

        $subjectFour = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Fundamentals of Accounting',
            'code' => 'Accounting 104',
            'units' => 3,
        ]);

        $subjectFive = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Introduction to Tourism Theory',
            'code' => 'Tourism 100',
            'units' => 3,
        ]);

        $subjectSix = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Beverage/Bar Operations Management (Bartending)',
            'code' => 'HRM 112',
            'units' => 2,
        ]);

        $subjectSeven = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Marketing Principles and Practices in the Hospitality Industry',
            'code' => 'HRM 144',
            'units' => 2,
        ]);

        $curriculumSecondSemester = \App\Curriculum::find(20);
        $curriculumSecondSemester->subjects()->attach([
            6,
            29,
            $subjectOne->id,
            $subjectTwo->id,
            $subjectThree->id,
            $subjectFour->id,
            $subjectFive->id,
            $subjectSix->id,
            $subjectSeven->id
        ]);
    }

    private function createSecondYearFirstSemester($userId, $registrationId)
    {
        $subjectOne = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Principles Management',
            'code' => 'Management - 103',
            'units' => 3,
        ]);

        $subjectTwo = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Banquet, Function and Catering Services Procedures and Management (Food and Beverage Services)',
            'code' => 'HRM - 121',
            'units' => 3,
        ]);

        $subjectThree = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Baking and Pastry Production',
            'code' => 'HRM - 161',
            'units' => 4,
        ]);

        $subjectFour = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Rooms Division Service Procedures (Front Office)',
            'code' => 'HRM - 124',
            'units' => 3,
        ]);

        $curriculumFirstSemester = \App\Curriculum::find(19);
        $curriculumFirstSemester->subjects()->attach([
            5,
            21,
            22,
            $subjectOne->id,
            $subjectTwo->id,
            $subjectThree->id,
            $subjectFour->id
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
        ]);

        $subjectTwo = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Basic Statistics',
            'code' => 'Math 12',
            'units' => 3,
        ]);

        $subjectThree = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Fundamentals of Biology and Earth Science',
            'code' => 'Nat Sci 11',
            'units' => 3,
        ]);

        $subjectFour = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Information Technology Essentials',
            'code' => 'Computer 11',
            'units' => 3,
        ]);

        $subjectFive = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Food Hygiene, Sanitation and Environmental Concerns',
            'code' => 'Food Hygiene 100 ',
            'units' => 3,
        ]);

        $subjectSix = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Culinary Arts and Sciences (Commercial Cooking)',
            'code' => 'CAS 100',
            'units' => 2,
        ]);

        $subjectSeven = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Man and Morality',
            'code' => 'Theo 12',
            'units' => 3,
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

    private function createFirstYearFirstSemester($userId, $registrationId)
    {
        $subjectOne = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'College Algebra 1',
            'code' => 'Math - 11',
            'units' => 3,
        ]);

        $subjectTwo = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Fundamentals of Chemistry and Physics',
            'code' => 'Nat Sci 12',
            'units' => 3,
        ]);

        $subjectThree = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Introduction to Hotel/Restaurant and Related Institutions Management (Housekeeping)',
            'code' => 'HRM 111',
            'units' => 3,
        ]);

        $subjectFour = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Man and Religion',
            'code' => 'Theo 11',
            'units' => 3,
        ]);

        $subjectFive = factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Komunikasyon sa Akademikong Filipino',
            'code' => 'Fil 11',
            'units' => 3,
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

}
