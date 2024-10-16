<?php

namespace Database\Seeders;

use App\Jobs\TaskHandelarJob;
use App\Models\Subtask;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        public function run()
        {
            // create 5 subtasks for eact main task
            // Task::factory(500)->create()->each(function ($Task) {
            //     SubTask::factory(5)->create(['task_id' => $Task->id]);
            //     // $task->subTask()->create();   // another good line to create a subtasks
            // });
            TaskHandelarJob::dispatch()->onQueue('TaskHandelarJob');
            // Artisan::call('queue:work');

        }
    
}
