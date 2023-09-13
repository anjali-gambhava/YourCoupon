@extends('layout.master')

@section('title-part')
        <div class="parallax first-section" data-stellar-background-ratio="0.5" style="background-image:url('{{ asset('assets/images/parallax_01.jpg') }} ');">
            <div class="container">
                <div class="section-title m30 text-center">
                    <h1>20.000+ Coupons from 1.000+ Stores</h1>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="well">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    <input id="typeahead" type="text" class="form-control" placeholder="Search for coupons..." autocomplete="off" data-provide="typeahead">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="pull-left text-left hidden-xs">
                                    <div class="checkbox checkbox-success checkbox-inline">
                                        <input type="checkbox" class="styled" id="inlineCheckbox1" value="option1" checked>
                                        <label for="inlineCheckbox1"> Coupons </label>
                                    </div>
                                    <div class="checkbox checkbox-success checkbox-inline">
                                        <input type="checkbox" class="styled" id="inlineCheckbox2" value="option1" checked>
                                        <label for="inlineCheckbox2"> Printable </label>
                                    </div>
                                    <div class="checkbox checkbox-success checkbox-inline">
                                        <input type="checkbox" class="styled" id="inlineCheckbox3" value="option1">
                                        <label for="inlineCheckbox3"> Deals </label>
                                    </div>
                                    <div class="checkbox checkbox-success checkbox-inline">
                                        <input type="checkbox" class="styled" id="inlineCheckbox4" value="option1">
                                        <label for="inlineCheckbox4"> Stores </label>
                                    </div>
                                </div>
                                <div class="pull-right text-right hidden-xs">
                                    <label>Search : <a href="#">MyLogo</a>, <a href="#">Companies</a>, <a href="#">Garden</a> etc.</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <hr class="invis1">

                <div class="row">
                    <div class="col-md-12">
                        <h4>Popular Stores</h4>
                    </div>
                    <!-- end col -->
                </div>

                <div class="text-center store-list row">
                    <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="post-media">
                            <a href="{{ url('/coupons')}}"><img src="{{ asset('assets/images/store_01.jpg') }}" alt="" class="img-responsive"></a>
                            <small>Takifest.com</small>
                        </div>
                        <!-- end media -->
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="post-media">
                            <a href="{{ url('/coupons')}}"><img src="{{ asset('assets/images/store_02.jpg') }}" alt="" class="img-responsive"></a>
                            <small>WPServis.com</small>
                        </div>
                        <!-- end media -->
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="post-media">
                            <a href="{{ url('/coupons')}}"><img src="{{ asset('assets/images/store_03.jpg') }}" alt="" class="img-responsive"></a>
                            <small>PurplebyBanu.com</small>
                        </div>
                        <!-- end media -->
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="post-media">
                            <a href="{{ url('/coupons')}}"><img src="{{ asset('assets/images/store_04.jpg') }}" alt="" class="img-responsive"></a>
                            <small>Tutsplus.com</small>
                        </div>
                        <!-- end media -->
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="post-media">
                            <a href="{{ url('/coupons')}}"><img src="{{ asset('assets/images/store_05.jpg') }}" alt="" class="img-responsive"></a>
                            <small>Showwp.com</small>
                        </div>
                        <!-- end media -->
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="post-media">
                            <a href="{{ url('/coupons')}}"><img src="{{ asset('assets/images/store_06.jpg') }}" alt="" class="img-responsive"></a>
                            <small>PSDConvertHTML.com</small>
                        </div>
                        <!-- end media -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
@endsection
