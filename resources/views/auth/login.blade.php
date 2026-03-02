@extends('layouts.guest')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required autofocus>
        <x-auth-errors />
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <button class="btn btn-primary w-100">Login</button>

    @if (Route::has('password.request'))
        <div class="text-center mt-3">
            <a href="{{ route('password.request') }}">Forgot your password?</a>
        </div>
    @endif

    <div class="text-center mt-2">
        <a href="{{ route('register') }}">Create account</a>
    </div>
</form>
@endsection
