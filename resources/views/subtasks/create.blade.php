@extends('layouts.master')

    

@section('content')
    <div class="container">

        <div class="container m-5 g-2 text-center p-5">
            <form action="{{route('subtasks.store' , $id)}}" method="post">
                @csrf
                @method('get')
                <div class="form-group m-3">
                    <label for="exampleInputEmail1">title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                </div>
                <div class="form-group m-3">
                    <label for="exampleInputEmail1">description</label>
                    <input type="text" class="form-control" name="description" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <input type="hidden" name="id" value="{{$id}}">
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection