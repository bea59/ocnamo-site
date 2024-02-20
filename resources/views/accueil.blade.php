@extends('base')

@section('title', 'Accueil') 

@section('content')
<section> 
    <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/photo-amb.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="display-t js-fullheight">
                        <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                            <h1>Le Meilleur <em> Restaurant <em> Camerounais </em>de<em> France</em></h1>
                            <h2>Goûts <em>&amp;</em> Voyages <em> assurés</em></h2>
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
                <img style="margin-left: 400px" src="{{asset('images/amb.jpg')}}" alt="">
            </div>
            <div class="col-md-5 col-md-push-1 animate-box">
                <div class="section-heading">
                    <h2>O'Cnamo</h2>
                    <p>Il était une fois, dans le cœur d'une petite ville, un chef passionné du nom de Issam Bayankou. Issam avait toujours rêvé de créer un lieu où la richesse de la cuisine camerounaise pourrait être célébrée avec une touche moderne et créative. C'est ainsi que l'idée de son restaurant, O'Cnamo, a commencé à germer...</p>
                    <p><a href="{{ route('main.about') }}" class="btn btn-primary btn-outline">Notre Histoire</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-about" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
                <img style="margin-left: 400px" src="{{asset('images/récolte.jpg')}}" alt="">
            </div>
            <div class="col-md-5 col-md-push-1 animate-box">
                <div class="section-heading">
                    <h2>La Récolte</h2>
                    @foreach ($actus as $actu)
                    <p>{{ $actu->contenu}}</p>
                    <p>({{ $actu->date_publication}})</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-about" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
                <img style="margin-left: 400px" src="{{asset('images/concert.jpg')}}" alt="">
            </div>
            <div class="col-md-5 col-md-push-1 animate-box">
                <div class="section-heading">
                    <h2>O'CnamZik</h2>
                    @foreach ($actus as $actu)
                    <p>{{ $actu->contenu}}</p>
                    <p>({{ $actu->date_publication}})</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-about" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
                <img style="margin-left: 400px" src="{{asset('images/lyon.jpg')}}" alt="">
            </div>
            <div class="col-md-5 col-md-push-1 animate-box">
                <div class="section-heading">
                    <h2>Lyon, On arrive</h2>
                    @foreach ($actus as $actu)
                    <p>{{ $actu->contenu}}</p>
                    <p>({{ $actu->date_publication}})</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection 