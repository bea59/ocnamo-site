@extends('base')

@section('title', 'Menu') 

@section('content')
    <section>
        <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/photo-amb.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="display-t js-fullheight">
                            <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                                <h1>Regardez <em>Votre</em> Menu</h1>
                                <h2>Régalez-Vous</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    
        <div id="fh5co-featured-menu" class="fh5co-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 fh5co-heading animate-box">
                        <h2>Notre Magnifique Carte</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis. Ad magni perspiciatis, voluptatum repellat.</p>
                            </div>
                        </div>
                    </div>
                    
                    @foreach ($categories as $categorie)
                        <div class="col-md-3 col-sm-4 col-xxs-12 fh5co-item-wrap">
                            <h3 class="color">{{ $categorie->nom }}</h3>
                            <div class="fh5co-item animate-box">
                                @foreach($categorie->plat() as $plat)
                                    <a href="{{ route('main.plat', ['id' => $plat->id])}}">
                                    <img src="{{ asset('images/menu/'.$plat->fichier)}}" class="img-responsive" alt="{{ $plat->nom}}"></a>
                                    <a href="{{ route('main.plat', ['id' => $plat->id])}}"><h4>{{ $plat->nom }}</h4></a>
                                    <span class="fh5co-price">{{ $plat->prix }} euros</span>
                                    <ul>
                                        @foreach ($plat -> etiquettes() as $etiquette)
                                        <li>{{$etiquette -> nom}}</li>
                                        @endforeach
                                    </ul>
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p> --}}
                                @endforeach
                            </div>
                        </div>
                    @endforeach

        <div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/photo-amb.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Réserve ta table</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
                        <p><a href="{{ route('main.reservation') }}" class="btn btn-primary btn-outline">Réserve sur le champ</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
