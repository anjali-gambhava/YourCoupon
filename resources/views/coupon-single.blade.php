@extends('layout.page')

@section('page-title', '50% Discount Coupon From CatiLogoms.Com')
@section('page-title-details', 'In dignissim feugiat gravida. Proin feugiat quam sed gravida fringilla. Proin quis mauris ut magna fringilla vulputate quis non ante. Integer bibendum velit dui. Sed consequat nisi id convallis eleifend.')

@section('page-data')
    <div class="section wb">
            <div class="container">
                <div class="row">
                    <div class="content col-md-8">
                        <div class="coupon-list list-wrapper single-coupon">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center">
                                            <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store.png') }}" alt="" class="img-responsive"></a>
                                            <small><a href="{{ url('/store-single')}}">View Store Coupons</a></small>
                                            <div class="coupon-vote">
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                            </div><!-- end coupon-meta -->
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="coupon-meta">
                                            <div class="coupon-top clearfix">
                                                <div class="rating pull-left">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <small>21 Rating</small>
                                                </div>
                                                <div class="favorite-coupon pull-right text-right">
                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div><!-- end coupon-top -->
                                            <h3>50% Discount Coupon from CatiLogoms.com</h3>

                                            <div class="coupon-bottom clearfix">
                                                <div class="post-sharing">
                                                    <ul class="list-inline">
                                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="hidden-xs">Share on Facebook</span></a></li>
                                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="hidden-xs">Tweet on Twitter</span></a></li>
                                                    </ul>
                                                </div><!-- end post-sharing -->
                                            </div><!-- end coupon-top -->
                                        </div><!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link">
                                                <span class="coupon-code">2016TATILRA50</span>
                                                <span class="show-code">Show Code</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                            <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 3 Comments</a></small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_01" class="modal fade code-modal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4><a href="{{ url('/coupon-single')}}">50% Discount Coupon Code from CatiLogoms.com</a></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_01.jpg') }}" alt="" class="img-responsive"></a>
                                                        <div class="modal-button">
                                                            <a href="#" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                        </div>
                                                    </div><!-- end col -->

                                                    <div class="col-md-8">
                                                        <div class="coupon-meta">
                                                            <div class="coupon-top clearfix">
                                                                <div class="rating pull-left">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <small>21 Rating</small>
                                                                </div>
                                                                <div class="favorite-coupon pull-right text-right">
                                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div><!-- end coupon-top -->
                                                        </div><!-- end coupon-meta -->

                                                        <p>At reasonable prices, quality assurance, 100% secure shopping. You can save awesome discount with our coupon code today!</p>

                                                        <div class="modal-share clearfix">
                                                            <ul class="list-inline social-small">
                                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            </ul>   
                                                        </div><!-- end share -->
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div><!-- end modal-body -->

                                            <div class="modal-footer">
                                                <div class="coupon-area">
                                                    <div class=" row">
                                                        <div class="col-md-4 text-left">
                                                            <div class="coupon-vote">
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                            </div><!-- end coupon-meta -->
                                                        </div><!-- end col -->
                                                        <div class="col-md-8 text-center">
                                                            <button data-clipboard-text="2016TATILRA50" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA50</button>
                                                            <small>Click to Copy</small>
                                                        </div>
                                                    </div><!-- end row -->
                                                </div><!-- end coupon-area -->
                                            </div><!-- end modal-footer -->
                                        </div><!-- end mpdal-content -->
                                    </div><!-- end modal-dialog -->
                                </div><!-- end modal -->

                                <hr>

                                <div class="coupon-desc clearfix">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam molestie molestie nisl, eu scelerisque turpis tempus at. Nam luctus ultrices imperdiet. Class aptent taciti sociosqu ad litora torquent perconubia nostra, per inceptos himenaeos. Suspendisse velit orci, pretium ut feugiat nec, lobortis et est. Nullam cursus ultrices tincidunt. Nam gravida sem gravida ipsum dignissim in dictum urna accumsan. Nullam nec augue magna, sed scelerisque odio. Cras adipiscing feugiat venenatis. Praesent gravida consequat purus sed lobortis. Aenean et eros nunc. Nullam cursus ultrices tincidunt. Nam gravida sem gravida ipsum dignissim in dictum urna accumsan. Nullam nec augue magna, sed scelerisque odio. Cras adipiscing feugiat venenatis. Praesent gravida consequat purus sed lobortis. Aenean et eros nunc.</p>

                                    <p>Nullam cursus ultrices tincidunt. Nam gravida sem gravida ipsum dignissim in dictum urna accumsan. Nullam nec augue magna, sed scelerisque odio. Cras adipiscing feugiat venenatis. Praesent gravida consequat purus sed lobortis. Aenean et eros nunc.</p>

                                    <h3>How to use this coupons?</h3>

                                    <p>Nullam cursus ultrices tincidunt. Nam gravida sem gravida ipsum dignissim in dictum urna accumsan. Nullam nec augue magna, sed scelerisque odio. Cras adipiscing feugiat venenatis. Praesent gravida consequat purus sed lobortis. Aenean et eros nunc.</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam molestie molestie nisl, eu scelerisque turpis tempus at. Nam luctus ultrices imperdiet. Class aptent taciti sociosqu ad litora torquent perconubia nostra, per inceptos himenaeos. Suspendisse velit orci, pretium ut feugiat nec, lobortis et est. Nullam cursus ultrices tincidunt. Nam gravida sem gravida ipsum dignissim in dictum urna accumsan. Nullam nec augue magna, sed scelerisque odio. Cras adipiscing feugiat venenatis. Praesent gravida consequat purus sed lobortis. Aenean et eros nunc. Nullam cursus ultrNam gravida sem gravida ipsum dignissim in dictum urna accumsan. Nullam nec augue magna, sed scelerisque odio. Cras adipiscing feugiat venenatis. Praesent gravida consequat purus sed lobortis. Aenean et eros nunc.</p>

                                    <div class="item-meta">
                                        <ul class="list-inline list-unstyled">
                                            <li>
                                            <span class="fa fa-tag"></span>
                                            <a href="#"> pure cambogia ultra kadinlar</a>
                                            ,
                                            <a href="#"> pure cambogia ultra</a>
                                            ,
                                            <a href="#"> pure cambogia ultra yorumlar</a>
                                            ,
                                            <a href="#"> pure cambogia</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div><!-- end desc -->
                            </div><!-- end coupon-wrapper -->
                        </div><!-- end coupon list -->

                        <div class="post-wrapper mb20 clearfix">
                            <div class="widget-title">
                                <h4><span>Related Coupons</span></h4>
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

                        <div class="post-wrapper mb20 clearfix">
                            <div class="widget-title">
                                <h4><span>Leave a Feedback</span></h4>
                            </div>

                            <div class="comment-form newsletter">
                                <p>Your email is safe with us and we hate spam as much as you do.</p>
                                <form class="row">
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Enter your name..">
                                    </div>
                                    <div class="col-sm-6">
                                    <input type="email" class="form-control" placeholder="Enter your email..">
                                    </div>

                                    <div class="col-md-12">
                                    <textarea class="form-control" placeholder="Give us more details..."></textarea>
                                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- end widget -->
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
            </div><!-- end container -->
        </div><!-- end section -->
@endsection   