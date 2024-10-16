@extends('layouts.master')
@section('content')
    


<div class="container">
    <h1>login to see tasks</h1>
    <h3>
        <a class="nav-link" href='{{route('login')}}'>login</a>
        <a class="nav-link" href='{{route('regist')}}'>regist</a>
    </h3>
</div>














@endsection