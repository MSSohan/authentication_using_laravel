@extends("layouts.app")

@section("title", "Login Page")

@section("content")

<div class="container">
    <div class="login-form">
        <form class="form" action="{{ route('login') }}" method="post">
            <h2>Login</h2>
            @csrf
            {{-- <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Email">
                @error("email")
                <div class="error">{{ $message }}</div>
                @enderror
            </div> --}}
            <div class="form-group">
                <input type="tel" name="phone" id="phone" placeholder="Phone">
                @error("phone")
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Password">
                @error("password")
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div class="form-group">
                <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
            </div>
        </form>
    </div>
</div>
@endsection
