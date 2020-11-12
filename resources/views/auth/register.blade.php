{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
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
			<div class="wrap-login100 p-t-50 p-b-30">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					@csrf
					<div class="login100-form-avatar">
						{{-- <img src="/colorliblogin/images/avatar-01.jpg" alt="AVATAR"> --}}
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
                        Isi form singkat dibawah untuk menjadi calon member!
                    </span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="fullname" placeholder="Nama Lengkap" required value="{{ old('fullname') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="name" placeholder="Nama Panggilan" required value="{{ old('name') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-tag"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
                    @error('email')
                        <div class="w-100 text-center mb-2">
                            <small class="text-white">{{ $message }}</small>
                        </div>
                    @enderror

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                    </div>
                    
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                    </div>
                    @error('password')
                        <div class="w-100 text-center">
                            <small class="text-white">{{ $message }}</small>
                        </div>
                    @enderror

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit">
							Register
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230"></div>

					<div class="text-center w-full">
						<a class="txt1" href="{{ route('login') }}">
							<i class="fa fa-long-arrow-left"></i>						
							Sudah menjadi member?
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
