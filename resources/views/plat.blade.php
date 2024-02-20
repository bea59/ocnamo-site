@extends('base')

@section('content')
<section class="en-dessous">
    <img src="{{ asset('images/menu/'.$plat->fichier)}}" alt="{{ $plat->titre}}">
    <h2>{{ $plat->nom }}</h2>
    <span class="prix">{{ $plat->prix }} euros</span>
        <ul>
            @foreach ($plat -> etiquettes() as $etiquette)
            <li>{{$etiquette -> nom}}</li>
            @endforeach
        </ul>
</section>
@endsection