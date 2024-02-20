@extends('base')

@section('title', 'Admin - Réservation - Edit')

@section('content')
<section class="en-dessous">
    <h2>Admin - Réservation - Edit</h2>
    {{-- <div class="invalid-feedback">
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div> --}}
    <form action="{{ route('admin.reservation.update', ['id' => $reservation->id]) }}" method="post">
        @csrf
        <div>
            <label for="nom">Nom</label>
            <input class="color-b" type="text" name="nom" id="nom" min="3" max="50" value="{{ old('nom', $reservation->nom) }}" required>
            @error('nom')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="couverts">Nombre de couverts</label>
            <input class="color-b" type="number" name="couverts" id="couverts" min="1" max="16" value="{{ old('couverts', $reservation->couverts) }}" required>
            @error('couverts')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="heure">Heure</label>
            <select class="color-b" name="heure" id="heure" required>
                @foreach ($heures as $heure)
                    <option class="color-b" value="{{ $heure }}" {{ old('heure', $reservation->heure) == $heure.':00' ? 'selected' : '' }}>{{ $heure }}</option>
                @endforeach
            </select>
            @error('heure')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="jour">Jour</label>
            <input class="color-b" type="date" name="jour" id="jour" min="{{ date('Y-m-d') }}" value="{{ old('jour', $reservation->jours) }}" required>
            @error('jour')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="telephone">Numéro de téléphone</label>
            <input class="color-b" type="phone" name="telephone" id="telephone" value="{{ old('telephone', $reservation->telephone) }}" placeholder="Format : 0612345678" required>
            @error('telephone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="commentaires">Commentaires</label>
            <textarea class="color-b" name="commentaires" id="commentaires" cols="30" rows="10">{{ old('commentaires', $reservation->commentaires) }}</textarea>
            @error('commentaires')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button class="color-b" type="submit">Réserver</button>
        </div>
    </form>
</section>
@endsection