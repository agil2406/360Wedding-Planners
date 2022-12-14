<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>360 Wedding Planner </title>
	<link href="{{ url('frontend/assets/css/style.css') }}" rel="stylesheet">

	<link href="{{ url('frontend/assets/css/app.css') }}" rel="stylesheet">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css
" rel="stylesheet">
</head>

<body>
	@include('includes.navbar')
	<div class="rating-star">
		<div class="rating-wrap">
			<h2>Beri Penilaian Anda</h2>
			<h4>Pada WO : <b>{{$order->paket->wo->nama_wo}} </b></h4>
			<form action="{{url('/rating')}}" method="post">
				@csrf
				<input type="number" name="wo_id" value="{{$order->paket->wo->id}}" hidden>
				<input type="number" name="user_id" value="{{auth()->user()->id}}" hidden>
				<div class="center">
					<fieldset class="rating">
						<input type="radio" id="star5" name="rating" value="5" /><label for="star5" class="full" title="Awesome"></label>
						<input type="radio" id="star4.5" name="rating" value="4.5" /><label for="star4.5" class="half"></label>
						<input type="radio" id="star4" name="rating" value="4" /><label for="star4" class="full"></label>
						<input type="radio" id="star3.5" name="rating" value="3.5" /><label for="star3.5" class="half"></label>
						<input type="radio" id="star3" name="rating" value="3" /><label for="star3" class="full"></label>
						<input type="radio" id="star2.5" name="rating" value="2.5" /><label for="star2.5" class="half"></label>
						<input type="radio" id="star2" name="rating" value="2" /><label for="star2" class="full"></label>
						<input type="radio" id="star1.5" name="rating" value="1.5" /><label for="star1.5" class="half"></label>
						<input type="radio" id="star1" name="rating" value="1" /><label for="star1" class="full"></label>
						<input type="radio" id="star0.5" name="rating" value="0.5" /><label for="star0.5" class="half"></label>
					</fieldset>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="d-flex justify-content-center mt-5">
							<button class="btn btn-primary tn-block gradient-custom-2 mb-4" type="submit"> Beri Rating </button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="{{url('frontend/assets/js/star-ratings.js')}}"></script>
</body>

</html>