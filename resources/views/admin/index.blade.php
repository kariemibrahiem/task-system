@extends('layouts.master')
@section('name' , 'lai');
@section('content')

<div class="admin-cont container">
  
    <div class="container">
      <a href="{{route('regist')}}" class="btn btn-success text-dark text-bold"> create admin </a>
    </div>
  
    <table class="table text-success w-50 h-50" >
      <thead class="text-center">
       
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">email</th>
d          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
            </tr>     
        @endforeach
      </tbody>
    </table>
  </div>

  @endsection