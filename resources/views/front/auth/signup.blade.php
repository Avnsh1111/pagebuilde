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
<!-- /.theme-Ecommerce-menu -->

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
    </div>

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
        <div class="signUp-illustration"><img src="{{asset('front/images/new-bg.png')}}" width="" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ml-auto">
                    <div class="sign-up-form-wrapper">
                        <div class="title-area">
                            <h3>Signup Now!</h3>
                            <p>Please give us a few more details and we’ll add you to  our early access list.</p>
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
                        <ul class="social-icon-wrapper row">
                            <li class="col-12"><a href="{{route('front.login.google')}}" class="gmail"><i class="fa fa-envelope-o" aria-hidden="true"></i> Gmail</a></li>
                        </ul>
                        <p class="or-text"><span>or</span></p>

                        <form action="{{route('front.signup.submit')}}" id="signUp-form" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="name" value="{{old('name')}}" required>
                                        <label>Full Name</label>
                                    </div> <!-- /.input-group -->
                                </div> <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="email" name="email" value="{{old('email')}}" required>
                                        <label>Email</label>
                                    </div> <!-- /.input-group -->
                                </div> <!-- /.col- -->
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="text" name="mobile_no" value="{{old('mobile_no')}}" required>
                                        <label>Mobile No</label>
                                    </div> <!-- /.input-group -->
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="password" name="password" required>
                                        <label>Password</label>
                                    </div> <!-- /.input-group -->
                                </div> <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select class="theme-select-menu" name="country">
                                            <option value="">Country*</option>
                                            <option value="AF" @if(old('country')=='AF') selected @endif>Afghanistan</option>
                                            <option value="AX" @if(old('country')=='AX') selected @endif>&Aring;land Islands</option>
                                            <option value="AL" @if(old('country')=='AL') selected @endif>Albania</option>
                                            <option value="DZ" @if(old('country')=='DZ') selected @endif>Algeria</option>
                                            <option value="AS" @if(old('country')=='AS') selected @endif>American Samoa</option>
                                            <option value="AD" @if(old('country')=='AD') selected @endif>Andorra</option>
                                            <option value="AO" @if(old('country')=='AO') selected @endif>Angola</option>
                                            <option value="AI" @if(old('country')=='AI') selected @endif>Anguilla</option>
                                            <option value="AQ" @if(old('country')=='AQ') selected @endif>Antarctica</option>
                                            <option value="AG" @if(old('country')=='AG') selected @endif>Antigua and Barbuda</option>
                                            <option value="AR" @if(old('country')=='AR') selected @endif>Argentina</option>
                                            <option value="AM" @if(old('country')=='AM') selected @endif>Armenia</option>
                                            <option value="AW" @if(old('country')=='AW') selected @endif>Aruba</option>
                                            <option value="AU" @if(old('country')=='AU') selected @endif>Australia</option>
                                            <option value="AT" @if(old('country')=='AT') selected @endif>Austria</option>
                                            <option value="AZ" @if(old('country')=='AZ') selected @endif>Azerbaijan</option>
                                            <option value="BS" @if(old('country')=='BS') selected @endif>Bahamas</option>
                                            <option value="BH" @if(old('country')=='BH') selected @endif>Bahrain</option>
                                            <option value="BD" @if(old('country')=='BD') selected @endif>Bangladesh</option>
                                            <option value="BB" @if(old('country')=='BB') selected @endif>Barbados</option>
                                            <option value="BY" @if(old('country')=='BY') selected @endif>Belarus</option>
                                            <option value="BE" @if(old('country')=='BE') selected @endif>Belgium</option>
                                            <option value="BZ" @if(old('country')=='BZ') selected @endif>Belize</option>
                                            <option value="BJ" @if(old('country')=='BJ') selected @endif>Benin</option>
                                            <option value="BM" @if(old('country')=='BM') selected @endif>Bermuda</option>
                                            <option value="BT" @if(old('country')=='BT') selected @endif>Bhutan</option>
                                            <option value="BO" @if(old('country')=='BO') selected @endif>Bolivia, Plurinational State of</option>
                                            <option value="BA" @if(old('country')=='BA') selected @endif>Bosnia and Herzegovina</option>
                                            <option value="BW" @if(old('country')=='BW') selected @endif>Botswana</option>
                                            <option value="BV" @if(old('country')=='BV') selected @endif>Bouvet Island</option>
                                            <option value="BR" @if(old('country')=='BR') selected @endif>Brazil</option>
                                            <option value="IO" @if(old('country')=='IO') selected @endif>British Indian Ocean Territory</option>
                                            <option value="BN" @if(old('country')=='BN') selected @endif>Brunei Darussalam</option>
                                            <option value="BG" @if(old('country')=='BG') selected @endif>Bulgaria</option>
                                            <option value="BF" @if(old('country')=='BF') selected @endif>Burkina Faso</option>
                                            <option value="BI" @if(old('country')=='BI') selected @endif>Burundi</option>
                                            <option value="KH" @if(old('country')=='KH') selected @endif>Cambodia</option>
                                            <option value="CM" @if(old('country')=='CM') selected @endif>Cameroon</option>
                                            <option value="CA" @if(old('country')=='CA') selected @endif>Canada</option>
                                            <option value="CV" @if(old('country')=='CV') selected @endif>Cape Verde</option>
                                            <option value="KY" @if(old('country')=='KY') selected @endif>Cayman Islands</option>
                                            <option value="CF" @if(old('country')=='CF') selected @endif>Central African Republic</option>
                                            <option value="TD" @if(old('country')=='TD') selected @endif>Chad</option>
                                            <option value="CL" @if(old('country')=='CL') selected @endif>Chile</option>
                                            <option value="CN" @if(old('country')=='CN') selected @endif>China</option>
                                            <option value="CX" @if(old('country')=='CX') selected @endif>Christmas Island</option>
                                            <option value="CC" @if(old('country')=='CC') selected @endif>Cocos (Keeling) Islands</option>
                                            <option value="CO" @if(old('country')=='CO') selected @endif>Colombia</option>
                                            <option value="KM" @if(old('country')=='KM') selected @endif>Comoros</option>
                                            <option value="CG" @if(old('country')=='CG') selected @endif>Congo</option>
                                            <option value="CD" @if(old('country')=='CD') selected @endif>Congo, the Democratic Republic of the</option>
                                            <option value="CK" @if(old('country')=='CK') selected @endif>Cook Islands</option>
                                            <option value="CR" @if(old('country')=='CR') selected @endif>Costa Rica</option>
                                            <option value="CI" @if(old('country')=='CI') selected @endif>C&ocirc;te d'Ivoire</option>
                                            <option value="HR" @if(old('country')=='HR') selected @endif>Croatia</option>
                                            <option value="CU" @if(old('country')=='CU') selected @endif>Cuba</option>
                                            <option value="CY" @if(old('country')=='CY') selected @endif>Cyprus</option>
                                            <option value="CZ" @if(old('country')=='CZ') selected @endif>Czech Republic</option>
                                            <option value="DK" @if(old('country')=='DK') selected @endif>Denmark</option>
                                            <option value="DJ" @if(old('country')=='DJ') selected @endif>Djibouti</option>
                                            <option value="DM" @if(old('country')=='DM') selected @endif>Dominica</option>
                                            <option value="DO" @if(old('country')=='DO') selected @endif>Dominican Republic</option>
                                            <option value="EC" @if(old('country')=='EC') selected @endif>Ecuador</option>
                                            <option value="EG" @if(old('country')=='EG') selected @endif>Egypt</option>
                                            <option value="SV" @if(old('country')=='SV') selected @endif>El Salvador</option>
                                            <option value="GQ" @if(old('country')=='GQ') selected @endif>Equatorial Guinea</option>
                                            <option value="ER" @if(old('country')=='ER') selected @endif>Eritrea</option>
                                            <option value="EE" @if(old('country')=='EE') selected @endif>Estonia</option>
                                            <option value="ET" @if(old('country')=='ET') selected @endif>Ethiopia</option>
                                            <option value="FK" @if(old('country')=='FK') selected @endif>Falkland Islands (Malvinas)</option>
                                            <option value="FO" @if(old('country')=='FO') selected @endif>Faroe Islands</option>
                                            <option value="FJ" @if(old('country')=='FJ') selected @endif>Fiji</option>
                                            <option value="FI" @if(old('country')=='FI') selected @endif>Finland</option>
                                            <option value="FR" @if(old('country')=='FR') selected @endif>France</option>
                                            <option value="GF" @if(old('country')=='GF') selected @endif>French Guiana</option>
                                            <option value="PF" @if(old('country')=='PF') selected @endif>French Polynesia</option>
                                            <option value="TF" @if(old('country')=='TF') selected @endif>French Southern Territories</option>
                                            <option value="GA" @if(old('country')=='GA') selected @endif>Gabon</option>
                                            <option value="GM" @if(old('country')=='GM') selected @endif>Gambia</option>
                                            <option value="GE" @if(old('country')=='GE') selected @endif>Georgia</option>
                                            <option value="DE" @if(old('country')=='DE') selected @endif>Germany</option>
                                            <option value="GH" @if(old('country')=='GH') selected @endif>Ghana</option>
                                            <option value="GI" @if(old('country')=='GI') selected @endif>Gibraltar</option>
                                            <option value="GR" @if(old('country')=='GR') selected @endif>Greece</option>
                                            <option value="GL" @if(old('country')=='GL') selected @endif>Greenland</option>
                                            <option value="GD" @if(old('country')=='GD') selected @endif>Grenada</option>
                                            <option value="GP" @if(old('country')=='GP') selected @endif>Guadeloupe</option>
                                            <option value="GU" @if(old('country')=='GU') selected @endif>Guam</option>
                                            <option value="GT" @if(old('country')=='GT') selected @endif>Guatemala</option>
                                            <option value="GG" @if(old('country')=='GG') selected @endif>Guernsey</option>
                                            <option value="GN" @if(old('country')=='GN') selected @endif>Guinea</option>
                                            <option value="GW" @if(old('country')=='GW') selected @endif>Guinea-Bissau</option>
                                            <option value="GY" @if(old('country')=='GY') selected @endif>Guyana</option>
                                            <option value="HT" @if(old('country')=='HT') selected @endif>Haiti</option>
                                            <option value="HM" @if(old('country')=='HM') selected @endif>Heard Island and McDonald Islands</option>
                                            <option value="VA" @if(old('country')=='VA') selected @endif>Holy See (Vatican City State)</option>
                                            <option value="HN" @if(old('country')=='HN') selected @endif>Honduras</option>
                                            <option value="HK" @if(old('country')=='HK') selected @endif>Hong Kong</option>
                                            <option value="HU" @if(old('country')=='HU') selected @endif>Hungary</option>
                                            <option value="IS" @if(old('country')=='IS') selected @endif>Iceland</option>
                                            <option value="IN" @if(old('country')=='IN') selected @endif>India</option>
                                            <option value="ID" @if(old('country')=='ID') selected @endif>Indonesia</option>
                                            <option value="IR" @if(old('country')=='IR') selected @endif>Iran, Islamic Republic of</option>
                                            <option value="IQ" @if(old('country')=='IQ') selected @endif>Iraq</option>
                                            <option value="IE" @if(old('country')=='IE') selected @endif>Ireland</option>
                                            <option value="IM" @if(old('country')=='IM') selected @endif>Isle of Man</option>
                                            <option value="IL" @if(old('country')=='IL') selected @endif>Israel</option>
                                            <option value="IT" @if(old('country')=='IT') selected @endif>Italy</option>
                                            <option value="JM" @if(old('country')=='JM') selected @endif>Jamaica</option>
                                            <option value="JP" @if(old('country')=='JP') selected @endif>Japan</option>
                                            <option value="JE" @if(old('country')=='JE') selected @endif>Jersey</option>
                                            <option value="JO" @if(old('country')=='JO') selected @endif>Jordan</option>
                                            <option value="KZ" @if(old('country')=='KZ') selected @endif>Kazakhstan</option>
                                            <option value="KE" @if(old('country')=='KE') selected @endif>Kenya</option>
                                            <option value="KI" @if(old('country')=='KI') selected @endif>Kiribati</option>
                                            <option value="KP" @if(old('country')=='KP') selected @endif>Korea, Democratic People's Republic of</option>
                                            <option value="KR" @if(old('country')=='KR') selected @endif>Korea, Republic of</option>
                                            <option value="KW" @if(old('country')=='KW') selected @endif>Kuwait</option>
                                            <option value="KG" @if(old('country')=='KG') selected @endif>Kyrgyzstan</option>
                                            <option value="LA" @if(old('country')=='LA') selected @endif>Lao People's Democratic Republic</option>
                                            <option value="LV" @if(old('country')=='LV') selected @endif>Latvia</option>
                                            <option value="LB" @if(old('country')=='LB') selected @endif>Lebanon</option>
                                            <option value="LS" @if(old('country')=='LS') selected @endif>Lesotho</option>
                                            <option value="LR" @if(old('country')=='LR') selected @endif>Liberia</option>
                                            <option value="LY" @if(old('country')=='LY') selected @endif>Libyan Arab Jamahiriya</option>
                                            <option value="LI" @if(old('country')=='LI') selected @endif>Liechtenstein</option>
                                            <option value="LT" @if(old('country')=='LT') selected @endif>Lithuania</option>
                                            <option value="LU" @if(old('country')=='LU') selected @endif>Luxembourg</option>
                                            <option value="MO" @if(old('country')=='MO') selected @endif>Macao</option>
                                            <option value="MK" @if(old('country')=='MK') selected @endif>Macedonia, the former Yugoslav Republic of</option>
                                            <option value="MG" @if(old('country')=='MG') selected @endif>Madagascar</option>
                                            <option value="MW" @if(old('country')=='MW') selected @endif>Malawi</option>
                                            <option value="MY" @if(old('country')=='MY') selected @endif>Malaysia</option>
                                            <option value="MV" @if(old('country')=='MV') selected @endif>Maldives</option>
                                            <option value="ML" @if(old('country')=='ML') selected @endif>Mali</option>
                                            <option value="MT" @if(old('country')=='MT') selected @endif>Malta</option>
                                            <option value="MH" @if(old('country')=='MH') selected @endif>Marshall Islands</option>
                                            <option value="MQ" @if(old('country')=='MQ') selected @endif>Martinique</option>
                                            <option value="MR" @if(old('country')=='MR') selected @endif>Mauritania</option>
                                            <option value="MU" @if(old('country')=='MU') selected @endif>Mauritius</option>
                                            <option value="YT" @if(old('country')=='YT') selected @endif>Mayotte</option>
                                            <option value="MX" @if(old('country')=='MX') selected @endif>Mexico</option>
                                            <option value="FM" @if(old('country')=='FM') selected @endif>Micronesia, Federated States of</option>
                                            <option value="MD" @if(old('country')=='MD') selected @endif>Moldova, Republic of</option>
                                            <option value="MC" @if(old('country')=='MC') selected @endif>Monaco</option>
                                            <option value="MN" @if(old('country')=='MN') selected @endif>Mongolia</option>
                                            <option value="ME" @if(old('country')=='ME') selected @endif>Montenegro</option>
                                            <option value="MS" @if(old('country')=='MS') selected @endif>Montserrat</option>
                                            <option value="MA" @if(old('country')=='MA') selected @endif>Morocco</option>
                                            <option value="MZ" @if(old('country')=='MZ') selected @endif>Mozambique</option>
                                            <option value="MM" @if(old('country')=='MM') selected @endif>Myanmar</option>
                                            <option value="NA" @if(old('country')=='NA') selected @endif>Namibia</option>
                                            <option value="NR" @if(old('country')=='NR') selected @endif>Nauru</option>
                                            <option value="NP" @if(old('country')=='NP') selected @endif>Nepal</option>
                                            <option value="NL" @if(old('country')=='NL') selected @endif>Netherlands</option>
                                            <option value="AN" @if(old('country')=='AN') selected @endif>Netherlands Antilles</option>
                                            <option value="NC" @if(old('country')=='NC') selected @endif>New Caledonia</option>
                                            <option value="NZ" @if(old('country')=='NZ') selected @endif>New Zealand</option>
                                            <option value="NI" @if(old('country')=='NI') selected @endif>Nicaragua</option>
                                            <option value="NE" @if(old('country')=='NE') selected @endif>Niger</option>
                                            <option value="NG" @if(old('country')=='NG') selected @endif>Nigeria</option>
                                            <option value="NU" @if(old('country')=='NU') selected @endif>Niue</option>
                                            <option value="NF" @if(old('country')=='NF') selected @endif>Norfolk Island</option>
                                            <option value="MP" @if(old('country')=='MP') selected @endif>Northern Mariana Islands</option>
                                            <option value="NO" @if(old('country')=='NO') selected @endif>Norway</option>
                                            <option value="OM" @if(old('country')=='OM') selected @endif>Oman</option>
                                            <option value="PK" @if(old('country')=='PK') selected @endif>Pakistan</option>
                                            <option value="PW" @if(old('country')=='PW') selected @endif>Palau</option>
                                            <option value="PS" @if(old('country')=='PS') selected @endif>Palestinian Territory, Occupied</option>
                                            <option value="PA" @if(old('country')=='PA') selected @endif>Panama</option>
                                            <option value="PG" @if(old('country')=='PG') selected @endif>Papua New Guinea</option>
                                            <option value="PY" @if(old('country')=='PY') selected @endif>Paraguay</option>
                                            <option value="PE" @if(old('country')=='PE') selected @endif>Peru</option>
                                            <option value="PH" @if(old('country')=='PH') selected @endif>Philippines</option>
                                            <option value="PN" @if(old('country')=='PN') selected @endif>Pitcairn</option>
                                            <option value="PL" @if(old('country')=='PL') selected @endif>Poland</option>
                                            <option value="PT" @if(old('country')=='PT') selected @endif>Portugal</option>
                                            <option value="PR" @if(old('country')=='PR') selected @endif>Puerto Rico</option>
                                            <option value="QA" @if(old('country')=='QA') selected @endif>Qatar</option>
                                            <option value="RE" @if(old('country')=='RE') selected @endif>R&eacute;union</option>
                                            <option value="RO" @if(old('country')=='RO') selected @endif>Romania</option>
                                            <option value="RU" @if(old('country')=='RU') selected @endif>Russian Federation</option>
                                            <option value="RW" @if(old('country')=='RW') selected @endif>Rwanda</option>
                                            <option value="BL" @if(old('country')=='BL') selected @endif>Saint Barth&eacute;lemy</option>
                                            <option value="SH" @if(old('country')=='SH') selected @endif>Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KN" @if(old('country')=='KN') selected @endif>Saint Kitts and Nevis</option>
                                            <option value="LC" @if(old('country')=='LC') selected @endif>Saint Lucia</option>
                                            <option value="MF" @if(old('country')=='MF') selected @endif>Saint Martin (French part)</option>
                                            <option value="PM" @if(old('country')=='PM') selected @endif>Saint Pierre and Miquelon</option>
                                            <option value="VC" @if(old('country')=='VC') selected @endif>Saint Vincent and the Grenadines</option>
                                            <option value="WS" @if(old('country')=='WS') selected @endif>Samoa</option>
                                            <option value="SM" @if(old('country')=='SM') selected @endif>San Marino</option>
                                            <option value="ST" @if(old('country')=='ST') selected @endif>Sao Tome and Principe</option>
                                            <option value="SA" @if(old('country')=='SA') selected @endif>Saudi Arabia</option>
                                            <option value="SN" @if(old('country')=='SN') selected @endif>Senegal</option>
                                            <option value="RS" @if(old('country')=='RS') selected @endif>Serbia</option>
                                            <option value="SC" @if(old('country')=='SC') selected @endif>Seychelles</option>
                                            <option value="SL" @if(old('country')=='SL') selected @endif>Sierra Leone</option>
                                            <option value="SG" @if(old('country')=='SG') selected @endif>Singapore</option>
                                            <option value="SK" @if(old('country')=='SK') selected @endif>Slovakia</option>
                                            <option value="SI" @if(old('country')=='SI') selected @endif>Slovenia</option>
                                            <option value="SB" @if(old('country')=='SB') selected @endif>Solomon Islands</option>
                                            <option value="SO" @if(old('country')=='SO') selected @endif>Somalia</option>
                                            <option value="ZA" @if(old('country')=='ZA') selected @endif>South Africa</option>
                                            <option value="GS" @if(old('country')=='GS') selected @endif>South Georgia and the South Sandwich Islands</option>
                                            <option value="ES" @if(old('country')=='ES') selected @endif>Spain</option>
                                            <option value="LK" @if(old('country')=='LK') selected @endif>Sri Lanka</option>
                                            <option value="SD" @if(old('country')=='SD') selected @endif>Sudan</option>
                                            <option value="SR" @if(old('country')=='SR') selected @endif>Suriname</option>
                                            <option value="SJ" @if(old('country')=='SJ') selected @endif>Svalbard and Jan Mayen</option>
                                            <option value="SZ" @if(old('country')=='SZ') selected @endif>Swaziland</option>
                                            <option value="SE" @if(old('country')=='SE') selected @endif>Sweden</option>
                                            <option value="CH" @if(old('country')=='CH') selected @endif>Switzerland</option>
                                            <option value="SY" @if(old('country')=='SY') selected @endif>Syrian Arab Republic</option>
                                            <option value="TW" @if(old('country')=='TW') selected @endif>Taiwan, Province of China</option>
                                            <option value="TJ" @if(old('country')=='TJ') selected @endif>Tajikistan</option>
                                            <option value="TZ" @if(old('country')=='TZ') selected @endif>Tanzania, United Republic of</option>
                                            <option value="TH" @if(old('country')=='TH') selected @endif>Thailand</option>
                                            <option value="TL" @if(old('country')=='TL') selected @endif>Timor-Leste</option>
                                            <option value="TG" @if(old('country')=='TG') selected @endif>Togo</option>
                                            <option value="TK" @if(old('country')=='TK') selected @endif>Tokelau</option>
                                            <option value="TO" @if(old('country')=='TO') selected @endif>Tonga</option>
                                            <option value="TT" @if(old('country')=='TT') selected @endif>Trinidad and Tobago</option>
                                            <option value="TN" @if(old('country')=='TN') selected @endif>Tunisia</option>
                                            <option value="TR" @if(old('country')=='TR') selected @endif>Turkey</option>
                                            <option value="TM" @if(old('country')=='TM') selected @endif>Turkmenistan</option>
                                            <option value="TC" @if(old('country')=='TC') selected @endif>Turks and Caicos Islands</option>
                                            <option value="TV" @if(old('country')=='TV') selected @endif>Tuvalu</option>
                                            <option value="UG" @if(old('country')=='UG') selected @endif>Uganda</option>
                                            <option value="UA" @if(old('country')=='UA') selected @endif>Ukraine</option>
                                            <option value="AE" @if(old('country')=='AE') selected @endif>United Arab Emirates</option>
                                            <option value="GB" @if(old('country')=='GB') selected @endif>United Kingdom</option>
                                            <option value="US" @if(old('country')=='US') selected @endif>United States</option>
                                            <option value="UM" @if(old('country')=='UM') selected @endif>United States Minor Outlying Islands</option>
                                            <option value="UY" @if(old('country')=='UY') selected @endif>Uruguay</option>
                                            <option value="UZ" @if(old('country')=='UZ') selected @endif>Uzbekistan</option>
                                            <option value="VU" @if(old('country')=='VU') selected @endif>Vanuatu</option>
                                            <option value="VE" @if(old('country')=='VE') selected @endif>Venezuela, Bolivarian Republic of</option>
                                            <option value="VN" @if(old('country')=='VN') selected @endif>Viet Nam</option>
                                            <option value="VG" @if(old('country')=='VG') selected @endif>Virgin Islands, British</option>
                                            <option value="VI" @if(old('country')=='VI') selected @endif>Virgin Islands, U.S.</option>
                                            <option value="WF" @if(old('country')=='WF') selected @endif>Wallis and Futuna</option>
                                            <option value="EH" @if(old('country')=='EH') selected @endif>Western Sahara</option>
                                            <option value="YE" @if(old('country')=='YE') selected @endif>Yemen</option>
                                            <option value="ZM" @if(old('country')=='ZM') selected @endif>Zambia</option>
                                            <option value="ZW" @if(old('country')=='ZW') selected @endif>Zimbabwe</option>
                                        </select>
                                    </div> <!-- /.input-group -->
                                </div> <!-- /.col- -->
                            </div> <!-- /.row -->

{{--                            <div class="acType-content">--}}
{{--                                <h4>Account type.</h4>--}}
{{--                                <p>Select the type of your account below</p>--}}
{{--                                <ul class="acType-list">--}}
{{--                                    <li>--}}
{{--                                        <div>--}}
{{--                                            <input type="radio" name="acType" value="business" placeholder="">--}}
{{--                                            <label for="business">Business</label>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div>--}}
{{--                                            <input type="radio" name="acType" value="personal" placeholder="">--}}
{{--                                            <label for="personal">Personal</label>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div>--}}
{{--                                            <input type="radio" name="acType" value="corporate" placeholder="">--}}
{{--                                            <label for="corporate">Corporate</label>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div> <!-- /.acType-content -->--}}
                            <div class="agreement-checkbox">
                                <input type="checkbox" id="agreement" name="terms_policy" value="1">
                                <label for="agreement">I agree to the terms and policy from the limkokwing university.</label>
                            </div>
                            <button class="solid-button-one">Signup</button>
                            <p class="signUp-text mt-5">Already have an account? <a href="{{route('front.login')}}">Login</a> now.</p>
                        </form>

                    </div> <!-- /.sign-up-form-wrapper -->

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
