@extends('layout.page')

@section('page-title', 'Favorite Stores')
@section('page-title-details', 'In dignissim feugiat gravida. Proin feugiat quam sed gravida fringilla. Proin quis mauris ut magna fringilla vulputate quis non ante. Integer bibendum velit dui. Sed consequat nisi id convallis eleifend.')

@section('page-data')
	    <div class="section wb">
            <div class="container">
                <div class="row">
                    <div class="sidebar col-md-4">
                        <div class="widget clearfix">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{ url('/user-dashboard')}}"><span class="glyphicon glyphicon-off"></span>  Dashboard</a></li>
                                <li class="active"><a href="{{ url('/user-favorites')}}"><span class="fa fa-star"></span>  Favorite Stores</a></li>
                                <li><a href="{{ url('/user-saved')}}"><span class="fa fa-heart-o"></span>  Saved Coupons</a></li>
                                <li><a href="{{ url('/user-submit')}}"><span class="fa fa-bullhorn"></span>  Submit a Coupon</a></li>
                                <li><a href="#"><span class="fa fa-lock"></span>  Logout</a></li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end col -->
    
                    <div class="sidebar col-md-8">
                        <div class="widget clearfix">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_01.jpg') }}" alt="" class="img-responsive"></a>
                                        <small><a href="#">Takifest.com</a></small>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_02.jpg') }}" alt="" class="img-responsive"></a>
                                        <small><a href="#">Purplebybanu.com</a></small>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_03.jpg') }}" alt="" class="img-responsive"></a>
                                        <small><a href="#">Butiknk.com</a></small>
                                    </div><!-- end media -->
                                </div><!-- end col -->
                            </div>

                            <hr class="invis3">

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_04.jpg') }}" alt="" class="img-responsive"></a>
                                        <small><a href="#">PSDConvertHTML.com</a></small>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_05.jpg') }}" alt="" class="img-responsive"></a>
                                        <small><a href="#">Dilseti.com</a></small>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_06.jpg') }}" alt="" class="img-responsive"></a>
                                        <small><a href="#">Amazon.com</a></small>
                                    </div><!-- end media -->
                                </div><!-- end col -->
                            </div>

                            <hr class="invis3">

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_07.jpg') }}" alt="" class="img-responsive"></a>
                                        <small><a href="#">Garden.com</a></small>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_08.jpg') }}" alt="" class="img-responsive"></a>
                                        <small><a href="#">Connect.com</a></small>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_09.jpg') }}" alt="" class="img-responsive"></a>
                                        <small><a href="#">SteelThemes.com</a></small>
                                    </div><!-- end media -->
                                </div><!-- end col -->
                            </div>

                            <hr class="invis3">

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_10.jpg') }}" alt="" class="img-responsive"></a>
                                        <small><a href="#">Showwp.com</a></small>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_11.jpg') }}" alt="" class="img-responsive"></a>
                                        <small><a href="#">Leopedia.com</a></small>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_12.jpg') }}" alt="" class="img-responsive"></a>
                                        <small><a href="#">Martines.com</a></small>
                                    </div><!-- end media -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end post-wrapper -->
                    </div><!-- end content -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
@endsection          