<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">

    <link rel="stylesheet" href="/Index/css/materialize.css">
    <link rel="stylesheet" href="/Index/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Index/css/normalize.css">
    <link rel="stylesheet" href="/Index/css/owl.carousel.css">
    <link rel="stylesheet" href="/Index/css/owl.theme.css">
    <link rel="stylesheet" href="/Index/css/owl.transitions.css">
    <link rel="stylesheet" href="/Index/css/fakeLoader.css">
    <link rel="stylesheet" href="/Index/css/animate.css">
    <link rel="stylesheet" href="/Index/css/style.css">
    <link rel="shortcut icon" href="/Index/img/favicon.png">
    <link rel="stylesheet" href="/Index/css/aliplayer-min.css">
    <link rel="stylesheet" href="https://g.alicdn.com/de/prismplayer/2.8.8/skins/default/aliplayer-min.css" />
    <script type="text/javascript" charset="utf-8" src="https://g.alicdn.com/de/prismplayer/2.8.8/aliplayer-min.js"></script>
    <script src="/Index/js/jscookie.min.js"></script>
    <script src="/Index/js/init.js"></script>

    <script src="/Index/js/jquery.min.js"></script>


</head>
<body>

<!-- navbar top -->
<div class="navbar-top">
    <!-- site brand	 -->
    <div class="site-brand">
        <a href="{{url('/')}}"><h1>Mstore</h1></a>
    </div>
    <!-- end site brand	 -->
{{--    <div class="side-nav-panel-right">--}}
{{--        <a href="#" data-activates="slide-out-right" class="side-nav-left"><i class="fa fa-user"></i></a>--}}
{{--    </div>--}}
</div>
<!-- end navbar top -->

<!-- side nav right-->
<div class="side-nav-panel-right">
    <?php if (!empty(session('user'))){ ?>
    <ul id="slide-out-right" class="side-nav side-nav-panel collapsible">
        <li class="profil">
            <img src="/Index/img/profile.jpg" alt="">
            <h2>&nbsp;&nbsp;{{(session('user')['user_name']?'':session('user')['user_autner'])}}</h2>
        </li>
        <li><a href="{{url('index/setting')}}"><i class="fa fa-cog"></i>个人信息</a></li>
        <li><a href="{{url('index/about_us')}}"><i class="fa fa-user"></i>About Us</a></li>
        <li><a href="{{url('index/contact')}}"><i class="fa fa-envelope-o"></i>联系客服</a></li>
        <li><a href="{{url('/quit')}}"><i class="fa fa-sign-in"></i>退出</a></li>
    </ul>
    <?php }else{?>
        <ul id="slide-out-right" class="side-nav side-nav-panel collapsible">
            <li class="profil">
                <img src="/Index/img/profile.jpg" alt="">
            </li>
            <li>请，<a href="{{url('/login')}}"><i class="fa fa-sign-in"></i>登录</a></li>
            <li><a href="{{url('/register')}}"><i class="fa fa-user-plus"></i>注册</a></li>
        </ul>
    <?php }?>
</div>
<!-- end side nav right-->

<!-- navbar bottom -->
<div class="navbar-bottom">
    <div class="row">
        <div class="col s2">
            <a href="{{url('/')}}"><i class="fa fa-home"></i></a>
        </div>
        <div class="col s2">
            <a href="{{url('/wishlist')}}"><i class="fa fa-heart"></i></a>
        </div>
        <div class="col s4">
            <div class="bar-center">
                <a href="{{url('cart/index')}}"><i class="fa fa-shopping-basket"></i></a>
                <span>2</span>
            </div>
        </div>
        <div class="col s2">
            <a href="{{url('/index/contact')}}"><i class="fa fa-envelope-o"></i></a>
        </div>
        <div class="col s2">
            <a href="#animatedModal2" id="nav-menu"><i class="fa fa-bars"></i></a>
        </div>
    </div>
</div>
<!-- end navbar bottom -->

<!-- menu -->
<div class="menus" id="animatedModal2">
    <div class="close-animatedModal2 close-icon">
        <i class="fa fa-close"></i>
    </div>
    <div class="modal-content">
        <div class="container">
            <div class="row">
                <div class="col s4">
                    <a href="{{url('/')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-home"></i>
                            </div>
                            Home
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="{{url('/product_list')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-bars"></i>
                            </div>
                            Product List
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="{{url('index/shop_single')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-eye"></i>
                            </div>
                            Single Shop
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s4">
                    <a href="{{url('/index/wishlist')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-heart"></i>
                            </div>
                            Wishlist
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="{{url('cart/index')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            Cart
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="{{url('index/checkout')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-credit-card"></i>
                            </div>
                            Checkout
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s4">
                    <a href="{{url('index/blog')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-bold"></i>
                            </div>
                            Blog
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="{{url('index/blog_single')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-file-text-o"></i>
                            </div>
                            Blog Single
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="{{url('index/error_404')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-hourglass-half"></i>
                            </div>
                            404
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s4">
                    <a href="{{url('index/testimonial')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-support"></i>
                            </div>
                            Testimonial
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="{{url('index/about_us')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            About Us
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="{{url('index/contact')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            Contact
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s4">
                    <a href="{{url('index/setting')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-cog"></i>
                            </div>
                            Settings
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="{{url('/login')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-sign-in"></i>
                            </div>
                            Login
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="{{url('/register')}}" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-user-plus"></i>
                            </div>
                            Register
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end menu -->

<!-- cart menu -->
<div class="menus" id="animatedModal">
    <div class="close-animatedModal close-icon">
        <i class="fa fa-close"></i>
    </div>
    <div class="modal-content">
        <div class="cart-menu">
            <div class="container">
                <div class="content">

                    <div class="cart-1">
                        <div class="row">
                            <div class="col s5">
                                <img src="/Index/img/cart-menu1.png" alt="">
                            </div>
                            <div class="col s7">
                                <h5><a href="">Fashion Men's</a></h5>
                            </div>
                        </div>
                        <div class="row quantity">
                            <div class="col s5">
                                <h5>Quantity</h5>
                            </div>
                            <div class="col s7">
                                <input value="1" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s5">
                                <h5>Price</h5>
                            </div>
                            <div class="col s7">
                                <h5>$20</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s5">
                                <h5>Action</h5>
                            </div>
                            <div class="col s7">
                                <div class="action"><i class="fa fa-trash"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>

                </div>
                <div class="total">
                    <div class="row">
                        <div class="col s7">
                            <h5>Fashion Men's</h5>
                        </div>
                        <div class="col s5">
                            <h5>$21.00</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s7">
                            <h5>Fashion Men's</h5>
                        </div>
                        <div class="col s5">
                            <h5>$21.00</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s7">
                            <h6>Total</h6>
                        </div>
                        <div class="col s5">
                            <h6>$41.00</h6>
                        </div>
                    </div>
                </div>
                <button class="btn button-default">Process to Checkout</button>
            </div>
        </div>
    </div>
</div>
<!-- end cart menu -->

<!-- content -->
@yield('content')
<!-- end content -->

<!-- loader -->
<div id="fakeLoader"></div>
<!-- end loader -->

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="about-us-foot">
            <h6>Mstore</h6>
            <p>is a lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>
        </div>
        <div class="social-media">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-google"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
        </div>
        <div class="copyright">
            <span>© 2017 All Right Reserved</span>
        </div>
    </div>
</div>
<!-- end footer -->

<!-- scripts -->
<script src="/Index/js/materialize.min.js"></script>
<script src="/Index/js/owl.carousel.min.js"></script>
<script src="/Index/js/fakeLoader.min.js"></script>
<script src="/Index/js/animatedModal.min.js"></script>
<script src="/Index/js/main.js"></script>
<script src="/Index/js/js.cookie-2.2.1.min.js"></script>

</body>
</html>
