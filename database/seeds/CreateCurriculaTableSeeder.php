<?php

use Illuminate\Database\Seeder;

class CreateCurriculaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Curriculum::class, 1)->create([
            'registration_id' => 1,
            'user_id' => 1,
            'course_id' => 1,
            'year_level' => 1,
            'semester' => 1
        ]);
        factory(App\Curriculum::class, 1)->create([
            'registration_id' => 1,
            'user_id' => 1,
            'course_id' => 1,
            'year_level' => 1,
            'semester' => 2
        ]);

        factory(App\Curriculum::class, 1)->create([
            'registration_id' => 1,
            'user_id' => 1,
            'course_id' => 2,
            'year_level' => 1,
            'semester' => 1
        ]);
        factory(App\Curriculum::class, 1)->create([
            'registration_id' => 1,
            'user_id' => 1,
            'course_id' => 2,
            'year_level' => 1,
            'semester' => 2
        ]);
    }
}
