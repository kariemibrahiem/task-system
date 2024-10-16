<?php

namespace App\Http\Controllers;

use App\DataTrait;
use App\Jobs\createTaskJob;
use App\Jobs\DeleteTask;
use App\Jobs\EditTask;
// use App\Http\Requests\UserRequests;
use App\Models\Task;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    
    use DataTrait;

    

    // - most of this funciton based on jobs to support the porformance
    // - most of this funciton based on fillable to support the security
    // - the chunking algorithm to support the performance in getting data form DB



    // the display function using chanking
    public function index(){
        $tasks = [];
        Task::chunk(1000, function($chunk) use (&$tasks) {
            foreach ($chunk as $task) {
                $tasks[] = $task;
            }
        });
        return view('task.index', compact('tasks'));
    }
    // end of index


    // the deletion function 
    public function delete($id){    
        DeleteTask::dispatch($id);
        return redirect()->route('tasks');
    }

    // the create function  and store function
    public function create(){
        return view('task.create');
    }
    public function store(Request $request){
        createTaskJob::dispatch($request->title , $request->description);
        return redirect()->route('tasks');
    }



    // the edit function and update function
    public function edit($id){
        $task = Task::find($id);
        return view('task.edit', compact('task'));
    }
    public function update(Request $request, $id){
        EditTask::dispatch($request->title , $request->description , $id );
        return redirect()->route('tasks');
    }

}
