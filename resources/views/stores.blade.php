@extends('layout.page')

@section('page-title', 'Alphabetical Store List')
@section('page-title-details', 'In dignissim feugiat gravida. Proin feugiat quam sed gravida fringilla. Proin quis mauris ut magna fringilla vulputate quis non ante. Integer bibendum velit dui. Sed consequat nisi id convallis eleifend.')

@section('page-data')
	 <div class="section wb">
            <div class="container">
                <div class="row">
                    <div class="content col-md-8">
                        <div class="post-wrapper store-list">
                            <div class="row">
                                <div class="col-md-12">
                                    <nav class="page-filter text-center">
                                        <ul class="list-inline">
                                            <li><a href="#" data-filter="*">All</a></li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="12" href="#">A</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="33" href="#">B</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="13" href="#">C</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="44" href="#">D</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="53" href="#">E</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="5" href="#">F</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="31" href="#">G</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="12" href="#">H</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="7" href="#">I</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="42" href="#">J</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="1" href="#">K</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="22" href="#">L</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="0" href="#">M</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="0" href="#">N</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="0" href="#">O</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="0" href="#">P</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="0" href="#">R</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="0" href="#">S</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="0" href="#">T</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="0" href="#">U</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="0" href="#">V</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="0" href="#">Y</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="0" href="#">W</a></li> 
                                            <li><a data-toggle="tooltip" data-placement="top" title="0" href="#">Z</a></li> 
                                        </ul>
                                    </nav> 
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="list-title">A</h4>
                                    <ul class="check-list">
                                        <li><a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_01.jpg') }}" alt="" class=""> Amazon <small>(11 Coupons)</small> </a></li>
                                        <li><a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_02.jpg') }}" alt="" class=""> American Airlines <small>(31 Coupons)</small> </a></li>
                                        <li><a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_03.jpg') }}" alt="" class=""> Apple <small>(51 Coupons)</small> </a></li>
                                        <li><a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_04.jpg') }}" alt="" class=""> AppINC <small>(22 Coupons)</small> </a></li>
                                        <li><a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_05.jpg') }}" alt="" class=""> Antenyi Cable <small>(56 Coupons)</small> </a></li>
                                    </ul><!-- end check -->
                                </div>
                            </div><!-- end row -->

                            <hr class="invis2">

                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="list-title">B</h4>
                                    <ul class="check-list">
                                        <li><a href="#"><img src="{{ asset('assets/images/store_01.jpg') }}" alt="" class=""> Beauty.com <small>(11 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_02.jpg') }}" alt="" class=""> Best Buy <small>(41 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_03.jpg') }}" alt="" class=""> BlueHost <small>(23 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_03.jpg') }}" alt="" class=""> Buy Sell Theme <small>(55 Coupons)</small> </a></li>
                                    </ul><!-- end check -->
                                </div>
                            </div><!-- end row -->

                            <hr class="invis2">

                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="list-title">C</h4>
                                    <ul class="check-list">
                                        <li><a href="#"><img src="{{ asset('assets/images/store_06.jpg') }}" alt="" class=""> Canser Supplies <small>(55 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_07.jpg') }}" alt="" class=""> Clear Host <small>(11 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_08.jpg') }}" alt="" class=""> Condostica <small>(12 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_09.jpg') }}" alt="" class=""> Creative Marketing <small>(5 Coupons)</small> </a></li>
                                    </ul><!-- end check -->
                                </div>
                            </div><!-- end row -->

                            <hr class="invis2">

                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="list-title">D</h4>
                                    <ul class="check-list">
                                        <li><a href="#"><img src="{{ asset('assets/images/store_10.jpg') }}" alt="" class=""> Dragon Tatto <small>(112 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_11.jpg') }}" alt="" class=""> Double Check <small>(66 Coupons)</small> </a></li>
                                    </ul>
                                </div>
                            </div><!-- end row -->

                            <hr class="invis2">

                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="list-title">E</h4>
                                    <ul class="check-list">
                                        <li><a href="#"><img src="{{ asset('assets/images/store_12.jpg') }}" alt="" class=""> e-Bootstrap.com <small>(3 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_13.jpg') }}" alt="" class=""> Envato <small>(5 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_13.jpg') }}" alt="" class=""> Emilion Games <small>(6 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_13.jpg') }}" alt="" class=""> Emoji Shop <small>(6 Coupons)</small> </a></li>
                                    </ul><!-- end check -->
                                </div>
                            </div><!-- end row -->

                            <hr class="invis2">

                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="list-title">F</h4>
                                    <ul class="check-list">
                                        <li><a href="#"><img src="{{ asset('assets/images/store_01.jpg') }}" alt="" class=""> FaceTime <small>(12 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_02.jpg') }}" alt="" class=""> Fully Resp <small>(4 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_03.jpg') }}" alt="" class=""> Fantasia Games <small>(1 Coupons)</small> </a></li>
                                    </ul><!-- end check -->
                                </div>
                            </div><!-- end row -->

                            <hr class="invis2">

                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="list-title">G</h4>
                                    <ul class="check-list">
                                        <li><a href="#"><img src="{{ asset('assets/images/store_04.jpg') }}" alt="" class=""> Garden Shop <small>(12 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_05.jpg') }}" alt="" class=""> Guard Body <small>(41 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_06.jpg') }}" alt="" class=""> Gardening <small>(33 Coupons)</small> </a></li>
                                    </ul><!-- end check -->
                                </div>
                            </div><!-- end row -->

                            <hr class="invis2">

                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="list-title">H</h4>
                                    <ul class="check-list">
                                        <li><a href="#"><img src="{{ asset('assets/images/store_08.jpg') }}" alt="" class=""> Hellium Gase <small>(72 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_09.jpg') }}" alt="" class=""> Hyper Links <small>(12 Coupons)</small> </a></li>
                                    </ul><!-- end check -->
                                </div>
                            </div><!-- end row -->

                            <hr class="invis2">

                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="list-title">T</h4>
                                    <ul class="check-list">
                                        <li><a href="#"><img src="{{ asset('assets/images/store_12.jpg') }}" alt="" class=""> Takifest <small>(98 Coupons)</small> </a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/store_13.jpg') }}" alt="" class=""> Trade Free <small>(85 Coupons)</small> </a></li>
                                    </ul><!-- end check -->
                                </div>
                            </div><!-- end row -->

                        </div><!-- end post-wrapper -->
                    </div><!-- end content -->

                    <div class="sidebar col-md-4 col-sm-12">
                        <div class="widget custom-widget clearfix">
                            <a href="{{ url('/user-submit')}}">
                                <i class="fa fa-bullhorn alignleft fa-3x"></i>
                                <h4>Submit a Coupon</h4>
                                <p>Share your code discount's everyone</p>
                            </a>
                        </div><!-- end widget -->

                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4><span>Best Coupons</span></h4>
                            </div>

                            <div class="best-coupons">
                                <ul class="customlist">
                                    <li><a href="#">MyLogo.com 10$ off for all orders</a></li>
                                    <li><a href="#">44$ off CompanieNamis Discount</a></li>
                                    <li><a href="#">10% Discount Coupon from</a></li>
                                    <li><a href="#">Free Shipping for All Orders</a></li>
                                    <li><a href="#">$5 for for your next logo design</a></li>
                                </ul>
                            </div>
                        </div><!-- end widget -->

                        <div class="widget clearfix">
                            <div class="featured hidden-xs"><i class="fa fa-star-o"></i></div>
                            <div class="widget-title">
                                <h4><span>Best Stores</span></h4>
                            </div>

                            <div class="text-center store-list row">
                                <div class="col-md-6 col-xs-6">
                                    <div class="post-media">
                                        <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_01.jpg') }}" alt="" class="img-responsive"></a>
                                        <small>Takifest.com</small>
                                    </div>
                                    <!-- end media -->
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="post-media">
                                        <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_02.jpg') }}" alt="" class="img-responsive"></a>
                                        <small>WPServis.com</small>
                                    </div>
                                    <!-- end media -->
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="post-media">
                                        <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_03.jpg') }}" alt="" class="img-responsive"></a>
                                        <small>PurplebyBanu.com</small>
                                    </div>
                                    <!-- end media -->
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="post-media">
                                        <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_04.jpg') }}" alt="" class="img-responsive"></a>
                                        <small>Tutsplus.com</small>
                                    </div>
                                    <!-- end media -->
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="post-media">
                                        <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_05.jpg') }}" alt="" class="img-responsive"></a>
                                        <small>Showwp.com</small>
                                    </div>
                                    <!-- end media -->
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="post-media">
                                        <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_06.jpg') }}" alt="" class="img-responsive"></a>
                                        <small>PSDConvertHTML.com</small>
                                    </div>
                                    <!-- end media -->
                                </div>
                            </div><!-- end row -->
                        </div><!-- end widget -->

                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4><span>Email Newsletter</span></h4>
                            </div>

                            <div class="newsletter">
                                <p>Your email is safe with us and we hate spam as much as you do. Lorem ipsum dolor sit amet et dolore.</p>
                                <form class="">
                                    <input type="text" class="form-control" placeholder="Enter your name..">
                                    <input type="email" class="form-control" placeholder="Enter your email..">
                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                </form>
                            </div>
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end row -->
            </div>
        </div>
@endsection         

