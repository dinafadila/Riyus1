<!DOCTYPE html>
<html lang="en">
<head>
	<title>Masuk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/book-icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
		
		
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/signin-01.svg" alt="IMG">
				</div>
				
				

				<form class="login100-form validate-form">
				
					<span class="login100-form-title">
						Masuk
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
					name="email" value="{{ old('email') }}" required autofocus >

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						@if ($errors->has('email'))
                    <!-- Ini masih perlu diedit -->
					        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
					<!-- Ini masih perlu diedit -->
                        @endif
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
					<input class="input100" id="password" type="password" placeholder="Kata sandi" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
					name="password" required>

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						@if ($errors->has('password'))
						<!-- Ini masih perlu diedit -->
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span>
						<!-- Ini masih perlu diedit -->
                        @endif
					</div>
					



<!-- Ganti Font Masuknya aja -->
					<button class="container-login100-form-btn" type="submit">
						<a class="login100-form-btn">{{ __('Masuk') }} </a>	
					</button>
<!-- Ganti Font Masuknya aja -->
				



					<div class="text-center p-t-12">
						<span class="txt1">
							Lupa
						</span>
						@if (Route::has('password.request'))
                            
							<a class="txt2" href="{{ route('password.request') }}">
								kata sandi?
							</a>
						@endif
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="register">
							Buat Akun
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>