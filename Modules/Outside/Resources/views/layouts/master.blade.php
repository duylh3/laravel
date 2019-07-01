<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bưởi Cam</title>
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('outside/css/font-awesome.min.css')}}" media="all" />
        <!--Bootstrap CSS--> 
        <link rel="stylesheet" type="text/css" href="{{asset('outside/css/bootstrap.min.css')}}" media="all" />
        <!--slicknav CSS--> 
        <link rel="stylesheet" href="{{asset('outside/css/slicknav.min.css')}}">
        <!--Owl carousel CSS--> 
        <link rel="stylesheet" href="{{asset('outside/css/owl.carousel.min.css')}}">
        <!--Lightbox CSS--> 
        <link rel="stylesheet" href="{{asset('outside/css/lightbox.min.css')}}"/>
        <!--Bx slider CSS--> 
        <link rel="stylesheet" href="{{asset('outside/css/jquery.bxslider.css')}}">
        <!--Animate CSS--> 
        <link rel="stylesheet" href="{{asset('outside/css/animate.min.css')}}">
        <!--Main style CSS--> 
        <link rel="stylesheet" type="text/css" href="{{asset('outside/css/style.css')}}" media="all" />
        <!--Responsive CSS--> 
        <link rel="stylesheet" type="text/css" href="{{asset('outside/css/responsive.css')}}" media="all" />
    </head>
    <body>
        <!-- menu area start -->
        <div class="menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-6">
                        <div class="logo">
                            <a href="/"><img src="{{asset('outside/img/logo.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-6">
                        <div class="responsive-menu"></div>
                        <div class="mainmenu">
                            <ul id="primary-menu">
                                <li class="active"><a href="/outside/index">Trang chủ</a></li>
                                <li><a href="/outside/news">Sự kiện</a></li>
                                <li><a href="/outside/about">Giới thiệu</a></li>
                                <li><a href="/outside/process">Quy trình</a></li>
                                <li><a href="/outside/product">Sản phẩm</a></li>
                                <li><a href="/outside/cert">Chứng chỉ</a></li>
                         <!--       <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>-->
                                
                                <li><a href="/outside/contact">Liên hệ</a></li>
                                <li>
                                    <button type="submit" class="toggle-pade">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <form class="navbar-form form-box" role="search">
                                        <input type="text" placeholder="Search">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- menu area end -->
        @yield('content')
        <footer class="site-footer pt-75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="widget">
                            <h5 class="widget-title"><a href="#">Giới thiệu</a></h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of tand scrambled it to make a type specimen wonder full book. </p>
                            <div class="widget-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget">
                            <h5 class="widget-title"><a href="#">Liên hệ</a></h5>
                            <ul>
                                <li>Address : 97 New Design Street, Dhaka BD</li>
                                <li>Phone : 1234 5678 9123  </li>
                                <li>Email : Stevan@Example.com</li>
                            </ul>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h5 class="widget-title"><a href="#">Instagram Feed</a></h5>
                            <div class="img-gallery">
                                <div class="single-img-gallery">
                                    <a href="#"><img src="{{asset('outside/img/widget/widget1.jpg')}}" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="{{asset('outside/img/widget/widget2.jpg')}}" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="{{asset('outside/img/widget/widget3.jpg')}}" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="{{asset('outside/img/widget/widget4.jpg')}}" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="{{asset('outside/img/widget/widget5.jpg')}}" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="{{asset('outside/img/widget/widget6.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-bottom">
                                <p>Copyright © 2017 - All Right Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer area end -->
        <!-- footer area start -->       
        <!-- jquery main JS -->
        <script src="{{asset('outside/js/jquery.min.js')}}"></script>
        <!-- Poppers JS -->
        <script src="{{asset('outside/js/popper.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('outside/js/bootstrap.min.js')}}"></script>
        <!-- slicknav JS -->
        <script src="{{asset('outside/js/jquery.slicknav.min.js')}}"></script>
        <!-- owl carousel JS -->
        <script src="{{asset('outside/js/owl.carousel.min.js')}}"></script>
        <!-- Isotope JS -->
        <script src="{{asset('outside/js/isotope-3.0.4.min.js')}}"></script>
        <!-- Bx slider JS -->
        <script src="{{asset('outside/js/jquery.bxslider.min.js')}}"></script>
        <!-- lightbox JS -->
        <script src="{{asset('outside/js/lightbox.min.js')}}"></script>
        <!-- Wow JS -->
        <script src="{{asset('outside/js/wow-1.3.0.min.js')}}"></script>
        <!-- Google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXNQbOV3ZGoxAQ_H2FtRAS_i9yOdZFfBo&region=GB"></script>
        <!-- Imagezoom JS -->
        <script src="{{asset('outside/js/jquery.imagezoom.js')}}"></script>
        <!-- main JS -->
        <script src="{{asset('outside/js/main.js')}}"></script>
    </body>
</html>
