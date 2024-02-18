<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<!-- Modernizr JS -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>  
    <div class="fh5co-loader"></div>
	
    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <!-- <div class="top-menu"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center logo-wrap">
                            <div id="fh5co-logo"><a href="{{ route('main.home')}}">O'Cnamo<span>.</span></a></div>
                </div>
                <div class="col-xs-12 text-center menu-1 menu-wrap">
                    <ul>
                        <li class="active"><a href="{{ route('main.home')}}">Accueil</a></li>
                        <li><a href="{{ route('main.menu') }}">Menu</a></li>
                        <li><a href="{{ route('main.reservation') }}">Réservation</a></li>
                        <li><a href="#">A propos de nous</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    <!-- </div> -->
</nav>
</div>
    @yield('content')
    <footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-4 fh5co-widget">
                        <h4>Tasty</h4>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                    </div>
                    <div class="col-md-2 col-md-push-1 fh5co-widget">
                        <h4>Links</h4>
                        <ul class="fh5co-footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">Gallery</a></li>
                        </ul>
                    </div>
    
                    <div class="col-md-2 col-md-push-1 fh5co-widget">
                        <h4>Categories</h4>
                        <ul class="fh5co-footer-links">
                            <li><a href="#">Landing Page</a></li>
                            <li><a href="#">Real Estate</a></li>
                            <li><a href="#">Personal</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">e-Commerce</a></li>
                        </ul>
                    </div>
    
                    <div class="col-md-4 col-md-push-1 fh5co-widget">
                        <h4>Contact Information</h4>
                        <ul class="fh5co-footer-links">
                            <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
                            <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                            <li><a href="http://https://freehtml5.co">freehtml5.co</a></li>
                        </ul>
                    </div>
    
                </div>
    
                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
                            <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
                        </p>
                        <p>
                            <ul class="fh5co-social-icons">
                                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble2"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>
    
            </div>
    </footer>

    <!-- jQuery -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>