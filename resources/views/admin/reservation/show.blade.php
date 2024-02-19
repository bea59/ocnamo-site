@extends('../../base')

@section('title', 'Admin - Réservation - Show')

@section('content')
<section class="en-dessous">
    <h2>Admin - Réservation - Show</h2>
        <form action="{{route ('admin.reservation.update',['id' => $reservation->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" min="3" max="50" value="{{ old('nom', $reservation->nom)}}" not-required>
            </div>
            <div>
                <label for="couverts">Nombre de couverts</label>
                <input type="number" name="couverts" id="couverts" min="1" max="16" value="{{ old('couverts', $reservation->couverts)}}" not-required>
            </div>
            <div>
                <label for="heure">Heure</label>
                {{-- <input type="time" name="heures" id="heures"not-required> --}}
                <select name="heure" id="heure">
                    <option value=""></option>
                    @foreach ($heures as $heure);
                        <option value="{{ $heure }}" {{old('heure', $reservation->heures) == $heure.':00' ? 'selected': '' }}>{{ $heure }}</option>
                        @endforeach
                </select>
            </div>
            <div>
                <label for="jour">Jour</label>
                <input type="date" name="jour" id="jour" min="{{ date ('Y-m-d') }}" value="{{ old('jour', $reservation->jour)}}" not-required>
            </div>
            <div>
                <label for="telephone">Numéro de Téléphone</label>
                <input type="phone" name="telephone" id="telephone" value="{{ old('telephone', $reservation->telephone)}}" placeholder="exemple : 0612345678">              
            </div>
            <div>
                <label for="commentaires">Commentaires</label>
                <textarea name="commentaires" id="commentaires" cols="30" rows="10">{{ old('commentaires', $reservation->commentaires)}}</textarea>  
            </div>
        </form>
</section>
 @endsection