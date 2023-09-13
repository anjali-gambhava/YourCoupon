@extends('layout.auth')

@section('page-title', 'Forget Password')

@section('page-data')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form id="submit" class="contact-form newsletter">
                <div class="col-md-12 col-sm-12">
                    <label class="control-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter email">

                    <button type="submit" class="btn btn-block btn-primary">Forget Now</button>

                    <p style="text-align: center; margin-top: 10px;">Don't Forget ? Back to <a href="{{ url('/signin') }}">Signin</a></p>
                </div>
            </form>
        </div><!-- end post-wrapper -->
        <div class="col-md-4"></div>
    </div> 
</div>  
@endsection