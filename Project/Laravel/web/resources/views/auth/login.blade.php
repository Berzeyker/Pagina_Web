@extends('layouts.app', ['withoutNavbar' => true]) 

@section('title', 'Login')

@section('content')
    <div class="container">
        <div class="image-box"></div>
        <div class="login-box">
            <h2>Login</h2>
            <!-- Laravel's login form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf <!-- CSRF token for security -->

                <div class="form__group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="username@gmail.com" required autofocus>
                    
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form__group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Password" required>
                    
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember me checkbox -->
                <div class="form__group">
                    <label for="remember_me">
                        <input type="checkbox" name="remember" id="remember_me">
                        Remember Me
                    </label>
                </div>

                <a href="{{ route('password.request') }}" class="forgot__password">Forgot Password?</a>

                <center>
                    <button type="submit" class="btn">Log in</button>
                </center>
                
                <p class="continue__with">Or Continue With</p>
                
                <div class="social__buttons">
                    <button type="button" class="google-btn">
                        <!-- Google SVG Button Here -->
                    </button>
                    <button type="button" class="github-btn">
                        <!-- GitHub SVG Button Here -->
                    </button>
                    <button type="button" class="facebook-btn">
                        <!-- Facebook SVG Button Here -->
                    </button>
                </div>
                
                <p class="register">
                    Don't have an account yet? <a href="{{ route('register') }}">Register for free</a>
                </p>
            </form>
        </div>
    </div>
@endsection
