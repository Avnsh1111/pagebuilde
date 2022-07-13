<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="copyright" content="&ampcopy;  2022 Limkokwing University of Creative Technology. All Rights Reserved." />
    <meta name="keywords" content="limkokwing, limkokwing university, top universities in malaysia, international university in malaysia, private university in malaysia, study at limkokwing, limkokwing university courses, limkokwing global classroom, limkokwing global campus, global university campus, student life at limkokwing university malaysia, best universities in malaysia" />
    <meta name="robots" content="index,follow" />
    <meta name="google-translate-customization" content="ffb2d2f886941cfe-630375d41001e19b-gc10449c3b881fbd1-d" />
    <meta name="description" content="Limkokwing University is a private Malaysian university that offers accredited and recognised diploma, degree and postgraduate programmes." />
    <meta property='og:description' content='Limkokwing University is a private Malaysian university founded in 1991. It offers accredited and recognised diploma, degree and postgraduate courses.'/>
    <meta property="og:url" content="https://www.limkokwing.net/malaysia" />
    <meta property='og:site_name' content='Limkokwing University'/>
    <meta property='og:type' content='website'/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@limkokwing_my">
    <meta name="twitter:creator" content="@limkokwing_my">
    <meta name="twitter:title" content="">
    <meta name='twitter:description' content='Limkokwing University is a private Malaysian university founded in 1991. It offers accredited and recognised diploma, degree and postgraduate courses.'/>
    <meta name="twitter:image:src" content="">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#233D63">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#233D63">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#233D63">
    <title>Limkokwing University of Creative Technology</title>
    <!-- Favicon -->
    <link rel="icon shortcut" type="image/png" sizes="56x56" href="{{asset('front/images/favicon.ico')}}">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/responsive.css')}}">

    <!-- Fix Internet Explorer ______________________________________-->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{asset('front/vendor/html5shiv.js')}}"></script>
    <script src="{{asset('front/vendor/respond.js')}}"></script>
    <![endif]-->
</head>

<body>
<div class="main-page-wrapper">


    <!--
    =============================================
        Sidebar Menu
    ==============================================
    -->
    <div id="sidebar-menu" class="eCommerce-side-menu">
        <div class="inner-wrapper">
            <div class="logo-wrapper">
                <button class="close-button"><img src="{{asset('front/images/icon/icon43.svg')}}" alt=""></button>
                <img src="{{asset('front/images/logo.png')}}" alt="">
            </div>

            <div class="main-menu-list">
                <ul>
                    <?php
                    $pages = \App\Models\Pages::orderBy('is_main_page','desc')->get();
                    ?>
                    @foreach($pages as $page)
                            <li><a href="{{url($page->slug)}}">{{$page->name}}.</a></li>
                    @endforeach

                </ul>
            </div>
            <form action="#" class="eCommerce-search">
                <input type="text" placeholder="Search here">
                <i class="fa fa-search icon" aria-hidden="true"></i>
            </form>
            <p class="copy-right">&copy; 2022  All Right Reserved</p>
        </div> <!-- /.inner-wrapper -->
    </div> <!-- #sidebar-menu -->


    <!--
    =============================================
        Theme E-Commerce Menu
    ==============================================
    -->
    <div class="theme-Ecommerce-menu">
        <div class="d-flex justify-content-between align-items-center">
            <div class="left-content">
                <ul>
                    <li>
                        <button class="menu-button sidebar-menu-open"><img src="{{asset('front/images/logo/menu.svg')}}" alt=""></button>
                    </li>
{{--                    <li class="logo"><a href="index.html"><img src="{{asset('front/images/logo/logo5.svg')}}" alt=""></a></li>--}}
                </ul>
            </div> <!-- /.left-content -->

{{--            <div class="right-content">--}}
{{--                <ul>--}}
{{--                    <li class="action-list-item cart-action-wrapper">--}}
{{--                        <div class="dropdown">--}}
{{--                            <button class="dropdown-toggle" data-toggle="dropdown">--}}
{{--                                <img src="{{asset('front/images/icon/icon37.svg')}}" alt="">--}}
{{--                                <span class="item-count">02</span>--}}
{{--                            </button>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                <ul class="cart-product-list">--}}
{{--                                    <li class="clearfix selected-item">--}}
{{--                                        <a href="#" class="item-img"><img src="{{asset('front/images/shop/1.png')}}" alt=""></a>--}}
{{--                                        <div class="item-info">--}}
{{--                                            <a href="#" class="name">Blue Fery.</a>--}}
{{--                                            <div class="price">$38.00 <span class="quantity">x 1</span></div>--}}
{{--                                            <a href="#" class="close"><i class="fa fa-window-close" aria-hidden="true"></i></a>--}}
{{--                                        </div> <!-- /.item-info -->--}}
{{--                                    </li> <!-- /.selected-item -->--}}
{{--                                    <li class="clearfix selected-item">--}}
{{--                                        <a href="#" class="item-img"><img src="{{asset('front/images/shop/2.png')}}" alt=""></a>--}}
{{--                                        <div class="item-info">--}}
{{--                                            <a href="#" class="name">Vibrant Shoe.</a>--}}
{{--                                            <div class="price">$125.00 <span class="quantity">x 1</span></div>--}}
{{--                                            <a href="#" class="close"><i class="fa fa-window-close" aria-hidden="true"></i></a>--}}
{{--                                        </div> <!-- /.item-info -->--}}
{{--                                    </li> <!-- /.selected-item -->--}}
{{--                                </ul> <!-- /.cart-product-list -->--}}
{{--                                <div class="subtotal d-flex justify-content-between align-items-center">--}}
{{--                                    <div class="title">Subtotal</div>--}}
{{--                                    <div class="total-price">$163.00</div>--}}
{{--                                </div>--}}
{{--                                <ul class="button-group">--}}
{{--                                    <li><a href="cart.html" class="view-cart">View Cart</a></li>--}}
{{--                                    <li><a href="checkout.html" class="checkout">Checkout</a></li>--}}
{{--                                </ul>--}}
{{--                            </div> <!-- /.dropdown-menu -->--}}
{{--                        </div>--}}
{{--                    </li> <!-- /.cart-action-wrapper -->--}}
{{--                    <li class="action-list-item user-profile-action">--}}
{{--                        <div class="dropdown">--}}
{{--                            <button class="dropdown-toggle" data-toggle="dropdown">--}}
{{--                                <img src="{{asset('front/images/icon/icon38.svg')}}" alt="">--}}
{{--                                <span>Account</span>--}}
{{--                            </button>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#"><img src="{{asset('front/images/icon/icon39.svg')}}" alt="" class="icon svg"> My Profile</a></li>--}}
{{--                                    <li><a href="#"><img src="{{asset('front/images/icon/icon40.svg')}}" alt="" class="icon svg"> Settings</a></li>--}}
{{--                                    <li><a href="#"><img src="{{asset('front/images/icon/icon42.svg')}}" alt="" class="icon svg"> Billing Address</a></li>--}}
{{--                                    <li><a href="#"><img src="{{asset('front/images/icon/icon41.svg')}}" alt="" class="icon svg"> Wishlist</a></li>--}}
{{--                                </ul>--}}
{{--                            </div> <!-- /.dropdown-menu -->--}}
{{--                        </div>--}}
{{--                    </li> <!-- /.user-profile-action -->--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div> <!-- /.theme-Ecommerce-menu -->



    <!--
    =============================================
        Signup Page
    ==============================================
    -->
    <div class="signUp-page signUp-standard pt-50 pb-100">
{{--        <div class="shape-wrapper">--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--        </div> <!-- /.shape-wrapper -->--}}
        <div class="signUp-illustration"><img src="{{asset('front/images/new-bg.png')}}" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ml-auto">
                    <div class="signin-form-wrapper">
                        <div class="title-area">
                            <h3>Login.</h3>
                        </div> <!-- /.title-area -->

                        @if(count($errors) > 0 )
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <ul class="p-0 m-0" style="list-style: none;">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <ul class="p-0 m-0" style="list-style: none;">
                                    <li>{{session()->get('success')}}</li>
                                </ul>
                            </div>
                        @endif

                        @if(session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <ul class="p-0 m-0" style="list-style: none;">
                                    <li>{{session()->get('error')}}</li>
                                </ul>
                            </div>
                        @endif

                        <ul class="social-icon-wrapper row mb-lg-4">
                            <li class="col-4"><a href="{{route('front.login.google')}}" class="gmail"><i class="fa fa-envelope-o" aria-hidden="true"></i> Gmail</a></li>
                            <li class="col-4"><a href="{{route('front.login.otp')}}" class="facebook"><i class="fa fa-mobile-phone" aria-hidden="true"></i> Login With OTP</a></li>
                        </ul>

                        <div class="row text-center mb-lg-4">
                            <h5 class="pd-header col-9">--- OR ---</h5>
                        </div>

                        <form action="{{route('front.login.check')}}" id="login-form" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group">
                                        <input type="email" name="email" required>
                                        <label>Email</label>
                                    </div> <!-- /.input-group -->
                                </div> <!-- /.col- -->
                                <div class="col-12">
                                    <div class="input-group">
                                        <input type="password" name="password" required>
                                        <label>Password</label>
                                    </div> <!-- /.input-group -->
                                </div> <!-- /.col- -->
                            </div> <!-- /.row -->
                            <div class="agreement-checkbox d-flex justify-content-between align-items-center">
                                <div>
                                    <input type="checkbox" name="remember" id="remember">
                                    <label for="remember">Remember Me</label>
                                </div>
{{--                                <a href="#">Forget Password?</a>--}}
                            </div>
                            <button class="solid-button-one">Login</button>
                        </form>
                        <p class="signUp-text">Don’t have any account? <a href="{{route('front.signup')}}">Sign up</a> now.</p>
                    </div> <!-- /.signin-form-wrapper -->
                </div>
            </div>
        </div>
    </div> <!-- /.signUp-page -->









    <!-- Optional JavaScript _____________________________  -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- jQuery -->
    <script src="{{asset('front/vendor/jquery.2.2.3.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('front/vendor/popper.js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- js ui -->
    <script src="{{asset('front/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Select js -->
    <script src="{{asset('front/vendor/selectize.js/selectize.min.js')}}"></script>


    <!-- Language js -->
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <!-- Theme js -->
    <script src="{{asset('front/js/lang.js')}}"></script>
    <script src="{{asset('front/js/theme.js')}}"></script>
</div> <!-- /.main-page-wrapper -->
</body>
</html>
