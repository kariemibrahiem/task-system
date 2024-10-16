<?php

namespace App\Jobs;

use App\Models\Subtask;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class createSubtaskJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public $title , $description , $id;
    public function __construct($title , $description , $id)
    {
        $this->title = $title;
        $this->description = $description;
        $this->id = $id;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Create a new subtask using Laravel's Eloquent ORM
        Subtask::create([
            'title' => $this->title,
            'description' => $this->description,
            'task_id' => $this->id,
            'status' => fake()->randomElement([0,1]),
        ]);
    }
}
