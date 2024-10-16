@extends('layouts.master')
@section('content')
<div class="admin-cont container">
  
    <div class="container">
      <a href="{{route('tasks.create')}}" class="btn btn-success text-dark text-bold"> create task </a>
    </div>
  
    <table class="table text-success w-50 h-50" >
      <thead class="text-center">
       
        <tr>
          <th scope="col">#</th>
          <th scope="col">title </th>
          <th scope="col">descriptoin</th>
          {{-- <th scope="col">password</th> --}}
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tasks as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->title}}</td>
              <form action="{{route('subtask.view' , $item->id)}}" method="get">
                @csrf
                  <td><button type="submit" class="btn btn-success" > subtasks</button></td>
              </form>
              
              <form action="{{route('tasks.edit' , $item->id)}}" method="get">
                @csrf
                  <td><button type="submit" class="btn btn-primary" >edit</button></td>
              </form>

              <form action="{{route('tasks.delete' , $item->id)}}" method="get">
                @csrf
                  <td><button type="submit" class="btn btn-danger" >delete</button></td>
              </form>
              
            </tr>     
        @endforeach
      </tbody>
    </table>
  </div>

  @endsection