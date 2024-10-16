<?php

namespace App\Jobs;

use App\Models\Task;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class EditTask implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public $id , $title , $description;
    public function __construct(  $title , $description ,$id)
    {
        $this->id = $id;
        $this->title = $title;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Update the task in the database
        $updated_task = Task::find($this->id);
        $updated_task->title = $this->title;
        $updated_task->description = $this->description;
        $updated_task->save();
        return redirect()->route('tasks');
        
    }
}
