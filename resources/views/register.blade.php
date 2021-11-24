@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-row col-sm-offset-4">
            <form action="register" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputusername1">User Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Create Account</button>
            </form>
            
        </div>
    </div>
</div>
{{-- <button class="btn btn-primary">Click Me</button> --}}
@endsection
