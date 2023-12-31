@extends('layout.page')

@section('page-title', 'User Dashboard')
@section('page-title-details', 'In dignissim feugiat gravida. Proin feugiat quam sed gravida fringilla. Proin quis mauris ut magna fringilla vulputate quis non ante. Integer bibendum velit dui. Sed consequat nisi id convallis eleifend.')


@section('page-data')
        <div class="section wb">
            <div class="container">
                <div class="row">
                    <div class="sidebar col-md-4">
                        <div class="widget clearfix">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="{{ url('/user-dashboard')}}"><span class="glyphicon glyphicon-off"></span>  Dashboard</a></li>
                                <li><a href="{{ url('/user-favorites')}}"><span class="fa fa-star"></span>  Favorite Stores</a></li>
                                <li><a href="{{ url('/user-saved')}}"><span class="fa fa-heart-o"></span>  Saved Coupons</a></li>
                                <li><a href="{{ url('/user-submit')}}"><span class="fa fa-bullhorn"></span>  Submit a Coupon</a></li>
                                <li><a href="#"><span class="fa fa-lock"></span>  Logout</a></li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end col -->
    
                    <div class="sidebar col-md-8">
                        <div class="widget clearfix">

                            <form id="submit" class="contact-form newsletter">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Your Photo <small>Please add a photo. (200x200)</small></label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail"><img src="{{ asset('assets/images/avatar_03.png') }}" alt=""></div>
                                            <br>
                                            <span class="btn btn-default btn-file">
                                            <span class="fileupload-new">Select Avatar</span>
                                            <span class="fileupload-exists">Change</span>
                                            <input type="file">
                                            </span>
                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <hr class="invis3">

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Your Name <small>Enter your company name</small></label>
                                        <input type="text" class="form-control" placeholder="Jenny Pelt">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title <small>Enter a short title (Ex: Web Designer)</small></label>
                                        <input type="text" class="form-control" placeholder="Web Designer">
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Website <small>Enter your website here</small></label>
                                        <input type="text" class="form-control" placeholder="http://psdconverthtml.com/">
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Email <small>Enter offical email here</small></label>
                                        <input type="email" class="form-control" placeholder="support@psdconverthtml.com">
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Facebook URL <small>Enter your Facebook url</small></label>
                                        <input type="text" class="form-control" placeholder="http://facebook.com/psdconverthtml">
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Twitter URL <small>Enter your Twitter url</small></label>
                                        <input type="email" class="form-control" placeholder="http://twitter.com/psdconverthtml">
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Google+ URL <small>Enter your Google+ url</small></label>
                                        <input type="text" class="form-control" placeholder="http://plus.google.com/+psdconverthtml">
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Linkedin URL <small>Enter your Linkedin url</small></label>
                                        <input type="email" class="form-control" placeholder="http://linkedin.com/u/psdconverthtml">
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button class="btn btn-primary">Update Profile</button>
                                    </div>
                                </div>
                            </form>

                            <hr class="invis3">
                            <form id="submit1" class="contact-form newsletter">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">New Password <small>Enter new password</small></label>
                                        <input type="password" class="form-control" placeholder="*********">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Re-New Password <small>Re-Enter new password</small></label>
                                        <input type="password" class="form-control" placeholder="*********">
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button class="btn btn-primary">Change Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- end content -->
                </div><!-- end row -->
            </div>
        </div>
@endsection      