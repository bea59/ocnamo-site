@extends('base')

@section('title', 'Menu') 

@section('content')
    <section>
        <h2 class="title">Menu</h2>
        @foreach ($categories as $categorie)
        <div>
            <h3>{{ $categorie->nom }}</h3>
            <ul class="plats">
                @foreach($categorie->plat() as $plat)
                <li>
                    <a href="{{ route('main.plat', ['id' => $plat->id])}}"><img src="{{ asset('images/'.$plat->fichier)}}" alt="{{ $plat->nom}}"></a>
                    <a href="{{ route('main.plat', ['id' => $plat->id])}}"><h4>{{ $plat->nom }}</h4></a>
                    <span class="prix">{{ $plat->prix }} euros</span>
                    <ul>
                        @foreach ($plat -> etiquettes() as $etiquette)
                        <li>{{$etiquette -> nom}}</li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach

        <p><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d10123.668230233567!2d3.0711753!3d50.6286576!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1701358467120!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    </section>
@endsection
