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
                        <div id="fh5co-logo"><a href="{{ route('main.accueil')}}">O'Cnamo<span>.</span></a></div>
        
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li class="active"><a href="{{ route('main.accueil')}}">Accueil</a></li>
							<li class="active"><a href="{{ route('main.menu') }}">Menu</a></li>
							<li class="active"><a href="{{ route('main.reservation') }}">Réservation</a></li>
							<li class="active"><a href="{{ route('main.about') }}">A propos de nous</a></li>
							<li class="active"><a href="{{ route('main.contact') }}">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>  
    @yield('content')
    <footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-4 fh5co-widget">
                        <h4>O'Cnamo</h4>
                        <p>O'Cnamo, un véritable voyage gustatif au cœur du Cameroun, où la tradition culinaire rencontre l'innovation créative.</p>
                    </div>
                    <div class="col-md-2 col-md-push-1 fh5co-widget">
                        <h4>Links</h4>
                        <ul class="fh5co-footer-links">
                            <li><a href="{{ route('main.accueil')}}">Accueil</a></li>
                            <li><a href="{{ route('main.menu') }}">Menu</a></li>
                            <li><a href="{{ route('main.reservation') }}">Réservation</a></li>
                            <li><a href="{{ route('main.contact') }}">Contact</a></li>
                        </ul>
                    </div>
    
                    <div class="col-md-2 col-md-push-1 fh5co-widget">
                        <h4 class="flex">Prochaines Ouvertures</h4>
                        <ul class="fh5co-footer-links">
                            <li>Lyon</li>
                            <li>Marseille</li>
                            <li>Bordeaux</li>
                            <li>Lens</li>
                            <li>Nice</li>
                        </ul>
                    </div>
    
                    <div class="col-md-4 col-md-push-1 fh5co-widget">
                        <h4>Contact Information</h4>
                        <ul class="fh5co-footer-links">
                            <li>5 Bd Louis XIV, 59800 Lille</li>
                            <li><a href="tel://1234567920">06 49 71 71 05</a></li>
                            <li><a href="mailto:info@yoursite.com">ocnamosite@gmail.com</a></li>
                        </ul>
                    </div>
                    
                </div>
    
                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2024 Issam. Tous Droits Reservés.</small> 
                            <small class="block">Réalisés par Bakkali el aissaoui Issam</small>
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
    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
</body>
</html>