@extends('base')

@section('content')
<section>
    <h2>Réservation</h2>
    <form action="{{route ('main.reservation.store') }}" method="post">
        @csrf
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" min="3" max="50" value="{{ old('nom')}}" not-required>
            @error('nom')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="couverts">Nombre de couverts</label>
            <input type="number" name="couverts" id="couverts" min="1" max="16" value="{{ old('couverts')}}" not-required>
            @error('couverts')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="heure">Heure</label>
            {{-- <input type="time" name="heures" id="heures"not-required> --}}
            <select name="heure" id="heure">
                <option value=""></option>
                @foreach ($heures as $heure);
                    <option value="{{ $heure }}" {{(old('heure') == $heure) ? 'selected': '' }}>{{ $heure }}</option>
                @endforeach
            </select>
            @error('heure')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="jour">Jour</label>
            <input type="date" name="jour" id="jour" min="{{ date ('Y-m-d') }}" value="{{ old('jour')}}" not-required>
            @error('jour')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="telephone">Numéro de Téléphone</label>
            <input type="phone" name="telephone" id="telephone" value="{{ old('telephone')}}" placeholder="exemple : 0612345678">
            @error('telephone')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="commentaires">Commentaires</label>
            <textarea name="commentaires" id="commentaires" cols="30" rows="10">{{ old('commentaires')}}</textarea>
            @error('commentaires')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Reserve fraté</button>
        </div>
    </form>
</section>
@endsection