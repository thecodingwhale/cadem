<?php

use Illuminate\Database\Seeder;

use App\Subject;
use App\Curriculum;

class AddSubjectsToCurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curriculum1 = Curriculum::find(1);
        $curriculum2 = Curriculum::find(2);
        $curriculum1->subjects()->attach([1, 3]);
        $curriculum2->subjects()->attach([2, 4]);

        $curriculum3 = Curriculum::find(3);
        $curriculum4 = Curriculum::find(4);
        $curriculum3->subjects()->attach([1, 3]);
        $curriculum4->subjects()->attach([2, 4]);
    }
}
