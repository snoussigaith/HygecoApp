
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/feathericon.min.css')}}">
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="{{url('assets/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/style.css')}}"> </head>

<body>
<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="assets/img/H-Logo.png" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1 class="mb-3">Register</h1>
							<form  method="POST" action="{{ route('register') }}">
                                  @csrf
      
								<div class="form-group">
									<input class="form-control" id="name" type="text" name="name" placeholder="Name" required autofocus autocomplete="name"> </div>
								<div class="form-group">
									<input class="form-control" id="email"  type="email" name="email" placeholder="Email" required autocomplete="username" > </div>
								<div class="form-group">
									<input class="form-control" id="password" 
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="new-password"> </div>
								<div class="form-group">
									<input class="form-control" id="password_confirmation" 
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation"> </div>
								<div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">Register</button>
								</div>
							</form>
							<div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="{{url('assets/js/jquery-3.5.1.min.j')}}s"></script>
	<script src="{{url('assets/js/popper.min.js')}}"></script>
	<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{url('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{url('assets/plugins/raphael/raphael.min.js')}}"></script>
	<script src="{{url('assets/plugins/morris/morris.min.js')}}"></script>
	<script src="{{url('assets/js/chart.morris.js')}}"></script>
	<script src="{{url('assets/js/script.js')}}"></script>
</body>

</html>




