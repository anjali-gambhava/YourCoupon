            <div class="header">
                <div class="menu-wrapper ab-menu">
                    <div class="container">
                        <div class="hovermenu ttmenu menu-color">
                            <div class="navbar navbar-default" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                                </div><!-- end navbar-header -->
                        
                                <div class="navbar-collapse collapse">
                                    @php
                                        $menu_list = [
                                            [
                                                'name' => 'Home',
                                                'route' => '/',
                                            ],
                                            [
                                                'name' => 'Coupons',
                                                'route' => 'coupons',
                                            ],
                                            [
                                                'name' => 'Printable',
                                                'route' => 'printable',
                                            ],
                                            [
                                                'name' => 'Categories',
                                                'route' => 'categories',
                                            ],
                                            [
                                                'name' => 'Stores',
                                                'route' => 'stores',
                                            ],
                                        ];
                                    @endphp
                                    <ul class="nav navbar-nav">
                                        @foreach($menu_list as $menu_data)
                                            <li><a class="{{ Request::is($menu_data['route']) ? 'active' : '' }}" href="{{ url($menu_data['route'])}}" title="">{{ $menu_data['name'] }}</a></li>
                                        @endforeach
                                    </ul>

                                    <ul class="nav navbar-nav navbar-right">
                                        @if(session()->has('user'))
                                            <li class="dropdown hasmenu userpanel">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('assets/images/testi_03.png') }}" alt="" class="img-circle"> {{ session()->get('user') ['email'] }} <span class="fa fa-angle-down"></span></a>
                                                <ul class="dropdown-menu start-right" role="menu">
                                                    <li><a href="{{ url('/user-dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                                    <li><a href="{{ url('/user-favorites')}}"><i class="fa fa-star"></i> Favorite Stores</a></li>
                                                    <li><a href="{{ url('/user-saved')}}"><i class="fa fa-heart-o"></i> Saved Coupons</a></li>
                                                    <li><a href="{{ url('/user-submit')}}"><i class="fa fa-bullhorn"></i> Submit Coupon</a></li>
                                                    <li><a href="{{ url('/signout') }}"><i class="fa fa-lock"></i> Sign Out</a></li>
                                                </ul>
                                            </li>
                                        @else
                                            <li><a class="" href="{{ url('/signin') }}" title="">Signin / Signup</a></li>
                                        @endif
                                    </ul>
                                </div><!--/.nav-collapse -->
                            </div><!-- end navbar navbar-default clearfix -->
                        </div><!-- end menu 1 --> 
                    </div><!-- end container --> 
                </div><!-- / menu-wrapper -->
            </div><!-- end header -->