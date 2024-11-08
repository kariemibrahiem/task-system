<?php

namespace App\Jobs;

use App\Models\Task;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class createTaskJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public $title , $description;
    public function __construct($title , $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Simulate creating a new task in the database
        return "the job";
        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'status' => fake()->randomElement([0,1]),
        ]);
    }
}
