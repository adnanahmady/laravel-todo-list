<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Task::create([
            'title'     => 'new Task',
            'body'      => 'some task body',
            'completed' => false,
            'user_id'   => 1
        ]);

        \App\Task::create([
            'title'     => 'old Task',
            'body'      => 'some old task body',
            'completed' => true,
            'user_id'   => 2
        ]);
    }
}
