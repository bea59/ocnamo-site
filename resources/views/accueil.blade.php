@extends('base')

@section('title', 'Accueil') 

@section('content')
<section> 
    <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
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
                <img src="{{asset('images/hero_1.jpeg')}}" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
            </div>
            <div class="col-md-5 col-md-push-1 animate-box">
                <div class="section-heading">
                    <h2>The Restaurant</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae neque quisquam at deserunt ab praesentium architecto tempore saepe animi voluptatem molestias, eveniet aut laudantium alias, laboriosam excepturi, et numquam? Atque tempore iure tenetur perspiciatis, aliquam, asperiores aut odio accusamus, unde libero dignissimos quod aliquid neque et illo vero nesciunt. Sunt!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam iure reprehenderit nihil nobis laboriosam beatae assumenda tempore, magni ducimus abentey.</p>
                    <p><a href="#" class="btn btn-primary btn-outline">Our History</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-about" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
                <img src="{{asset('images/hero_1.jpeg')}}" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
            </div>
            <div class="col-md-5 col-md-push-1 animate-box">
                <div class="section-heading">
                    <h2>The Restaurant</h2>
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
                <img src="{{asset('images/gallery_9.jpeg')}}" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
            </div>
            <div class="col-md-5 col-md-push-1 animate-box">
                <div class="section-heading">
                    <h2>The Restaurant</h2>
                    @foreach ($actus as $actu)
                    <p>{{ $actu->contenu}}</p>
                    <p>({{ $actu->date_publication}})</p>
                    @endforeach
                    {{-- <p><a href="#" class="btn btn-primary btn-outline">Our History</a></p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection 