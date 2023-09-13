@extends('layout.auth')

@section('page-title', 'Sign In')

@section('page-data')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form id="submit" method="post" action="{{ url()->current() }}" class="contact-form newsletter">
                @csrf
                <div class="col-md-12 col-sm-12">
                    <label class="control-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Username">


                    <label class="control-label">Password</label>
                    <input type="password" class="form-control" name="password" style="margin-bottom: 0px;" placeholder="Enter Password">
                    <p style="text-align: right;">Forgrt Password <a href="{{ url('forget') }}">here</a></p>

                    <button type="submit" class="btn btn-block btn-primary">Signin</button>

                    <p style="text-align: center; margin-top: 10px;">New User ? create your account <a href="{{ url('signup') }}">here</a></p>
                </div>
            </form>
        </div><!-- end post-wrapper -->
        <div class="col-md-4"></div>
    </div> 
</div>  
@endsection