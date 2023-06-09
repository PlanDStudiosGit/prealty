<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pulse Realty - Sign in</title>
	<link rel="icon" type="image/x-icon" href="{{asset('front/assets/Images/fav-icon.png')}}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('front/assets/css/css.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
		integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="{{asset('front/assets/js/js.js')}}"></script>
</head>


<body>
	<div class="wrapper">

		<div id="formContent" class="test-1">

			<div>
				<a href=""><img class="logo-01" src="{{asset('front/assets/Images/logo-01.png')}}"></a>
			</div>
				@if (Session::has('message'))
					<div class="alert alert-info">{{ Session::get('message') }}</div>
				@endif
	
			
				<div class="row">
					<div class="col-md-12">
						<a href="{{route('register')}}"><button type="button"
								class="btn btn-secondary btn-lg btn-block mb-1"><i class="fa fa-envelope"></i> Signup with
								Email</button></a>
					</div>
					<div class="divider d-flex align-items-center my-4">
						<p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
					  </div>
					<div class="col-md-12">
						<a href="{{route('register.google')}}"><button type="button" class="btn btn-primary btn-lg btn-block mb-1"> <i class="fa-brands fa-google"></i> Signup with Google</button></a>
					</div>
					<div class="col-md-12">
						<a href="{{route('register.facebook')}}"><button type="button" class="btn btn-primary btn-lg btn-block mb-1" style="background-color: #3b5998;"><i class="fab fa-facebook-f"></i> Signup with Facebook</button></a>
					</div>
				</div>


			<div id="formFooter">
				<div class="row">
					<div class="col-md-12">
						Already have an account? <a href="{{route('login')}}"><button type="button" class="btn btn-dark">
								Signin</button></a>
					</div>
				</div>

			</div>

		</div>
	</div>
</body>

</html>