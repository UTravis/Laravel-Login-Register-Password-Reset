<x-header>

</x-header>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form" method="POST" action="{{ route('password.email') }}" >
					@csrf

					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif
					<span class="login100-form-title">
						Password Reset 
					</span>
                    <small>Enter your email so we can send you a password reset link</small>
					<div class="wrap-input100" >
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					@error('email')
						<span class="text-danger">{{ $message }}</span>
					@enderror

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Send
						</button>
					</div>


					<div class="text-center p-t-136">
						<a class="txt2" href="{{route('register2')}}">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<x-footer>

</x-footer>

	
