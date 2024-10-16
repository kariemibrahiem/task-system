<?php

namespace App\Http\Controllers;

use App\DataTrait;
use App\Jobs\createSubtaskJob;
use App\Jobs\deleteSubtaskJob;
use App\Models\Subtask;
use App\Models\Task;
use Illuminate\Http\Request;

class SubtaskController extends Controller
{
    use DataTrait; // the trait to get data 

   

    // the display function 
    public function index(Request $request , $id){
        $task = Task::find($id);
        $subtasks = [];
        Subtask::where('task_id' ,'=' , $id)->chunk(5, function($chunk) use (&$subtasks) {
            foreach ($chunk as $subtask) {
                $subtasks[] = $subtask;
            }
        });
        return view('subtasks.index' , compact('subtasks' , 'task'));
    }
    


    // the creation function by the usually logic
    public function create(Request $request ){
        $id = request("task_id");  
        return view('subtasks.create' , compact('id'));
    }
    public function store(Request $request ){
        createSubtaskJob::dispatch($request->title , $request->description , $request->id);
        return redirect()->route('tasks');
    }
    // end of creation


    // the delete function
    public function delete($id){    
        deleteSubtaskJob::dispatch($id);
        return redirect()->route('tasks');
    }
    // end of deletion


    // the edit function 
    public function edit($id){
        $subtask = Subtask::find($id);
        return view('subtasks.edit', compact('subtask'));
    }
    public function update(Request $request, $id){
        $updated_subtask = Subtask::find($id);
        $updated_subtask->title = request('title');
        $updated_subtask->description = request('description');
        $updated_subtask->save();
        return redirect()->route('tasks');
    }
}
