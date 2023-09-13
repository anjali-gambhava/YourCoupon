@extends('layout.page')

@section('page-title', 'Printable Coupons')
@section('page-title-details', 'In dignissim feugiat gravida. Proin feugiat quam sed gravida fringilla. Proin quis mauris ut magna fringilla vulputate quis non ante. Integer bibendum velit dui. Sed consequat nisi id convallis eleifend.')

@section('page-data')
	  <div class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 first">
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
                                                <span class="coupon-code"></span>
                                                <span class="show-code print-code"><i class="fa fa-print"></i> Print Coupon</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_01" class="modal fade code-modal print-modal">
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
                                            </div><!-- end modal-body -->

                                            <div class="modal-footer">
                                                <div class="coupon-area">
                                                    <div class="clearfix">
                                                        <div class="pull-left">
                                                            <div class="coupon-vote">
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                            </div><!-- end coupon-meta -->
                                                        </div><!-- end col -->

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

                    <div class="col-md-6 last">
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
                                                    <small>21 Rating</small>
                                                </div>
                                                <div class="favorite-coupon pull-right text-right">
                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div><!-- end coupon-top -->
                                            <h3><a href="{{ url('/coupon-single')}}">MyLogo.com 10$ off for all orders best coupon! for ever</a></h3>
                                            <p>Win tablet pc discount on your MyLogo com shopping plus free... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                        </div><!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                <span class="coupon-code"></span>
                                                <span class="show-code print-code"><i class="fa fa-print"></i> Print Coupon</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_02" class="modal fade code-modal print-modal">
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
                                            </div><!-- end modal-body -->

                                            <div class="modal-footer">
                                                <div class="coupon-area">
                                                    <div class="clearfix">
                                                        <div class="pull-left">
                                                            <div class="coupon-vote">
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                            </div><!-- end coupon-meta -->
                                                        </div><!-- end col -->

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

                    <div class="col-md-6 first">
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
                                                    <small>21 Rating</small>
                                                </div>
                                                <div class="favorite-coupon pull-right text-right">
                                                    <a href="{{ url('/coupons')}}" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div><!-- end coupon-top -->
                                            <h3><a href="{{ url('/coupon-single')}}">44$ off CompanieNamis Discount Last Change in 2016</a></h3>
                                            <p>Bringing a new breath to the fashion CompanieNamis's.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                        </div><!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link" data-ex-link="{{ url('/') }}">
                                                <span class="coupon-code"></span>
                                                <span class="show-code print-code"><i class="fa fa-print"></i> Print Coupon</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_03" class="modal fade code-modal print-modal">
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
                                            </div><!-- end modal-body -->

                                            <div class="modal-footer">
                                                <div class="coupon-area">
                                                    <div class="clearfix">
                                                        <div class="pull-left">
                                                            <div class="coupon-vote">
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                            </div><!-- end coupon-meta -->
                                                        </div><!-- end col -->

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

                    <div class="col-md-6 last">
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
                                                    <small>21 Rating</small>
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
                                                <span class="coupon-code"></span>
                                                <span class="show-code print-code"><i class="fa fa-print"></i> Print Coupon</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_04" class="modal fade code-modal print-modal">
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
                                            </div><!-- end modal-body -->

                                            <div class="modal-footer">
                                                <div class="coupon-area">
                                                    <div class="clearfix">
                                                        <div class="pull-left">
                                                            <div class="coupon-vote">
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                            </div><!-- end coupon-meta -->
                                                        </div><!-- end col -->

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

                    <div class="col-md-6 first">
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
                                                    <small>21 Rating</small>
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
                                                <span class="coupon-code"></span>
                                                <span class="show-code print-code"><i class="fa fa-print"></i> Print Coupon</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_05" class="modal fade code-modal print-modal">
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
                                            </div><!-- end modal-body -->

                                            <div class="modal-footer">
                                                <div class="coupon-area">
                                                    <div class="clearfix">
                                                        <div class="pull-left">
                                                            <div class="coupon-vote">
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                            </div><!-- end coupon-meta -->
                                                        </div><!-- end col -->

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

                    <div class="col-md-6 last">
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
                                                <span class="coupon-code"></span>
                                                <span class="show-code print-code"><i class="fa fa-print"></i> Print Coupon</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_06" class="modal fade code-modal print-modal">
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
                                            </div><!-- end modal-body -->

                                            <div class="modal-footer">
                                                <div class="coupon-area">
                                                    <div class="clearfix">
                                                        <div class="pull-left">
                                                            <div class="coupon-vote">
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                            </div><!-- end coupon-meta -->
                                                        </div><!-- end col -->

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

                    <div class="col-md-6 first">
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
                                                <span class="coupon-code"></span>
                                                <span class="show-code print-code"><i class="fa fa-print"></i> Print Coupon</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_07" class="modal fade code-modal print-modal">
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
                                            </div><!-- end modal-body -->

                                            <div class="modal-footer">
                                                <div class="coupon-area">
                                                    <div class="clearfix">
                                                        <div class="pull-left">
                                                            <div class="coupon-vote">
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                            </div><!-- end coupon-meta -->
                                                        </div><!-- end col -->

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
                    </div><!-- end col -->

                    <div class="col-md-6 last">
                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center">
                                            <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_08.jpg') }}" alt="" class="img-responsive"></a>
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
                                                <span class="coupon-code"></span>
                                                <span class="show-code print-code"><i class="fa fa-print"></i> Print Coupon</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : 21/07/2016</small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <!-- Modal -->
                                <div id="code_id_08" class="modal fade code-modal print-modal">
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
                                            </div><!-- end modal-body -->

                                            <div class="modal-footer">
                                                <div class="coupon-area">
                                                    <div class="clearfix">
                                                        <div class="pull-left">
                                                            <div class="coupon-vote">
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                            </div><!-- end coupon-meta -->
                                                        </div><!-- end col -->

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
                    </div><!-- end content -->
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <nav class="nav-pagi text-center clearfix">
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
                </div><!-- end row -->

                <div class="footer-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Popular Categories</h4>
                        </div>
                        <!-- end col -->
                    </div>

                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <ul class="customlist">
                                <li><a href="#">Baby Kids</a></li>
                                <li><a href="#">Books & Magazines</a></li>
                                <li><a href="#">Computers</a></li>
                                <li><a href="#">Cameras</a></li>
                                <li><a href="#">Electronics</a></li>
                            </ul>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <ul class="customlist">
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Gifts</a></li>
                                <li><a href="#">Health Beauty</a></li>
                                <li><a href="#">Home Garden</a></li>
                                <li><a href="#">Home Supplies</a></li>
                            </ul>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <ul class="customlist">
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">Entertainetmen</a></li>
                                <li><a href="#">Digital Stores</a></li>
                                <li><a href="#">Marketplaces</a></li>
                                <li><a href="#">Musicians</a></li>
                            </ul>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <ul class="customlist">
                                <li><a href="#">Movies & Films</a></li>
                                <li><a href="#">Phones</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Televisions</a></li>
                                <li><a href="#">Telegraphers</a></li>
                            </ul>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <ul class="customlist">
                                <li><a href="#">Baby Toys</a></li>
                                <li><a href="#">Clothings</a></li>
                                <li><a href="#">Jewellry</a></li>
                                <li><a href="#">Car Supplies</a></li>
                                <li><a href="#">Watches</a></li>
                            </ul>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <ul class="customlist">
                                <li><a href="#">Glassess</a></li>
                                <li><a href="#">Medical</a></li>
                                <li><a href="#">Pet Shops</a></li>
                                <li><a href="#">LifeStyle</a></li>
                                <li><a href="#">Sports</a></li>
                            </ul>
                        </div>
                    </div><!-- end row -->
                </div><!-- end ttmenu-content -->
            </div><!-- end container -->
        </div><!-- end section -->
@endsection        