@extends('auth.layouts.master')
@section('link' , 'regist')
@section('route' , 'admin.regist')
    

@section('content')

    
<form action="{{route('login_save')}}" method="post">
    @csrf
    @method('get')
    
    <div class="form-group ">
        <center>

            @if($errors->any())
                <br>
                    <span class="alert alert-danger text-center">{{$errors->first()}}</span>
                <br>
            @endif
        </center>
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
    