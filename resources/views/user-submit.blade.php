@extends('layout.page')

@section('page-title', 'Submit A Coupon')
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
                                <li><a href="{{ url('/user-saved')}}"><span class="fa fa-heart-o"></span>  Saved Coupons</a></li>
                                <li class="active"><a href="{{ url('/user-submit')}}"><span class="fa fa-bullhorn"></span>  Submit a Coupon</a></li>
                                <li><a href="#"><span class="fa fa-lock"></span>  Logout</a></li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end col -->
    
                    <div class="sidebar col-md-8">
                        <div class="widget clearfix">
                            <form id="submit" class="contact-form newsletter">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Store Name / URL <small>Enter store name or url</small></label>
                                        <input type="text" class="form-control" placeholder="http://website.com/">

                                        <hr class="invis3">

                                        <label class="control-label">Coupon Code <small>Enter coupon code here</small></label>
                                        <input type="text" class="form-control" placeholder="EXAMPLE10OFF">

                                        <hr class="invis3">

                                        <label class="control-label">If Printable Coupon <small>If printable coupon please add (optional)</small></label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail"></div>
                                            <br>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileupload-new">Select Coupon</span>
                                                <span class="fileupload-exists">Change</span>
                                                <input type="file">
                                            </span>
                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload"><i class="fa fa-close"></i></a>
                                        </div>

                                        <hr class="invis3">

                                        <label class="control-label">Discount Description <small>What this coupon about?</small></label>
                                        <textarea class="form-control" placeholder="Please add more info about the discount.."></textarea>

                                        <hr class="invis3">

                                        <label class="control-label">Expiration Date <small>When this coupon will end?</small></label>
                                        <input type="text" class="form-control" placeholder="DD/MM/YYYY">

                                        <hr class="invis3">

                                        <label class="control-label">Offer Link <small>Enter link to coupon code (optional)</small></label>
                                        <input type="text" class="form-control" placeholder="http://">

                                        <hr class="invis3">

                                        <label class="control-label">Publisher Email <small>Enter your email url</small></label>
                                        <input type="email" class="form-control" placeholder="">

                                        <hr class="invis3">
                                        <button class="btn btn-primary">Submit Coupon</button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- end post-wrapper -->
                    </div><!-- end content -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
@endsection

