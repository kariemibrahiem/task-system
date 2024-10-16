@extends('layouts.master')

    

@section('content')
    <div class="container">

        <div class="container m-5 g-2 text-center p-5">
            <form action="{{route('tasks.update' , $task->id)}}" method="post">
                @csrf
                @method('get')
                <div class="form-group m-3">
                    <label for="exampleInputEmail1">title</label>
                    <input type="text" class="form-control" value="{{$task->title}}" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
                </div>
                <div class="form-group m-3">
                    <label for="exampleInputEmail1">content</label>
                    <input type="text" class="form-control" value="{{$task->description}}" name="content" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter description">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection