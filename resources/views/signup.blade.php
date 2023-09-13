@extends('layout.auth')

@section('page-title', 'Create New Account')

@section('page-data')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form id="submit" class="contact-form newsletter">
                <div class="col-md-12 col-sm-12">
                    <label class="control-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Email">


                    <label class="control-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password">

                    <button type="submit" class="btn btn-block btn-primary">Signup</button>

                    <p style="text-align: center; margin-top: 10px;">Already user ? Start Your Session <a href="{{ url('signin') }}">here</a></p>
                </div>
            </form>
        </div><!-- end post-wrapper -->
        <div class="col-md-4"></div>
    </div> 
</div>  
@endsection