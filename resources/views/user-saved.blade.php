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
                                <li><a href="{{ url('/user-favorites')}}"><span class="fa fa-star"></span>  Favorite Stores</a></li>
                                <li class="active"><a href="{{ url('/user-saved')}}"><span class="fa fa-heart-o"></span>  Saved Coupons</a></li>
                                <li><a href="{{ url('/user-submit')}}"><span class="fa fa-bullhorn"></span>  Submit a Coupon</a></li>
                                <li><a href="#"><span class="fa fa-lock"></span>  Logout</a></li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end col -->
    
                    <div class="sidebar col-md-8">
                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center">
                                            <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_01.jpg') }}" alt="" class="img-responsive"></a>
                                            <small><a href="{{ url('/store-single')}}">View Store Coupons</a></small>
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
                                            <h3><a href="{{ url('/coupon-single')}}">50% Discount Coupon from CatiLogoms.com</a></h3>
                                            <p>At reasonable prices, quality assurance, 100% secure shopping. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                        </div><!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                <span class="coupon-code">2016TATILRA50</span>
                                                <span class="show-code">Show Code</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                            <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 12 Comments</a></small>
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
                                                            <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
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
                            </div><!-- end coupon-wrapper -->
                        </div><!-- end coupon list -->

                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center">
                                            <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_13.jpg') }}" alt="" class="img-responsive"></a>
                                            <small><a href="{{ url('/store-single')}}">View Store Coupons</a></small>
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->

                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="coupon-meta">
                                            <div class="coupon-top clearfix">
                                                <div class="rating pull-left">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <small>12 Rating</small>
                                                </div>
                                                <div class="favorite-coupon pull-right text-right">
                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                            <!-- end coupon-top -->
                                            <h3><a href="{{ url('/coupon-single')}}">Greensoil Printable Coupon Code</a></h3>
                                            <p>100% secure shopping at reasonable prices, quality assurance. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                        </div>
                                        <!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                <span class="coupon-code">PRINT ME</span>
                                                <span class="show-code print-code"><i class="fa fa-print"></i> Print Coupon</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                            <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 12 Comments</a></small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_21" class="modal fade code-modal print-modal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4><a href="{{ url('/coupon-single')}}">50% Discount Coupon Code from CatiLogoms.com</a></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row bgcolor text-center">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <a class="coupon-code btn btn-primary btn-block" href="#" title="Click to Copy"><img src="{{ asset('assets/images/print.png') }}" alt="" class="img-responsive"></a>

                                                        <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default">Print Code <i class="fa fa-print"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end modal-body -->

                                            <div class="modal-footer">
                                                <div class="coupon-area">
                                                    <div class="clearfix">
                                                        <div class="pull-left">
                                                            <div class="coupon-vote">
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                            </div>
                                                            <!-- end coupon-meta -->
                                                        </div>
                                                        <!-- end col -->

                                                        <div class="pull-right">
                                                            <div class="clearfix">
                                                                <ul class="list-inline social-small">
                                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                </ul>
                                                            </div><!-- end share -->
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                </div><!-- end coupon-area -->
                                            </div><!-- end modal-footer -->
                                        </div><!-- end mpdal-content -->
                                    </div><!-- end modal-dialog -->
                                </div><!-- end modal -->
                            </div><!-- end coupon-wrapper -->
                        </div><!-- end coupon list -->

                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center">
                                            <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_02.jpg') }}" alt="" class="img-responsive"></a>
                                            <small><a href="{{ url('/store-single')}}">View Store Coupons</a></small>
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
                                                    <small>5 Rating</small>
                                                </div>
                                                <div class="favorite-coupon pull-right text-right">
                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div><!-- end coupon-top -->
                                            <h3><a href="{{ url('/coupon-single')}}">MyLogo.com 10$ off for all orders</a></h3>
                                            <p>Win tablet pc discount on your MyLogo com shopping plus free... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                        </div><!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                <span class="coupon-code">2016TATILRA33</span>
                                                <span class="show-code">Show Code</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                            <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 5 Comments</a></small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_02" class="modal fade code-modal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4><a href="{{ url('/coupon-single')}}">MyLogo.com 10$ off for all orders</a></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_02.jpg') }}" alt="" class="img-responsive"></a>
                                                        <div class="modal-button">
                                                            <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
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
                                                                    <small>5 Rating</small>
                                                                </div>
                                                                <div class="favorite-coupon pull-right text-right">
                                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div><!-- end coupon-top -->
                                                        </div><!-- end coupon-meta -->

                                                        <p>Win tablet pc discount on your MyLogo com shopping plus free.. You can save awesome discount with our coupon code today!</p>

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
                                                            <button data-clipboard-text="2016TATILRA33" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA33</button>
                                                            <small>Click to Copy</small>
                                                        </div>
                                                    </div><!-- end row -->
                                                </div><!-- end coupon-area -->
                                            </div><!-- end modal-footer -->
                                        </div><!-- end mpdal-content -->
                                    </div><!-- end modal-dialog -->
                                </div><!-- end modal -->
                            </div><!-- end coupon-wrapper -->
                        </div><!-- end coupon list -->

                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center">
                                            <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_12.jpg') }}" alt="" class="img-responsive"></a>
                                            <small><a href="{{ url('/store-single')}}">View Store Coupons</a></small>
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->

                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="coupon-meta">
                                            <div class="coupon-top clearfix">
                                                <div class="rating pull-left">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <small>51 Rating</small>
                                                </div>
                                                <div class="favorite-coupon pull-right text-right">
                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                            <!-- end coupon-top -->
                                            <h3><a href="{{ url('/coupon-single')}}">Follow Skinuque on Facebook get 10% Off</a></h3>
                                            <p>Follow Skinuque on Facebook get 10% Off 100% secure shopping at reasonable prices, quality assurance. Lorem ipsum dolor sit amet, consectetur adipisiciur.</p>
                                        </div>
                                        <!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                <span class="coupon-code">PRINT ME</span>
                                                <span class="show-code print-code"><i class="fa fa-search"></i> View Deal</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                            <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 12 Comments</a></small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_23" class="modal fade code-modal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4><a href="{{ url('/coupon-single')}}">Follow Skinuque on Facebook get 10% Off</a></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_12.jpg') }}" alt="" class="img-responsive"></a>
                                                        <div class="modal-button">
                                                            <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
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
                                                                    <small>71 Rating</small>
                                                                </div>
                                                                <div class="favorite-coupon pull-right text-right">
                                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div><!-- end coupon-top -->
                                                        </div><!-- end coupon-meta -->

                                                        <p>Bringing a new breath to the fashion CompanieNamis's.. You can save awesome discount with our coupon code today!</p>

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
                                                            <button data-clipboard-text="NO COUPON NEEDED" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">NO COUPON NEEDED</button>
                                                            <small>Click to Visit</small>
                                                        </div>
                                                    </div><!-- end row -->
                                                </div><!-- end coupon-area -->
                                            </div><!-- end modal-footer -->
                                        </div><!-- end mpdal-content -->
                                    </div><!-- end modal-dialog -->
                                </div><!-- end modal -->
                            </div><!-- end coupon-wrapper -->
                        </div><!-- end coupon list -->

                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center">
                                            <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_03.jpg') }}" alt="" class="img-responsive"></a>
                                            <small><a href="{{ url('/store-single')}}">View Store Coupons</a></small>
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
                                                    <small>71 Rating</small>
                                                </div>
                                                <div class="favorite-coupon pull-right text-right">
                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div><!-- end coupon-top -->
                                            <h3><a href="{{ url('/coupon-single')}}">44$ off CompanieNamis Discount</a></h3>
                                            <p>Bringing a new breath to the fashion CompanieNamis's.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                        </div><!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                <span class="coupon-code">2016TATILRA56</span>
                                                <span class="show-code">Show Code</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                            <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 21 Comments</a></small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_03" class="modal fade code-modal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4><a href="{{ url('/coupon-single')}}">44$ off CompanieNamis Discount</a></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_03.jpg') }}" alt="" class="img-responsive"></a>
                                                        <div class="modal-button">
                                                            <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
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
                                                                    <small>71 Rating</small>
                                                                </div>
                                                                <div class="favorite-coupon pull-right text-right">
                                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div><!-- end coupon-top -->
                                                        </div><!-- end coupon-meta -->

                                                        <p>Bringing a new breath to the fashion CompanieNamis's.. You can save awesome discount with our coupon code today!</p>

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
                                                            <button data-clipboard-text="2016TATILRA56" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA56</button>
                                                            <small>Click to Copy</small>
                                                        </div>
                                                    </div><!-- end row -->
                                                </div><!-- end coupon-area -->
                                            </div><!-- end modal-footer -->
                                        </div><!-- end mpdal-content -->
                                    </div><!-- end modal-dialog -->
                                </div><!-- end modal -->
                            </div><!-- end coupon-wrapper -->
                        </div><!-- end coupon list -->

                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center">
                                            <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_04.jpg') }}" alt="" class="img-responsive"></a>
                                            <small><a href="{{ url('/store-single')}}">View Store Coupons</a></small>
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
                                                    <small>12 Rating</small>
                                                </div>
                                                <div class="favorite-coupon pull-right text-right">
                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div><!-- end coupon-top -->
                                            <h3><a href="{{ url('/coupon-single')}}">10% Discount Coupon from KnowLogoDesign</a></h3>
                                            <p>Those new members to the site via our instant KnowLogoDesign.com.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                        </div><!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                <span class="coupon-code">2016TATILRA51</span>
                                                <span class="show-code">Show Code</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                            <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 51 Comments</a></small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_04" class="modal fade code-modal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4><a href="{{ url('/coupon-single')}}">10% Discount Coupon from KnowLogoDesign</a></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_04.jpg') }}" alt="" class="img-responsive"></a>
                                                        <div class="modal-button">
                                                            <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
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
                                                                    <small>12 Rating</small>
                                                                </div>
                                                                <div class="favorite-coupon pull-right text-right">
                                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div><!-- end coupon-top -->
                                                        </div><!-- end coupon-meta -->

                                                        <p>Those new members to the site via our instant KnowLogoDesign.com.. You can save awesome discount with our coupon code today!</p>

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
                                                            <button data-clipboard-text="2016TATILRA51" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA51</button>
                                                            <small>Click to Copy</small>
                                                        </div>
                                                    </div><!-- end row -->
                                                </div><!-- end coupon-area -->
                                            </div><!-- end modal-footer -->
                                        </div><!-- end mpdal-content -->
                                    </div><!-- end modal-dialog -->
                                </div><!-- end modal -->
                            </div><!-- end coupon-wrapper -->
                        </div><!-- end coupon list -->

                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center">
                                            <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_05.jpg') }}" alt="" class="img-responsive"></a>
                                            <small><a href="{{ url('/store-single')}}">View Store Coupons</a></small>
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
                                                    <small>44 Rating</small>
                                                </div>
                                                <div class="favorite-coupon pull-right text-right">
                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div><!-- end coupon-top -->
                                            <h3><a href="{{ url('/coupon-single')}}">Free Shipping for All Orders</a></h3>
                                            <p>Get free shipping for all your next orders from this store.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                        </div><!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                <span class="coupon-code">2016TATILRA29</span>
                                                <span class="show-code">Show Code</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                            <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 0 Comment</a></small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_05" class="modal fade code-modal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4><a href="{{ url('/coupon-single')}}">Free Shipping for All Orders</a></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_05.jpg') }}" alt="" class="img-responsive"></a>
                                                        <div class="modal-button">
                                                            <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
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

                                                        <p>Get free shipping for all your next orders from this store.. You can save awesome discount with our coupon code today!</p>

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
                                                            <button data-clipboard-text="2016TATILRA29" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA29</button>
                                                            <small>Click to Copy</small>
                                                        </div>
                                                    </div><!-- end row -->
                                                </div><!-- end coupon-area -->
                                            </div><!-- end modal-footer -->
                                        </div><!-- end mpdal-content -->
                                    </div><!-- end modal-dialog -->
                                </div><!-- end modal -->
                            </div><!-- end coupon-wrapper -->
                        </div><!-- end coupon list -->

                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center">
                                            <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_06.jpg') }}" alt="" class="img-responsive"></a>
                                            <small><a href="{{ url('/store-single')}}">View Store Coupons</a></small>
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
                                            <h3><a href="{{ url('/coupon-single')}}">$5 for for your next logo design</a></h3>
                                            <p>Get free shipping for all your next orders from this store.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                        </div><!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                <span class="coupon-code">2016TATILRAAA</span>
                                                <span class="show-code">Show Code</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                            <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 12 Comments</a></small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_06" class="modal fade code-modal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4><a href="{{ url('/coupon-single')}}">$5 for for your next logo design</a></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_06.jpg') }}" alt="" class="img-responsive"></a>
                                                        <div class="modal-button">
                                                            <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
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

                                                        <p>Get free shipping for all your next orders from this store.. You can save awesome discount with our coupon code today!</p>

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
                                                            <button data-clipboard-text="2016TATILRAAA" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRAAA</button>
                                                            <small>Click to Copy</small>
                                                        </div>
                                                    </div><!-- end row -->
                                                </div><!-- end coupon-area -->
                                            </div><!-- end modal-footer -->
                                        </div><!-- end mpdal-content -->
                                    </div><!-- end modal-dialog -->
                                </div><!-- end modal -->
                            </div><!-- end coupon-wrapper -->
                        </div><!-- end coupon list -->

                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center">
                                            <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_07.jpg') }}" alt="" class="img-responsive"></a>
                                            <small><a href="{{ url('/store-single')}}">View Store Coupons</a></small>
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
                                            <h3><a href="{{ url('/coupon-single')}}">$10 Credit for new users on Sohbet Molasi</a></h3>
                                            <p>Get free shipping for all your next orders from this store.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                        </div><!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                <span class="coupon-code">2016TATILRA21</span>
                                                <span class="show-code">Show Code</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                            <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 11 Comments</a></small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_07" class="modal fade code-modal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4><a href="{{ url('/coupon-single')}}">$10 Credit for new users on Sohbet Molasi</a></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="{{ url('/store-single')}}"><img src="{{ asset('assets/images/store_07.jpg') }}" alt="" class="img-responsive"></a>
                                                        <div class="modal-button">
                                                            <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
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

                                                        <p>Get free shipping for all your next orders from this store. You can save awesome discount with our coupon code today!</p>

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
                                                            <button data-clipboard-text="2016TATILRA21" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA21</button>
                                                            <small>Click to Copy</small>
                                                        </div>
                                                    </div><!-- end row -->
                                                </div><!-- end coupon-area -->
                                            </div><!-- end modal-footer -->
                                        </div><!-- end mpdal-content -->
                                    </div><!-- end modal-dialog -->
                                </div><!-- end modal -->
                            </div><!-- end coupon-wrapper -->
                        </div><!-- end coupon list -->

                        <nav class="nav-pagi">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end content -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
@endsection           