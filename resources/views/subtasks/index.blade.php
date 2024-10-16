@extends('layouts.master')
@section('content')
<div class="admin-cont container">
  
  <div class="container">
    @if (count($subtasks) > 4)
        <h3>you have the maximum subtaks</h3>
      @else
        <form action="{{route('subtasks.create', $task->id)}}" method="get">
          @csrf
              <input type="hidden" value="{{$task->id}}" name="task_id">
            <button type="submit" class="btn btn-success text-dark text-bold"> create subtask</button>
        </form>
      @endif
  </div>
  
  
    <table class="table text-success w-50 h-50" >
      <tr>
        the description
      </tr>
      <tr>
        <h3 class="text-primary">the main task content</h3>
        {{$task->description}}
      </tr>
      <thead class="text-center">
       
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">email</th>
          {{-- <th scope="col">password</th> --}}
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($subtasks as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->title}}</td>
              <td>{{$item->content}}</td>
              
              
              <form action="{{route('subtasks.edit' , $item->id)}}" method="get">
                @csrf
                  <td><button type="submit" class="btn btn-primary" >edit</button></td>
              </form>

              <form action="{{route('subtasks.delete' , $item->id)}}" method="get">
                @csrf
                  <td><button type="submit" class="btn btn-danger" >delete</button></td>
              </form>
            </tr>     
        @endforeach
      </tbody>
    </table>
  </div>

  @endsection