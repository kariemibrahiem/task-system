@extends('auth.layouts.master')
@section('link' , 'login')
@section('route' , 'admin.login')
    

@section('content')
    
    <div class="container m-5 g-2 text-center ">
                <form action="{{route('regist_save')}}" method="post">
                    @csrf
                    @method('get')
                        <div class="form-group m-3">
                            <label for="exampleInputEmail1">name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                        <div class="form-group m-3">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group m-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group m-3">
                        <label for="exampleInputPassword1">repassword</label>
                        <input type="password" class="form-control" name="repassword" id="exampleInputPassword1" placeholder="reenter the password">
                    </div>
                   
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
    </div>
@endsection