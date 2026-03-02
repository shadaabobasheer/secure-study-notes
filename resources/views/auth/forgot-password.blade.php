@extends('layouts.guest')

@section('content')
<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="mb-3 text-center text-muted">
        Enter your email to receive reset link
    </div>

    <input type="email" name="email" class="form-control mb-3" required>

    <button class="btn btn-primary w-100">Send Reset Link</button>
</form>
@endsection
