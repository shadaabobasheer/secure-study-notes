@extends('layouts.guest')

@section('content')
<h4 class="text-center mb-3">Verify Your Email</h4>

<p class="text-muted text-center">
    Thanks for signing up! Please verify your email address.
</p>

@if (session('status') == 'verification-link-sent')
    <div class="alert alert-success">
        A new verification link has been sent.
    </div>
@endif



<form method="POST" action="{{ route('verification.send') }}">
    @csrf
    <button class="btn btn-primary w-100 mb-2">
        Resend Verification Email
    </button>
</form>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="btn btn-outline-secondary w-100">
        Log Out
    </button>
</form>
@endsection
