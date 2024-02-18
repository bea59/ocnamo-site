@extends('base')

@section('content')
<section>
    <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>Reserved a Table Today!</h1>
							<h2>Brought to you by</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<div id="fh5co-reservation-form" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Reservation</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis. Ad magni perspiciatis, voluptatum repellat.</p>
						</div>
					</div>
				</div>
				
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
					<form action="#" id="form-wrap">
                        @csrf
						<div class="row form-group">
							<div class="col-md-12">
								<label for="Nom">NOM</label>
                                <input class="form-control" type="text" name="nom" id="nom" min="3" max="50" value="{{ old('nom') }}"required>
                                @error('nom')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
								<label for="couvert">couvert</label>
                                <input class="form-control" type="text" name="couvert" id="couvert" min="3" max="50" value="{{ old('couvert') }}"required>
                                @error('couvert')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
								<label for="jour">jour</label>
                                <input class="form-control" type="date" name="jour" id="jour" min="3" max="50" value="{{ old('jour') }}"required>
                                @error('jour')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
								<label for="name">telephone</label>
                                <input class="form-control" type="text" name="nom" id="nom" min="3" max="50" value="{{ old('telephone') }}"required>
                                @error('telephone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="many">Heure</label>
								<select name="heure" id="heure" class="form-control custom_select">
									{{-- horaire matin --}}
									<option value=""></option>
									@foreach ($heures as $heure)
									<option value="{{ $heure }}" {{ old('heure') == $heure ? 'selected' : '' }}
									>{{ $heure }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="taskdatetime"></label>
								<textarea name="commentaire" id="commentaire" cols="30" rows="10">{{ old('commentaire') }}</textarea>
								@error('commentaire')
								<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-outline btn-lg" value="Submit Form">
							</div>
						</div>
				{{-- <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
					<form action="#" id="form-wrap">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="nom">Nom</label>
								<input class="form-control" type="text" name="nom" id="nom" min="3" max="50" value="{{ old('nom')}}" required>
                                @error('nom')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
						</div>
						<div class="row form-group">
                            <div class="col-md-12">
                                <label for="couverts">Nombre de couverts</label>
								<input class="form-control" type="number" name="couverts" id="couverts" min="1" max="16" value="{{ old('couverts')}}" not-required>
                                @error('couverts')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
						</div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="many">How Many People</label>
                                <select name="many" id="many" class="form-control custom_select">
                                    <option value="#">1</option>
                                    <option value="#">2</option>
                                    <option value="#">3</option>
                                    <option value="#">4+</option>
                                </select>
                            </div>
                        </div>
						<div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary btn-outline btn-lg" value="Submit Form">
							</div>
						</div> --}}
                        
					</form>
				</div>
				
				
			</div>
		</div>
	</div>
{{-- 
	<div id="fh5co-featured-testimony" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Testimony</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis.</p>
						</div>
					</div>
				</div>

				<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
						<img src="images/person_1.jpg" alt="">
				</div>
				<div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
					<blockquote>
						<p> &ldquo; Quantum ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam. &rdquo;</p>
						<p class="author"><cite>&mdash; Jane Smith</cite></p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>

	
	
	<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Book a Table</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
					<p><a href="reservation.html" class="btn btn-primary btn-outline">Book Now</a></p>
				</div>
			</div>
		</div>
	</div> --}}
</section>
@endsection