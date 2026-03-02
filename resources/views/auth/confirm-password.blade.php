@extends('layouts.guest')

@section('content')
<h4 class="text-center mb-3">Confirm Password</h4>

<p class="text-muted text-center mb-4">
    Please confirm your password before continuing.
</p>

<x-auth-errors />

<form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input
            id="password"
            type="password"
            name="password"
            class="form-control"
            required
            autofocus
        >
    </div>

    <button type="submit" class="btn btn-primary w-100">
        Confirm Password
    </button>

    @if (Route::has('password.request'))
        <div class="text-center mt-3">
            <a href="{{ route('password.request') }}" class="text-decoration-none">
                Forgot your password?
            </a>
        </div>
    @endif
</form>
@endsection
