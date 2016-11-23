<?php

use Illuminate\Database\Seeder;

class CreateCurriculumComputerScienceSeeder extends Seeder
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

        $this->createFirstYearCurriculumForComputerScience($userId, $registrationId);
        $this->createSecondYearCurriculumForComputerScience($userId, $registrationId);
        $this->createThirdYearCurriculumForComputerScience($userId, $registrationId);
        $this->createForthYearCurriculumForComputerScience($userId, $registrationId);
    }

    private function createFirstYearCurriculumForComputerScience($userId, $registrationId)
    {
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Communication 1',
            'code' => 'AH - 1',
            'units' => 3,
            'hours' => 3
        ]);
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Communication 2',
            'code' => 'AH - 2',
            'units' => 3,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Physical Education 1',
            'code' => 'PE - 1',
            'units' => 2,
            'hours' => 3
        ]);
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Physical Education 2',
            'code' => 'PE - 2',
            'units' => 2,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'National Service Training Program 1',
            'code' => 'NSTP - 1',
            'units' => 3
        ]);
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'National Service Training Program 2',
            'code' => 'NSTP - 2',
            'units' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'History 1',
            'code' => 'SSP - 1',
            'units' => 3,
            'hours' => 3
        ]);
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'History 2',
            'code' => 'SSP - 2',
            'units' => 3,
            'hours' => 3
        ]);
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Soc Sci 1',
            'code' => 'SSP - 3',
            'units' => 3,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Introduction to Computer Science',
            'code' => 'CMSC 11',
            'units' => 3,
            'hours' => 5
        ]);
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Fundamentals of Programming',
            'code' => 'CMSC 21',
            'units' => 3,
            'hours' => 5
        ]);
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Discrete Mathematical Structures in Computer Science',
            'code' => 'CMSC 55',
            'units' => 4,
            'hours' => 4
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Algebra and Trigonometry',
            'code' => 'Math 17',
            'units' => 5,
            'hours' => 5
        ]);
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Fundamentals of Analysis I',
            'code' => 'Math 73',
            'units' => 3,
            'hours' => 5
        ]);

        $curriculumFirstSemester = \App\Curriculum::find(1);
        $curriculumFirstSemester->subjects()->attach([
            1, 3, 5, 7, 8, 10, 13
        ]);

        $curriculumSecondSemester = \App\Curriculum::find(2);
        $curriculumSecondSemester->subjects()->attach([
            2, 4, 6, 9, 11, 12, 14
        ]);
    }

    private function createSecondYearCurriculumForComputerScience($userId, $registrationId)
    {
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Object-Oriented Programming Paradigms',
            'code' => 'CMSC 23',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Data Structures',
            'code' => 'CMSC 123',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Fundamental of Analysis II',
            'code' => 'Math 74',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Elementary Physics I',
            'code' => 'Physics 71',
            'units' => 4,
            'hours' => 4
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Fundamentals of General Chemistry I',
            'code' => 'Chem 14',
            'units' => 3,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Fundamentals of General Chemistry I - Laboratory',
            'code' => 'Chem 14.1',
            'units' => 1,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Communication 3',
            'code' => 'AH - 3',
            'units' => 3,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Physical Education 3',
            'code' => 'PE - 3',
            'units' => 2,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Web Programming',
            'code' => 'CMSC 121',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Database Systems',
            'code' => 'CMSC 127',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Logic Design & Digital Computer Circuits',
            'code' => 'CMSC 130',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Fundamentals of Analysis III',
            'code' => 'Math 75',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Elementary Statistics',
            'code' => 'Math 101',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Elementary Physics II',
            'code' => 'Physics 72',
            'units' => 4,
            'hours' => 4
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Physical Education 4',
            'code' => 'PE - 4',
            'units' => 2,
            'hours' => 3
        ]);

        $curriculumFirstSemester = \App\Curriculum::find(3);
        $curriculumFirstSemester->subjects()->attach([
            15, 16, 17, 18, 19, 20, 21, 22
        ]);

        $curriculumSecondSemester = \App\Curriculum::find(4);
        $curriculumSecondSemester->subjects()->attach([
            23, 24, 25, 26, 27, 28, 29
        ]);
    }

    private function createThirdYearCurriculumForComputerScience($userId, $registrationId)
    {
        // 1st Semester
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Operating Systems',
            'code' => 'CMSC 125',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Software Engineering I',
            'code' => 'CMSC 128.1',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Computer Organization & Architecture',
            'code' => 'CMSC 135',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Elementary Differential Equations I',
            'code' => 'Math 121.1',
            'units' => 3,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Applied Probability Models',
            'code' => 'Stat 121',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Chem 32 / Stat 130',
            'code' => 'Major Course 1',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'History 5',
            'code' => 'SSP - 5',
            'units' => 3,
            'hours' => 3
        ]);

        // 2nd semester
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Design & Implementation of Programming',
            'code' => 'CMSC 124',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Software Engineering II',
            'code' => 'CMSC 128.2',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Computer Networking',
            'code' => 'CMSC 138',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Linear Algebra',
            'code' => 'Math 120',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Numerical Analysis I',
            'code' => 'Math 174',
            'units' => 3,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'HI 191 / Stat 122',
            'code' => 'Major Course 2',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Communication 5',
            'code' => 'AH - 5',
            'units' => 3,
            'hours' => 3
        ]);

        $curriculumFirstSemester = \App\Curriculum::find(5);
        $curriculumFirstSemester->subjects()->attach([
            30, 31, 32, 33, 34, 35, 36
        ]);

        $curriculumSecondSemester = \App\Curriculum::find(6);
        $curriculumSecondSemester->subjects()->attach([
            37, 38, 39, 40, 41, 42, 43
        ]);
    }

    private function createForthYearCurriculumForComputerScience($userId, $registrationId)
    {
        // 1st Semester
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Automata & Language Theory',
            'code' => 'CMSC 141',
            'units' => 3,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Interactive Computer Graphics',
            'code' => 'CMSC 161',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Ethical & Social Issues in Computer Science',
            'code' => 'CMSC 171',
            'units' => 1,
            'hours' => 1
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Undergraduate Seminar',
            'code' => 'CMSC 197',
            'units' => 1,
            'hours' => 1
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Research Methods in Computer Science',
            'code' => 'CMSC 199',
            'units' => 3,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'HI 192 / Stat Comp 183',
            'code' => 'Major Course 3',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Elective 1',
            'code' => 'Elective 1',
            'units' => 3,
            'hours' => 3
        ]);

        // 2nd Semester
        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Design & Analysis of Algorithms',
            'code' => 'CMSC 142',
            'units' => 3,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Computer Security',
            'code' => 'CMSC 150',
            'units' => 3,
            'hours' => 5
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Special Problem',
            'code' => 'CMSC 198',
            'units' => 3,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'Elective 2',
            'code' => 'Elective 2',
            'units' => 2,
            'hours' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'user_id' => $userId,
            'registration_id' => $registrationId,
            'name' => 'PI 100',
            'code' => 'PI 100',
            'units' => 3,
            'hours' => 3
        ]);

        $curriculumFirstSemester = \App\Curriculum::find(7);
        $curriculumFirstSemester->subjects()->attach([
            44, 45, 46, 47, 48, 49, 50
        ]);

        $curriculumSecondSemester = \App\Curriculum::find(8);
        $curriculumSecondSemester->subjects()->attach([
            51, 52, 53, 54, 55
        ]);
    }
}
