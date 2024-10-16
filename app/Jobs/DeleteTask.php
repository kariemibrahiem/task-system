<?php

namespace App\Jobs;

use App\Models\Task;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class DeleteTask implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Find the task by ID and delete it if it exists.
        $task = Task::find($this->id);
        if ($task) {
            $task->delete();
            return redirect()->route('tasks');
        }
        
        return redirect()->route('tasks');
    }
}
