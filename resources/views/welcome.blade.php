@extends('layout.home')

@section('page-data')
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="promobox">
                            <div class="post-media">
                                <a href="{{ url('/categories')}}"><img src="{{ asset('assets/images/promo_01.png') }}" alt="" class="img-responsive"></a>
                                <div class="promo-desc">
                                    <img src="{{ asset('assets/images/small_01.png') }}" alt="" class="alignleft img-thumbnail">
                                    <h4><a href="#">Shop for Business</a></h4>
                                    <small>128 Available Coupons</small>
                                </div><!-- end desc -->
                            </div><!-- end media -->

                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="promobox">
                            <div class="post-media">
                                <a href="{{ url('/categories')}}"><img src="{{ asset('assets/images/promo_02.png') }}" alt="" class="img-responsive"></a>

                                <div class="promo-desc">
                                    <img src="{{ asset('assets/images/small_02.png') }}" alt="" class="alignleft img-thumbnail">
                                    <h4><a href="#">Shop for LifeStyle</a></h4>
                                    <small>44 Available Coupons</small>
                                </div><!-- end desc -->
                            </div><!-- end media -->

                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="promobox">
                            <div class="post-media">
                                <a href="{{ url('/categories')}}"><img src="{{ asset('assets/images/promo_03.png') }}" alt="" class="img-responsive"></a>

                                <div class="promo-desc">
                                    <img src="{{ asset('assets/images/small_03.png') }}" alt="" class="alignleft img-thumbnail">
                                    <h4><a href="#">Shop for Tech</a></h4>
                                    <small>55 Available Coupons</small>
                                </div><!-- end desc -->
                            </div><!-- end media -->
                        </div><!-- end box -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

                <div class="row">
                    <div class="content col-md-8">

                        @for($i=1; $i<=3; $i++)
                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center">
                                            <a href="{{ url('/coupon-single')}}"><img src="{{ asset('assets/images/store_0'.$i.'.jpg') }}" alt="" class="img-responsive"></a>
                                            <small><a href="{{ url('/store-single')}}">View Store Coupons</a></small>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="coupon-meta">
                                            <div class="coupon-top clearfix">
                                                <div class="rating pull-left">
                                                    @for($star=1; $star<=rand(1,5); $star++)
                                                        <i class="fa fa-star"></i>
                                                    @endfor
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
                        @endfor

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
                                    <li><a href="#">10% Discount Coupon from Gosi</a></li>
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
                                <li><a href="#">Books</a></li>
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
@endsection