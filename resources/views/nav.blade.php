<header id="header">
    
        @if ($errors->any())
        <div id="error-message" style="width: 100%; padding: 5px; height: 30px; background-color: red; color: white; text-align:center; display: flex; justify-content:center">
        @foreach ($errors->all() as $error)
        <ul>
            <li>{{$error}}</li>
        </ul>
        @endforeach
    </div>
    @endif


    @if (Session::has('added'))
    <div id="error-message" style="width: 100%; padding: 5px; height: 30px; background-color: #1D976C; color: white; text-align:center; display: flex; justify-content:center">
        {{Session::get('added')}}
    </div>
    @endif
    
    <div class="header_top">
        <!--header_top--> 
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li>
                                <a href="#"
                                    ><i class="fa fa-phone"></i> 0721 643 786</a
                                >
                            </li>
                            <li>
                                <a href="#"
                                    ><i class="fa fa-envelope"></i>
                                    sales@importpartske.com</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/"
                            ><img src="images/home/logo.png" alt=""
                        /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#"
                                    ><i class="fa fa-user"></i> Account</a
                                >
                            </li>
                            <li>
                                <a href="#"
                                    ><i class="fa fa-star"></i> Wishlist</a
                                >
                            </li>
                            <li>
                                <a href=""
                                    ><i class="fa fa-crosshairs"></i>
                                    Checkout</a
                                >
                            </li>
                            <li>
                                <a href="{{url('/payment/checkout')}}"
                                    ><i class="fa fa-shopping-cart"></i> Cart</a
                                >
                            </li>
                            <li>
                                <a href=""><i class="fa fa-lock"></i> Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button
                            type="button"
                            class="navbar-toggle"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                        >
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li>
                                <a href="/" class="active">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <form action="/search" method="GET">
                    <div class="input-group">
                    <div class="search_box pull-right">
                        <input type="text" name="search" class="form-control" placeholder="Search" />
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</header>
