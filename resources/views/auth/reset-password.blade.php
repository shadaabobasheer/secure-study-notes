@extends('layouts.guest')

@section('content')
<form method="POST" action="{{ route('password.store') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
    <input type="password" name="password" class="form-control mb-2" placeholder="New Password" required>
    <input type="password" name="password_confirmation" class="form-control mb-3" placeholder="Confirm Password" required>

    <button class="btn btn-primary w-100">Reset Password</button>
</form>
@endsection
