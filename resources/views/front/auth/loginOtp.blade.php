<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services">
    <meta name="author" content="creativegigs">
    <meta name="description" content="Rogan creative multipurpose is a beautiful website template designed for SEO & Digital Agency websites.">
    <meta name='og:image' content='images/home/ogg.png'>
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
    <title>Rogan - Creative Multi-Purpose HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{asset('front/images/fav-icon/icon.png')}}">
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
                <img src="{{asset('front/images/logo/logo5.svg')}}" alt="">
            </div>

            <div class="main-menu-list">
                <ul>
                    <li><a href="index-eCommerce.html">Home</a></li>
                    <li><a href="about-us-standard.html">About us</a></li>
                    <li><a href="features.html">Features</a></li>
                    <li class="dropdown-holder">
                        <a href="#">Pages<button type="button" class="expander"><i class="fa fa-chevron-down" aria-hidden="true"></i></button></a>
                        <ul class="sub-menu">
                            <li><a href="service-creative.html">Services</a></li>
                            <li><a href="project-minimal.html">Portfolio</a></li>
                            <li><a href="blog-filter.html">Blog</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us-minimal.html">Contact</a></li>
                </ul>
            </div>
            <form action="#" class="eCommerce-search">
                <input type="text" placeholder="Search here">
                <i class="fa fa-search icon" aria-hidden="true"></i>
            </form>
            <p class="copy-right">&copy; 2019  All Right Reserved</p>
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
                    <li class="logo"><a href="index.html"><img src="{{asset('front/images/logo/logo5.svg')}}" alt=""></a></li>
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
        <div class="shape-wrapper">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div> <!-- /.shape-wrapper -->
        <div class="signUp-illustration"><img src="{{asset('front/images/home/sign-up.svg')}}" alt=""></div>
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

                        <div class="alert alert-danger alert-dismissible fade show" id="errMsgBlock" role="alert" style="display: none">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul class="p-0 m-0" style="list-style: none;">
                                <li id="errMsg"></li>
                            </ul>
                        </div>

                        <ul class="social-icon-wrapper row mb-lg-4">
                            <li class="col-4"><a href="{{route('front.login.google')}}" class="gmail"><i class="fa fa-envelope-o" aria-hidden="true"></i> Gmail</a></li>
                            <li class="col-4"><a href="{{route('front.login')}}" class="facebook"><i class="fa fa-mail-forward" aria-hidden="true"></i> Login With Email</a></li>
                        </ul>

                        <div class="row text-center mb-lg-4">
                            <h5 class="pd-header col-9">--- OR ---</h5>
                        </div>

                        <form action="{{route('front.login.checkOtp')}}" id="login-form" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" name="mobile_no" id="mobile_no" required>
                                        <label>Mobile No (with country code)</label>
                                    </div> <!-- /.input-group -->
                                </div> <!-- /.col- -->
                                <div class="col-4">
                                    <div class="input-group mt-4">
                                        <button class="btn btn-primary" type="button" id="sendOtp">Send OTP</button>
                                    </div> <!-- /.input-group -->
                                </div> <!-- /.col- -->
                            </div> <!-- /.row -->
                            <div class="row">
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" name="otp" required>
                                        <label>Enter OTP</label>
                                    </div> <!-- /.input-group -->
                                </div> <!-- /.col- -->
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

    <script type="text/javascript">
        $('body').on('click',"#sendOtp",function(event){
            event.preventDefault();

            if($('#mobile_no').val() == '') {
                $("#errMsg").text("Please enter mobile no.");
                $("#errMsgBlock").show();
                return false;
            }
            $("#sendOtp").text("Sending...");
            $("#sendOtp").attr("disabled","disabled");
            $.ajax({
                url: "{{ route('front.login.sendOtp') }}",
                method: 'post',
                dataType :'json',
                data: {
                    mobile_no: $('#mobile_no').val(),
                    _token : '{{ csrf_token() }}'
                },
                success: function(result){
                    if(result.status) {
                        $("#sendOtp").text("Sent");
                        setTimeout(function () {
                            $("#sendOtp").removeAttr("disabled");
                            $("#sendOtp").text("Send OTP");
                        }, 3000);
                    } else {
                        if(result.code == 404) {
                            $("#errMsg").text("User not found.");
                        }

                        if(result.code == 500) {
                            $("#errMsg").text("Something went wrong.");
                        }

                        $("#errMsgBlock").show();
                    }

                }
            });
        });
    </script>
</div> <!-- /.main-page-wrapper -->
</body>
</html>
