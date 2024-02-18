@extends('base')

@section('title', 'Home') 

@section('content')

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>The Best Coffee <em>&amp;</em> Restaurant <em>in</em> Brooklyn</h1>
                        <h2>Brought to you by</h2>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae neque quisquam at deserunt ab praesentium architecto tempore saepe animi voluptatem molestias, eveniet aut laudantium alias, laboriosam excepturi, et numquam? Atque tempore iure tenetur perspiciatis, aliquam, asperiores aut odio accusamus, unde libero dignissimos quod aliquid neque et illo vero nesciunt. Sunt!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam iure reprehenderit nihil nobis laboriosam beatae assumenda tempore, magni ducimus abentey.</p>
                    {{-- <p><a href="#" class="btn btn-primary btn-outline">Our History</a></p> --}}
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae neque quisquam at deserunt ab praesentium architecto tempore saepe animi voluptatem molestias, eveniet aut laudantium alias, laboriosam excepturi, et numquam? Atque tempore iure tenetur perspiciatis, aliquam, asperiores aut odio accusamus, unde libero dignissimos quod aliquid neque et illo vero nesciunt. Sunt!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam iure reprehenderit nihil nobis laboriosam beatae assumenda tempore, magni ducimus abentey.</p>
                    {{-- <p><a href="#" class="btn btn-primary btn-outline">Our History</a></p> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<ul>
    @foreach ($actus as $actu)
    <li>{{ $actu->contenu}} ({{ $actu->date_publication}})</li>
    @endforeach
</ul>
@endsection 