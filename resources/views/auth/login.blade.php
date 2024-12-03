<x-guest-layout>

     <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
   
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <div class="container">
        <div class="card border border-0 ">
            <!-- This should be center aligned  (This a Camblish logo) -->
       <div class="text-center"> <img src="https://camblish.co.za/wp-content/uploads/2023/02/1.-Camblish-Orginal-Logo-1418x1536.png" alt="Camblish Logo" class="img-fluid w-25">
           <h2 class=" fw-bold">Freelancer</h2>  </div>
             
            <div class="card-body">
                <h5 class=" text-center" >{{ __('Welcome Back') }}</h5>
                <p class="text-muted">{{ __('Login to access your account') }}</p>

                <!-- Social Login Buttons -->
                <div class="d-grid gap-3 mb-4">
                    <a href="{{ route('auth.google') }}" class="btn border border-1 d-flex align-items-center">
                    <i class="fa-brands fa-google me-4"></i>
                        {{ __('Continue with Google') }}
                    </a>
                    <a href="{{ route('auth.facebook') }}" class="btn border border-1 d-flex align-items-center">
                    <i class="fa-brands fa-facebook me-4" ></i> 
                        {{ __('Continue with Facebook') }}
                    </a>
                </div>

                <!-- Divider -->
                <div class="divider">
                    <span>{{ __('OR') }}</span>
                </div>

                <!-- Email Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <input 
                            id="email" 
                            class="form-control" 
                            type="email" 
                            name="email" 
                            placeholder="{{ __('Email Address') }}" 
                            value="{{ old('email') }}" 
                            required 
                        />
                        @error('email')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input 
                            id="password" 
                            class="form-control" 
                            type="password" 
                            name="password" 
                            placeholder="{{ __('Password') }}" 
                            required 
                        />
                        @error('password')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check mb-3">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        <label for="remember_me" class="form-check-label">{{ __('Remember Me') }}</label>
                    </div>

                    <div class="text-center mt-3 mb-4">
                        <a href="{{ route('password.request') }}" class="text-primary">{{ __('Forgot Password?') }}</a>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mb-3">{{ __('Log In') }}</button>
                </form>

                <div class="text-center mt-4">
                    <span class="text-muted">{{ __("Don't have an account?") }}</span>
                    <a href="{{ route('register') }}" class="text-primary">{{ __('Register') }}</a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
