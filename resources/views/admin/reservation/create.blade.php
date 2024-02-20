@extends('base')

@section('title', 'Admin - Réservation - Create')

@section('content')
<section class="en-dessous">
    <h2>Admin - Réservation - Create</h2>
    <div id="fh5co-reservation-form" class="fh5co-section">
		<div class="container">
			<div class="row">
                <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
                    @if ($errors->any())
                        <div class="alert alert-danger" style="margin-top: 50px">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
					<form action="{{ route('main.reservation.store')}}" method="POST" id="form-wrap">
                        @csrf
						<div class="row form-group">
							<div class="col-md-12">
								<label for="nom">NOM</label>
                                <input class="form-control" type="text" name="nom" id="nom" min="3" max="50" value="{{ old('nom') }}" required>
                                @error('nom')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
								<label for="couvert">couverts</label>
                                <input class="form-control" type="number" name="couvert" id="couvert" min="1" max="50" value="{{ old('couvert') }}"required>
                                @error('couvert')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
								<label for="jour">jour</label>
                                <input class="form-control" type="date" name="jour" id="jour" min="{{ date ('Y-m-d') }}"  value="{{ old('jour') }}"required>
                                @error('jour')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="many">Heure</label>
								<select name="heure" id="heure" class="form-control">
									{{-- horaire matin --}}
									<option value=""></option>
									@foreach ($heures as $heure)
									<option class="select" value="{{ $heure }}" {{ old('heure') == $heure ? 'selected' : '' }}
									>{{ $heure }}</option>
									@endforeach
								</select>
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
								<label for="name">telephone</label>
                                <input class="form-control" type="text" name="telephone" id="telephone" min="3" max="50" value="{{ old('telephone') }}"required>
                                @error('telephone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="commentaire">Commentaires</label>
								<textarea class="form-control" name="commentaires" id="commentaire" cols="30" rows="10">{{ old('commentaire') }}</textarea>
								@error('commentaire')
								<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-outline btn-lg" value="Réserver">
							</div>
						</div>
                        
					</form>
				</div>
				
				
			</div>
		</div>
	</div>
</section>
@endsection
</section>