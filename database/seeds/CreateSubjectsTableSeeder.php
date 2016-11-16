<?php

use Illuminate\Database\Seeder;

class CreateSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Subject::class, 1)->create([
            'registration_id' => 1,
            'user_id' => 1,
            'name' => 'National Service Training Program 1',
            'code' => 'NSTP 1',
            'units' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'registration_id' => 1,
            'user_id' => 1,
            'name' => 'National Service Training Program 2',
            'code' => 'NSTP 2',
            'units' => 3
        ]);

        factory(App\Subject::class, 1)->create([
            'registration_id' => 1,
            'user_id' => 1,
            'name' => 'Communication 1',
            'code' => 'Comms 1',
            'units' => 2
        ]);

        factory(App\Subject::class, 1)->create([
            'registration_id' => 1,
            'user_id' => 1,
            'name' => 'Communication 2',
            'code' => 'Comms 2',
            'units' => 2
        ]);
    }

}
