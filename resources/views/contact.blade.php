@extends('base')

@section('title', 'Contact') 

@section('content')
<section>
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/photo-amb.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>Contactez-Nous</h1>
							<h2>Ne soyez pas timide</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
    <div id="fh5co-contact" class="fh5co-section animate-box">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>N'hesitez pas à nous contacter</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
				</div>
			</div>
		
			<div class="row marge">
				<div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
					<div class="container">
						<h2>Adresse</h2>
						<p>5 Bd Louis XIV, 59800 Lille</p>
		
						<h2>Numéros de téléphone</h2>
						<p>06 49 71 71 05</p>
						
						<h2>Horaires</h2>
						<p>Lundi - Vendredi : 11h30 - 14h30 / 20h00 - 23h00</p>
						<p>Samedi - Dimanche : 11h30 - 15h00 / 19h00 - 01h00</p>
				
						<h2>Emplacement sur la carte</h2>
						<div id="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.916875902131!2d3.068600375201434!3d50.628660974518034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d59118928ab7%3A0xd0f3b05faaf1c4c!2sLe%20Cnam!5e0!3m2!1sfr!2sfr!4v1708403372356!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
						{{-- <form action="{{ route('main.reservation') }}" method="get">
							<div class="resa" class="col-md-12">
								<input type="submit" class="btn btn-primary btn-outline btn-lg" value="Réserver">
							</div>
						</form> --}}
						<p class="resa"><a href="{{ route('main.reservation') }}" class="btn btn-primary btn-outline">Réserve sur le champ</a></p>
					</div>
				
				</div>
			</div>

		</div>
	</div>
</section>
@endsection
