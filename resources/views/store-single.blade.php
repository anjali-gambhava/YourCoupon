@extends('layout.page')

@section('page-title', '50% Discount Coupon From CatiLogoms.Com')
@section('page-title-details', 'In dignissim feugiat gravida. Proin feugiat quam sed gravida fringilla. Proin quis mauris ut magna fringilla vulputate quis non ante. Integer bibendum velit dui. Sed consequat nisi id convallis eleifend.')

@section('page-data')
	  <div class="section wb">
            <div class="container">
                <div class="row">
                    <div class="content col-md-8">
                        <div class="post-wrapper single-store">
                            <div class="featured hidden-xs"><a data-placement="top" data-toggle="tooltip" title="Favorite Store" href="#"><i class="fa fa-heart-o"></i></a></div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store.png" alt="" class="img-responsive"></a>
                                        <small><a href="#">Connect.com</a></small>
                                    </div>
                                    <!-- end media -->
                                </div>
                                <!-- end col -->

                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="coupon-meta">
                                        <h3>Connect.com <small><a href="{{ url('/store-single')}}"><i class="fa fa-rss"></i> Subscribe this Store</a></small></h3>
                                        <p>You can add store description goes here. Lorem ipsum donec aliquam, urna quis ornare, tellus enim posuere est, vitae molestie felis odio in massa.</p>
                                    </div>
                                    <!-- end meta -->

                                    <div class="coupon-bottom clearfix">
                                        <div class="post-sharing">
                                            <ul class="list-inline">
                                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="hidden-xs">Share on Facebook</span></a></li>
                                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="hidden-xs">Tweet on Twitter</span></a></li>
                                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- end post-sharing -->
                                    </div>
                                    <!-- end coupon-top -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end post-wrapper -->

                        <hr class="invis">

                        <div class="coupon-tab post-wrapper nopadtop clearfix">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs custom-tab-nav" role="tablist">
                                <li role="presentation" class="active"><a href="#activecoupons" aria-controls="activecoupons" role="tab" data-toggle="tab">Active Coupons</a></li>
                                <li role="presentation"><a href="#unreliablecoupons" aria-controls="unreliablecoupons" role="tab" data-toggle="tab">Unreliable Coupons</a></li>
                                <li role="presentation"><a href="#printablecoupons" aria-controls="printablecoupons" role="tab" data-toggle="tab">Printable Coupons</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="activecoupons">
                                    <div class="coupon-list list-wrapper">
                                        <div class="coupon-wrapper">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="post-media text-center">
                                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store.png" alt="" class="img-responsive"></a>
                                                        <small><a href="#">Visit Store</a></small>
                                                    </div>
                                                    <!-- end media -->
                                                </div>
                                                <!-- end col -->

                                                <div class="col-md-9 col-sm-9 col-xs-12">
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
                                                        </div>
                                                        <!-- end coupon-top -->
                                                        <h3><a href="{{ url('/coupon-single')}}">50% Discount Coupon from CatiLogoms.com</a></h3>
                                                        <p>At reasonable prices, quality assurance, 100% secure shopping. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                                    </div>
                                                    <!-- end meta -->

                                                    <div class="showcode">
                                                        <a href="#" class="code-link" >
                                                            <span class="coupon-code">2016TATILRA50</span>
                                                            <span class="show-code">Show Code</span>
                                                        </a>
                                                    </div>
                                                    <!-- end showcode -->

                                                    <div class="coupon-bottom clearfix">
                                                        <small class="pull-left">Expire : 21/07/2016</small>
                                                        <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 11 Comments</a></small>
                                                    </div>
                                                    <!-- end coupon-top -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

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
                                                                    <a href="{{ url('/store-single')}}"><img src="uploads/store_01.jpg" alt="" class="img-responsive"></a>
                                                                    <div class="modal-button">
                                                                        <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->

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
                                                                        </div>
                                                                        <!-- end coupon-top -->
                                                                    </div>
                                                                    <!-- end coupon-meta -->

                                                                    <p>At reasonable prices, quality assurance, 100% secure shopping. You can save awesome discount with our coupon code today!</p>

                                                                    <div class="modal-share clearfix">
                                                                        <ul class="list-inline social-small">
                                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- end share -->
                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                        </div>
                                                        <!-- end modal-body -->

                                                        <div class="modal-footer">
                                                            <div class="coupon-area">
                                                                <div class=" row">
                                                                    <div class="col-md-4 text-left">
                                                                        <div class="coupon-vote">
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                                        </div>
                                                                        <!-- end coupon-meta -->
                                                                    </div>
                                                                    <!-- end col -->
                                                                    <div class="col-md-8 text-center">
                                                                        <button data-clipboard-text="2016TATILRA50" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA50</button>
                                                                        <small>Click to Copy</small>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                            </div>
                                                            <!-- end coupon-area -->
                                                        </div>
                                                        <!-- end modal-footer -->
                                                    </div>
                                                    <!-- end mpdal-content -->
                                                </div>
                                                <!-- end modal-dialog -->
                                            </div>
                                            <!-- end modal -->
                                        </div>
                                        <!-- end coupon-wrapper -->
                                    </div>
                                    <!-- end coupon list -->

                                    <div class="coupon-list list-wrapper">
                                        <div class="coupon-wrapper">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="post-media text-center">
                                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store.png" alt="" class="img-responsive"></a>
                                                        <small><a href="#">Visit Store</a></small>
                                                    </div>
                                                    <!-- end media -->
                                                </div>
                                                <!-- end col -->

                                                <div class="col-md-9 col-sm-9 col-xs-12">
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
                                                        </div>
                                                        <!-- end coupon-top -->
                                                        <h3><a href="{{ url('/coupon-single')}}">MyLogo.com 10$ off for all orders</a></h3>
                                                        <p>Win tablet pc discount on your MyLogo com shopping plus free... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                                    </div>
                                                    <!-- end meta -->

                                                    <div class="showcode">
                                                        <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                            <span class="coupon-code">2016TATILRA33</span>
                                                            <span class="show-code">Show Code</span>
                                                        </a>
                                                    </div>
                                                    <!-- end showcode -->

                                                    <div class="coupon-bottom clearfix">
                                                        <small class="pull-left">Expire : 21/07/2016</small>
                                                        <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 12 Comments</a></small>
                                                    </div>
                                                    <!-- end coupon-top -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

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
                                                                    <a href="{{ url('/store-single')}}"><img src="uploads/store_02.jpg" alt="" class="img-responsive"></a>
                                                                    <div class="modal-button">
                                                                        <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->

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
                                                                        </div>
                                                                        <!-- end coupon-top -->
                                                                    </div>
                                                                    <!-- end coupon-meta -->

                                                                    <p>Win tablet pc discount on your MyLogo com shopping plus free.. You can save awesome discount with our coupon code today!</p>

                                                                    <div class="modal-share clearfix">
                                                                        <ul class="list-inline social-small">
                                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- end share -->
                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                        </div>
                                                        <!-- end modal-body -->

                                                        <div class="modal-footer">
                                                            <div class="coupon-area">
                                                                <div class=" row">
                                                                    <div class="col-md-4 text-left">
                                                                        <div class="coupon-vote">
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                                        </div>
                                                                        <!-- end coupon-meta -->
                                                                    </div>
                                                                    <!-- end col -->
                                                                    <div class="col-md-8 text-center">
                                                                        <button data-clipboard-text="2016TATILRA33" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA33</button>
                                                                        <small>Click to Copy</small>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                            </div>
                                                            <!-- end coupon-area -->
                                                        </div>
                                                        <!-- end modal-footer -->
                                                    </div>
                                                    <!-- end mpdal-content -->
                                                </div>
                                                <!-- end modal-dialog -->
                                            </div>
                                            <!-- end modal -->
                                        </div>
                                        <!-- end coupon-wrapper -->
                                    </div>
                                    <!-- end coupon list -->

                                    <div class="coupon-list list-wrapper">
                                        <div class="coupon-wrapper">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="post-media text-center">
                                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store.png" alt="" class="img-responsive"></a>
                                                        <small><a href="#">Visit Store</a></small>
                                                    </div>
                                                    <!-- end media -->
                                                </div>
                                                <!-- end col -->

                                                <div class="col-md-9 col-sm-9 col-xs-12">
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
                                                        </div>
                                                        <!-- end coupon-top -->
                                                        <h3><a href="{{ url('/coupon-single')}}">44$ off CompanieNamis Discount</a></h3>
                                                        <p>Bringing a new breath to the fashion CompanieNamis's.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                                    </div>
                                                    <!-- end meta -->

                                                    <div class="showcode">
                                                        <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                            <span class="coupon-code">2016TATILRA56</span>
                                                            <span class="show-code">Show Code</span>
                                                        </a>
                                                    </div>
                                                    <!-- end showcode -->

                                                    <div class="coupon-bottom clearfix">
                                                        <small class="pull-left">Expire : 21/07/2016</small>
                                                        <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 21 Comments</a></small>
                                                    </div>
                                                    <!-- end coupon-top -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

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
                                                                    <a href="{{ url('/store-single')}}"><img src="uploads/store_03.jpg" alt="" class="img-responsive"></a>
                                                                    <div class="modal-button">
                                                                        <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->

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
                                                                        </div>
                                                                        <!-- end coupon-top -->
                                                                    </div>
                                                                    <!-- end coupon-meta -->

                                                                    <p>Bringing a new breath to the fashion CompanieNamis's.. You can save awesome discount with our coupon code today!</p>

                                                                    <div class="modal-share clearfix">
                                                                        <ul class="list-inline social-small">
                                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- end share -->
                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                        </div>
                                                        <!-- end modal-body -->

                                                        <div class="modal-footer">
                                                            <div class="coupon-area">
                                                                <div class=" row">
                                                                    <div class="col-md-4 text-left">
                                                                        <div class="coupon-vote">
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                                        </div>
                                                                        <!-- end coupon-meta -->
                                                                    </div>
                                                                    <!-- end col -->
                                                                    <div class="col-md-8 text-center">
                                                                        <button data-clipboard-text="2016TATILRA56" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA56</button>
                                                                        <small>Click to Copy</small>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                            </div>
                                                            <!-- end coupon-area -->
                                                        </div>
                                                        <!-- end modal-footer -->
                                                    </div>
                                                    <!-- end mpdal-content -->
                                                </div>
                                                <!-- end modal-dialog -->
                                            </div>
                                            <!-- end modal -->
                                        </div>
                                        <!-- end coupon-wrapper -->
                                    </div>
                                    <!-- end coupon list -->

                                    <div class="coupon-list list-wrapper">
                                        <div class="coupon-wrapper">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="post-media text-center">
                                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store.png" alt="" class="img-responsive"></a>
                                                        <small><a href="#">Visit Store</a></small>
                                                    </div>
                                                    <!-- end media -->
                                                </div>
                                                <!-- end col -->

                                                <div class="col-md-9 col-sm-9 col-xs-12">
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
                                                        </div>
                                                        <!-- end coupon-top -->
                                                        <h3><a href="{{ url('/coupon-single')}}">10% Discount Coupon from KnowLogoDesign</a></h3>
                                                        <p>Those new members to the site via our instant KnowLogoDesign.com.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                                    </div>
                                                    <!-- end meta -->

                                                    <div class="showcode">
                                                        <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                            <span class="coupon-code">2016TATILRA51</span>
                                                            <span class="show-code">Show Code</span>
                                                        </a>
                                                    </div>
                                                    <!-- end showcode -->

                                                    <div class="coupon-bottom clearfix">
                                                        <small class="pull-left">Expire : 21/07/2016</small>
                                                        <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 5 Comments</a></small>
                                                    </div>
                                                    <!-- end coupon-top -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

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
                                                                    <a href="{{ url('/store-single')}}"><img src="uploads/store_04.jpg" alt="" class="img-responsive"></a>
                                                                    <div class="modal-button">
                                                                        <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->

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
                                                                        </div>
                                                                        <!-- end coupon-top -->
                                                                    </div>
                                                                    <!-- end coupon-meta -->

                                                                    <p>Those new members to the site via our instant KnowLogoDesign.com.. You can save awesome discount with our coupon code today!</p>

                                                                    <div class="modal-share clearfix">
                                                                        <ul class="list-inline social-small">
                                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- end share -->
                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                        </div>
                                                        <!-- end modal-body -->

                                                        <div class="modal-footer">
                                                            <div class="coupon-area">
                                                                <div class=" row">
                                                                    <div class="col-md-4 text-left">
                                                                        <div class="coupon-vote">
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                                        </div>
                                                                        <!-- end coupon-meta -->
                                                                    </div>
                                                                    <!-- end col -->
                                                                    <div class="col-md-8 text-center">
                                                                        <button data-clipboard-text="2016TATILRA51" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA51</button>
                                                                        <small>Click to Copy</small>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                            </div>
                                                            <!-- end coupon-area -->
                                                        </div>
                                                        <!-- end modal-footer -->
                                                    </div>
                                                    <!-- end mpdal-content -->
                                                </div>
                                                <!-- end modal-dialog -->
                                            </div>
                                            <!-- end modal -->
                                        </div>
                                        <!-- end coupon-wrapper -->
                                    </div>
                                    <!-- end coupon list -->

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

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="unreliablecoupons">

                                    <div class="coupon-list list-wrapper">
                                        <div class="coupon-wrapper">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="post-media text-center">
                                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store.png" alt="" class="img-responsive"></a>
                                                        <small><a href="#">Visit Store</a></small>
                                                    </div>
                                                    <!-- end media -->
                                                </div>
                                                <!-- end col -->

                                                <div class="col-md-9 col-sm-9 col-xs-12">
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
                                                        </div>
                                                        <!-- end coupon-top -->
                                                        <h3><a href="{{ url('/coupon-single')}}">Free Shipping for All Orders</a></h3>
                                                        <p>Get free shipping for all your next orders from this store.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                                    </div>
                                                    <!-- end meta -->

                                                    <div class="showcode">
                                                        <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                            <span class="coupon-code">2016TATILRA29</span>
                                                            <span class="show-code">Show Code</span>
                                                        </a>
                                                    </div>
                                                    <!-- end showcode -->

                                                    <div class="coupon-bottom clearfix">
                                                        <small class="pull-left">Expire : 21/07/2016</small>
                                                        <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 44 Comments</a></small>
                                                    </div>
                                                    <!-- end coupon-top -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

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
                                                                    <a href="{{ url('/store-single')}}"><img src="uploads/store_05.jpg" alt="" class="img-responsive"></a>
                                                                    <div class="modal-button">
                                                                        <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->

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
                                                                        </div>
                                                                        <!-- end coupon-top -->
                                                                    </div>
                                                                    <!-- end coupon-meta -->

                                                                    <p>Get free shipping for all your next orders from this store.. You can save awesome discount with our coupon code today!</p>

                                                                    <div class="modal-share clearfix">
                                                                        <ul class="list-inline social-small">
                                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- end share -->
                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                        </div>
                                                        <!-- end modal-body -->

                                                        <div class="modal-footer">
                                                            <div class="coupon-area">
                                                                <div class=" row">
                                                                    <div class="col-md-4 text-left">
                                                                        <div class="coupon-vote">
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                                        </div>
                                                                        <!-- end coupon-meta -->
                                                                    </div>
                                                                    <!-- end col -->
                                                                    <div class="col-md-8 text-center">
                                                                        <button data-clipboard-text="2016TATILRA29" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA29</button>
                                                                        <small>Click to Copy</small>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                            </div>
                                                            <!-- end coupon-area -->
                                                        </div>
                                                        <!-- end modal-footer -->
                                                    </div>
                                                    <!-- end mpdal-content -->
                                                </div>
                                                <!-- end modal-dialog -->
                                            </div>
                                            <!-- end modal -->
                                        </div>
                                        <!-- end coupon-wrapper -->
                                    </div>
                                    <!-- end coupon list -->

                                    <div class="coupon-list list-wrapper">
                                        <div class="coupon-wrapper">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="post-media text-center">
                                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store.png" alt="" class="img-responsive"></a>
                                                        <small><a href="#">Visit Store</a></small>
                                                    </div>
                                                    <!-- end media -->
                                                </div>
                                                <!-- end col -->

                                                <div class="col-md-9 col-sm-9 col-xs-12">
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
                                                        </div>
                                                        <!-- end coupon-top -->
                                                        <h3><a href="{{ url('/coupon-single')}}">$5 for for your next logo design</a></h3>
                                                        <p>Get free shipping for all your next orders from this store.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                                    </div>
                                                    <!-- end meta -->

                                                    <div class="showcode">
                                                        <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                            <span class="coupon-code">2016TATILRAAA</span>
                                                            <span class="show-code">Show Code</span>
                                                        </a>
                                                    </div>
                                                    <!-- end showcode -->

                                                    <div class="coupon-bottom clearfix">
                                                        <small class="pull-left">Expire : 21/07/2016</small>
                                                        <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 11 Comments</a></small>
                                                    </div>
                                                    <!-- end coupon-top -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

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
                                                                    <a href="{{ url('/store-single')}}"><img src="uploads/store_06.jpg" alt="" class="img-responsive"></a>
                                                                    <div class="modal-button">
                                                                        <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->

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
                                                                        </div>
                                                                        <!-- end coupon-top -->
                                                                    </div>
                                                                    <!-- end coupon-meta -->

                                                                    <p>Get free shipping for all your next orders from this store.. You can save awesome discount with our coupon code today!</p>

                                                                    <div class="modal-share clearfix">
                                                                        <ul class="list-inline social-small">
                                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- end share -->
                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                        </div>
                                                        <!-- end modal-body -->

                                                        <div class="modal-footer">
                                                            <div class="coupon-area">
                                                                <div class=" row">
                                                                    <div class="col-md-4 text-left">
                                                                        <div class="coupon-vote">
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                                        </div>
                                                                        <!-- end coupon-meta -->
                                                                    </div>
                                                                    <!-- end col -->
                                                                    <div class="col-md-8 text-center">
                                                                        <button data-clipboard-text="2016TATILRAAA" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRAAA</button>
                                                                        <small>Click to Copy</small>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                            </div>
                                                            <!-- end coupon-area -->
                                                        </div>
                                                        <!-- end modal-footer -->
                                                    </div>
                                                    <!-- end mpdal-content -->
                                                </div>
                                                <!-- end modal-dialog -->
                                            </div>
                                            <!-- end modal -->
                                        </div>
                                        <!-- end coupon-wrapper -->
                                    </div>
                                    <!-- end coupon list -->

                                    <div class="coupon-list list-wrapper">
                                        <div class="coupon-wrapper">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="post-media text-center">
                                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store.png" alt="" class="img-responsive"></a>
                                                        <small><a href="#">Visit Store</a></small>
                                                    </div>
                                                    <!-- end media -->
                                                </div>
                                                <!-- end col -->

                                                <div class="col-md-9 col-sm-9 col-xs-12">
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
                                                        </div>
                                                        <!-- end coupon-top -->
                                                        <h3><a href="{{ url('/coupon-single')}}">$10 Credit for new users on Sohbet Molasi</a></h3>
                                                        <p>Get free shipping for all your next orders from this store.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                                    </div>
                                                    <!-- end meta -->

                                                    <div class="showcode">
                                                        <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                            <span class="coupon-code">2016TATILRA21</span>
                                                            <span class="show-code">Show Code</span>
                                                        </a>
                                                    </div>
                                                    <!-- end showcode -->

                                                    <div class="coupon-bottom clearfix">
                                                        <small class="pull-left">Expire : 21/07/2016</small>
                                                        <small class="pull-right"><a href="{{ url('/store-single')}}"><i class="fa fa-comment-o"></i> 6 Comments</a></small>
                                                    </div>
                                                    <!-- end coupon-top -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

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
                                                                    <a href="{{ url('/store-single')}}"><img src="uploads/store_07.jpg" alt="" class="img-responsive"></a>
                                                                    <div class="modal-button">
                                                                        <a href="{{ url('/') }}" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->

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
                                                                        </div>
                                                                        <!-- end coupon-top -->
                                                                    </div>
                                                                    <!-- end coupon-meta -->

                                                                    <p>Get free shipping for all your next orders from this store. You can save awesome discount with our coupon code today!</p>

                                                                    <div class="modal-share clearfix">
                                                                        <ul class="list-inline social-small">
                                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- end share -->
                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                        </div>
                                                        <!-- end modal-body -->

                                                        <div class="modal-footer">
                                                            <div class="coupon-area">
                                                                <div class=" row">
                                                                    <div class="col-md-4 text-left">
                                                                        <div class="coupon-vote">
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                                        </div>
                                                                        <!-- end coupon-meta -->
                                                                    </div>
                                                                    <!-- end col -->
                                                                    <div class="col-md-8 text-center">
                                                                        <button data-clipboard-text="2016TATILRA21" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA21</button>
                                                                        <small>Click to Copy</small>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                            </div>
                                                            <!-- end coupon-area -->
                                                        </div>
                                                        <!-- end modal-footer -->
                                                    </div>
                                                    <!-- end mpdal-content -->
                                                </div>
                                                <!-- end modal-dialog -->
                                            </div>
                                            <!-- end modal -->
                                        </div>
                                        <!-- end coupon-wrapper -->
                                    </div>
                                    <!-- end coupon list -->

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
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="printablecoupons">
                                    <div class="coupon-list list-wrapper">
                                        <div class="coupon-wrapper">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="post-media text-center">
                                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store.png" alt="" class="img-responsive"></a>
                                                        <small><a href="{{ url('/store-single')}}">View Store Coupons</a></small>
                                                    </div>
                                                    <!-- end media -->
                                                </div>
                                                <!-- end col -->

                                                <div class="col-md-9 col-sm-9 col-xs-12">
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
                                                        </div>
                                                        <!-- end coupon-top -->
                                                        <h3><a href="{{ url('/coupon-single')}}">MyLogo.com 10$ off Printable Coupon</a></h3>
                                                        <p>Win tablet pc discount on your MyLogo com shopping plus free... Lorem ipsum dolor sit amet adipisicing elit, sed do eiolore consectetur.</p>
                                                    </div>
                                                    <!-- end meta -->

                                                    <div class="showcode">
                                                        <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                            <span class="coupon-code"></span>
                                                            <span class="show-code print-code"><i class="fa fa-print"></i> Print Coupon</span>
                                                        </a>
                                                    </div>
                                                    <!-- end showcode -->

                                                    <div class="coupon-bottom clearfix">
                                                        <small class="pull-left">Expire : 21/07/2016</small>
                                                    </div>
                                                    <!-- end coupon-top -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <!-- Modal -->
                                            <div id="code_id_14" class="modal fade code-modal print-modal">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4><a href="{{ url('/coupon-single')}}">MyLogo.com 10$ off Printable Coupon</a></h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row bgcolor text-center">
                                                                <div class="col-md-8 col-md-offset-2">
                                                                    <a class="coupon-code btn btn-primary btn-block" href="#" title="Click to Copy"><img src="uploads/print.png" alt="" class="img-responsive"></a>

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
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end content -->

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
                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store_01.jpg" alt="" class="img-responsive"></a>
                                        <small>Takifest.com</small>
                                    </div>
                                    <!-- end media -->
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="post-media">
                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store_02.jpg" alt="" class="img-responsive"></a>
                                        <small>WPServis.com</small>
                                    </div>
                                    <!-- end media -->
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="post-media">
                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store_03.jpg" alt="" class="img-responsive"></a>
                                        <small>PurplebyBanu.com</small>
                                    </div>
                                    <!-- end media -->
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="post-media">
                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store_04.jpg" alt="" class="img-responsive"></a>
                                        <small>Tutsplus.com</small>
                                    </div>
                                    <!-- end media -->
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="post-media">
                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store_05.jpg" alt="" class="img-responsive"></a>
                                        <small>Showwp.com</small>
                                    </div>
                                    <!-- end media -->
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="post-media">
                                        <a href="{{ url('/coupon-single')}}"><img src="uploads/store_06.jpg" alt="" class="img-responsive"></a>
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