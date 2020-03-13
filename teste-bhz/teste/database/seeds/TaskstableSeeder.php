<?php

use Illuminate\Database\Seeder;

class TaskstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Task::class) -> create([

            'name' => 'Historia',
            'complete' => true
        ]);

        factory(App\Task::class) -> create([

            'name' => 'Geografia',
            'complete' => false
        ]);

        factory(App\Task::class) -> create([

            'name' => 'Artes',
            'complete' => true
        ]);

    }
}
