{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | GIB Database Kader</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/colorliblogin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/colorliblogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/colorliblogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/colorliblogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/colorliblogin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/colorliblogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/colorliblogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/colorliblogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="/colorliblogin/css/main.css">
<!--===============================================================================================-->
	{{-- CUSTOM CSS --}}
	<link rel="stylesheet" type="text/css" href="/colorliblogin/css/mycustom.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100 gambar-bg">
			<div class="wrap-login100 p-b-30 batas-atas">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
					@csrf
					<div class="login100-form-avatar" style="overflow: visible;">
						<img src="https://infaqberasjogja.com/wp-content/uploads/2020/05/4-o.png" style="height: 250px;width: auto;transform: translate(-120px,-70px)" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						{{-- PASKAS --}}
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

                    @error('email')
                        <div class="w-100 text-center mb-3">
                            <small class="text-white">Email atau password yang diisikan salah</small>
                        </div>
					@enderror

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-140">
						<a href="#" class="txt1">
							Lupa Password?
						</a>
					</div>

					<div class="text-center pt-3 w-full daftar-box">
						<p class="pb-2 txt1">Belum jadi member?</p>
						<a class="button-daftar mt-2" href="{{ route('register') }}">
							DAFTAR SEKARANG!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="/colorliblogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/colorliblogin/vendor/bootstrap/js/popper.js"></script>
	<script src="/colorliblogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/colorliblogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/colorliblogin/js/main.js"></script>

</body>
</html>