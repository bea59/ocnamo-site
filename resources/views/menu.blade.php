@extends('base')

@section('title', 'Menu') 

@section('content')
    <section>
        <h2 class="title">Menu</h2>
        @foreach ($categories as $categorie)
        <div>
            <h3>{{ $categorie }}</h3>
            <ul class="plats">
                @for ($i = 0; $i < 5 ; $i++)
                <li>
                    <img src="/images/burger.jpg" alt="burger fire">
                    <h4>Lorem ipsum dolor</h4>
                    <span class="prix">9,99$</span>
                </li>
                @endfor
            </ul>
        </div>
        @endforeach

        <p><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d10123.668230233567!2d3.0711753!3d50.6286576!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1701358467120!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    </section>
@endsection
