<header id="header" class="header-two">
    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">

                        <div class="logo">
                            <a class="d-block" href="{{ route('home') }}">
                                <img loading="lazy" src="{{ asset('front_ui/images/logo.png') }}" alt="Constra">
                            </a>
                        </div><!-- logo end -->

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav ml-auto align-items-center">
                                <li class="nav-item dropdown active">
                                    <a href="{{ route('home') }}" class="nav-link dropdown-toggle"
                                        data-toggle="dropdown">Home</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle"
                                        data-toggle="dropdown">Packages<i class="fa fa-angle-down"></i></a>
                                                        <ul class="dropdown-menu" role="menu">
                                        
                                       
                                        <li><a href="{{ route('allPackages') }}">All Packages</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Orders
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('myOrders') }}">My Orders</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Contact us <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('message') }}">Message To Admin</a></li>
                                        
                                    </ul>
                                </li>
                                @auth
                                    @if (Auth::user()->role == 'customer')
                                        @php
                                            $profile = App\Models\Customer::where('user_id', Auth::user()->id)->first();
                                        @endphp
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle"
                                                data-toggle="dropdown">{{ $profile->name }} <i
                                                    class="fa fa-angle-down"></i></a>
                                            

                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{ route('profile') }}">Profile</a></li>
                                                <li><a href="{{ route('customer.logout') }}">Logout</a></li>
                                            </ul>
                                        </li>
                                        <img src="{{ asset('images/customer/'.$profile->image) }}" style="width: 50px;border-radius:40px" alt="" srcset="">
                                    @endif
                                @else
                                    <li class="header-get-a-quote">
                                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
