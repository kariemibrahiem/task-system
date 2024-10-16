<?php

namespace App\Jobs;

use App\Models\Subtask;
use App\Models\Task;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TaskHandelarJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Task::factory(500)->create()->each(function ($Task) {
            Subtask::factory(5)->create(['task_id' => $Task->id]);
            // $task->subTask()->create();   // another good line to create a subtasks
        });
    }
}
