@extends('base')

@section('title', 'A propos de nous') 

@section('content')
<section>
    <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/photo-amb.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>A propos de nous</h1>
							<h2>Notre O'Cnamo c'est Votre O'Cnamo</h2>
						</div>
					</div>
				</div>
			</div>
		</div>	
		</div>
	</header>
    <div id="fh5co-about" class="fh5co-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
                    <img style="margin-left: 400px" src="{{asset('images/construction.jpg')}}" alt="">
                </div>
                <div class="col-md-5 col-md-push-1 animate-box">
                    <div class="section-heading">
                        <h2>Notre histoire</h2>
                        <p>Il était une fois, dans le cœur d'une petite ville, un chef passionné du nom de Issam Bayankou. Issam avait toujours rêvé de créer un lieu où la richesse de la cuisine camerounaise pourrait être célébrée avec une touche moderne et créative. C'est ainsi que l'idée de son restaurant, O'Cnamo, a commencé à germer.</p>
                        <p>La recherche du lieu parfait n'a pas été facile, mais Issam a finalement découvert un charmant bâtiment au cœur de la ville, avec une atmosphère accueillante et un charme rustique. Il a travaillé sans relâche pour créer une ambiance chaleureuse et conviviale, choisissant des éléments de décoration qui rappellent les traditions camerounaises tout en ajoutant une touche contemporaine...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-about" class="fh5co-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
                    <img style="margin-left: 400px" src="{{asset('images/produits.jpg')}}" alt="">
                </div>
                <div class="col-md-5 col-md-push-1 animate-box">
                    <div class="section-heading">
                        <p>La passion de Issam pour la cuisine avait des racines profondes dans ses souvenirs d'enfance passés au Cameroun, où les repas étaient des moments de partage et de convivialité. Après des années d'expérience culinaire dans divers établissements, Issam ressentait le besoin de créer quelque chose de personnel, quelque chose qui refléterait son amour pour la cuisine de son pays natal.</p>
                        <p>Issam a passé des mois à perfectionner son concept, mêlant tradition et innovation pour créer une expérience gastronomique unique. Il a sillonné les plaines camerounaises à la recherche des meilleurs producteurs locaux, sélectionnant des ingrédients de qualité pour chaque plat. Son rêve prenait forme, et il était déterminé à faire d'O'Cnamo un lieu emblématique...</p>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-about" class="fh5co-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
                    <img style="margin-left: 400px" src="{{asset('images/inauguration.jpg')}}" alt="">
                </div>
                <div class="col-md-5 col-md-push-1 animate-box">
                    <div class="section-heading">
                    <p>L'inauguration d'O'Cnamo a été un événement mémorable, attirant les passionnés de cuisine, les amateurs de bonne chère et les curieux de la région. Le restaurant est rapidement devenu un lieu prisé, où les clients venaient non seulement pour la délicieuse cuisine, mais aussi pour l'atmosphère chaleureuse et le service attentionné.</p>
                    <p>Ainsi, l'histoire de la création d'O'Cnamo était celle d'un chef déterminé à partager sa passion pour la cuisine irlandaise, transformant son rêve en une réalité gastronomique appréciée par tous ceux qui franchissent les portes de son établissement.</p>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection