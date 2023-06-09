<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pulse Realty - Sign in</title>
  <link rel="icon" type="image/x-icon" href="{{asset('front/assets/Images/fav-icon.png')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
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
			<a href="{{url('/')}}"><img class="logo-01" src="{{asset('front/assets/Images/logo-01.png')}}"></a>
			<h3 class="login">Sign in</h3>  
		  </div>
		        <form method="POST" action="{{ route('login') }}">
                        @csrf

			<div class="form-group">
	
			 <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email/Username') }}</label>
			<!-- <input class="form-control" type="text" id="Username" placeholder="Email/Username" required> -->
			<input id="email" id="Username" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email/Username" style="width: 90%; margin-left: 20px;">
   @error('email')
		<span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
			</div>

			<div class="form-group">
			  <label for="password" class="col-md-4 col-form-label text-md-end" style="margin-left: -20px">{{ __('Password') }}</label>
			<!-- <input class="form-control" type="password" id="Myinput" name="First Name" placeholder="Password"required> -->

			<input id="id_password" id="password" id="Myinput" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" style="width: 90%; margin-left: 20px;"> 
  			
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


			<div class="all" style="float: left; margin-left: 20px; margin-top:5px; margin-bottom:2px">
			 <label><input type="checkbox" id="togglePassword"  > Show Password</label>  <span></span>
			</div>

			</div>
				<div class="col-md-12">
					<button type="submit" class="btn signin-button btn-lg btn-block ">Sign in</button>
				</div>

		  </form>

		  <div id="formFooter" >
			<div class="row">
			  <div class="col-md-6">
				<a href="#"><button type="button" class="btn btn-dark"> @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif</button></a>
			  </div>
			  <div class="col-md-6">
				<a href="{{url('social-register')}}"><button type="button" class="btn btn-dark"> Signup</button></a>
			  </div>
			  <h3 class="login"  style="margin-top:10px; margin-bottom:2px">OR</h3>  
			<div class="col-md-12">
				<a href="{{route('register.google')}}"><button type="button" class="btn btn-primary btn-lg btn-block mb-1"> <i class="fa-brands fa-google"></i> Signin with Google</button></a>
			</div>
			<div class="col-md-12">
				<a href="{{route('register.facebook')}}"><button type="button" class="btn btn-primary btn-lg btn-block mb-1" style="background-color: #3b5998;"><i class="fab fa-facebook-f"></i> Signin with Facebook</button></a>
			</div>
			</div>
		  </div>
	  
		</div>
	  </div>


	  <script>
		const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    
});
	  </script>
</body>

</html>