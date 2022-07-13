<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="icon" type="image/png" sizes="56x56" href="{{asset('front/images/favicon.ico')}}">
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

    <!-- ===================================================
        Loading Transition
    ==================================================== -->
    <!-- Preloader -->
{{--    <section>--}}
{{--        <div id="preloader">--}}
{{--            <div id="ctn-preloader" class="ctn-preloader">--}}
{{--                <div class="animation-preloader">--}}
{{--                    <div class="spinner"></div>--}}
{{--                    <div class="txt-loading">--}}
{{--								<span data-text-preloader="R" class="letters-loading">--}}
{{--									R--}}
{{--								</span>--}}
{{--                        <span data-text-preloader="O" class="letters-loading">--}}
{{--									O--}}
{{--								</span>--}}
{{--                        <span data-text-preloader="G" class="letters-loading">--}}
{{--									G--}}
{{--								</span>--}}
{{--                        <span data-text-preloader="A" class="letters-loading">--}}
{{--									A--}}
{{--								</span>--}}
{{--                        <span data-text-preloader="N" class="letters-loading">--}}
{{--									N--}}
{{--								</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <!--
    =============================================
        Theme Main Menu
    ==============================================
    -->
    <div class="theme-main-menu theme-menu-one">
        <div class="logo"><a href="index.html"><img src="{{asset('front/images/logo.png')}}" alt=""></a></div>
        <nav id="mega-menu-holder" class="navbar navbar-expand-lg">
            <div  class="container nav-container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="flaticon-setup"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <?php
                            $pages = \App\Models\Pages::orderBy('is_main_page','desc')->get();
                        ?>
                        @foreach($pages as $page)
                            <li class="nav-item @if(request()->segment(0) == $page->slug) active @endif @if($page->is_main_page == 1 && request()->segment(0) == '') active @endif" >
                                    <a href="{{url($page->slug)}}" class="nav-link">{{$page->name}}.</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div> <!-- /.container -->
        </nav> <!-- /#mega-menu-holder -->
        <div class="header-right-widget">
            <ul>
                @if (Auth::guard('web')->check())
                    <li><a href="{{route('front.logout')}}" class="contact-us white-shdw-button">{{ Auth::guard('web')->user()->name  }} (Logout) <i class="icon flaticon-user"></i></a></li>
                 @else
                    <li><a href="{{route('front.login')}}" class="contact-us white-shdw-button">Login<i class="icon flaticon-user"></i></a></li>
                 @endif

            </ul>
        </div> <!-- /.header-right-widget -->
    </div> <!-- /.theme-main-menu -->

    @yield('content')


    <!--
    =====================================================
        Footer
    =====================================================
    -->
    <footer class="theme-footer-one">
        <div class="shape-one" data-aos="zoom-in-right"></div>
        <img src="{{asset('front/images/shape/shape-67.svg')}}" alt="" class="shape-two">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12 about-widget" data-aos="fade-up">
                        <a href="#" class="logo"><img src="{{asset('front/images/logo.png')}}" alt=""></a>
                        <a href="#" class="email">boga.inc@company.com</a>
                        <a href="#" class="phone">720.661.2231</a>

                    </div> <!-- /.about-widget -->
                    <div class="col-lg-3 col-lg-3 col-sm-6 col-12 footer-list" data-aos="fade-up">
                        <h5 class="title">Services</h5>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Online Marketing</a></li>
                            <li><a href="#">Content</a></li>
                        </ul>
                    </div> <!-- /.footer-recent-post -->
                    <div class="col-lg-3 col-sm-6 col-12 footer-list" data-aos="fade-up">
                        <h5 class="title">About us</h5>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Work Portfolio</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Plan & Pricing</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div> <!-- /.footer-list -->
                    <div class="col-lg-3 col-lg-2 col-sm-6 col-12 footer-information" data-aos="fade-up">
                        <h5 class="title">Our Address</h5>
                        <p>00 Orville Road Apt. 728 <br>California, USA</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-footer -->

        <div class="container">
            <div class="bottom-footer">
                <div class="clearfix">
                    <p>&copy; 2019 copyright all right reserved</p>
                    <ul>
                        <li><a href="#">Privace & Policy.</a></li>
                        <li><a href="faq.html">Faq.</a></li>
                        <li><a href="#">Terms.</a></li>
                    </ul>
                </div>
            </div> <!-- /.bottom-footer -->
        </div>
    </footer> <!-- /.theme-footer-one -->




    <!-- Scroll Top Button -->
    <button class="scroll-top tran3s">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </button>



    <!-- Optional JavaScript _____________________________  -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- jQuery -->
    <script src="{{asset('front/vendor/jquery.2.2.3.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('front/vendor/popper.js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- menu  -->
    <script src="{{asset('front/vendor/mega-menu/assets/js/custom.js')}}"></script>
    <!-- AOS js -->
    <script src="{{asset('front/vendor/aos-next/dist/aos.js')}}"></script>
    <!-- WOW js -->
    <script src="{{asset('front/vendor/WOW-master/dist/wow.min.js')}}"></script>
    <!-- owl.carousel -->
    <script src="{{asset('front/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
    <!-- js count to -->
    <script src="{{asset('front/vendor/jquery.appear.js')}}"></script>
    <script src="{{asset('front/vendor/jquery.countTo.js')}}"></script>
    <!-- Fancybox -->
    <script src="{{asset('front/vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <!-- Theme js -->
    <script src="{{asset('front/js/lang.js')}}"></script>
    <script src="{{asset('front/js/theme.js')}}"></script>

    @yield('script')
</div> <!-- /.main-page-wrapper -->
</body>
</html>
