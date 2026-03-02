@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 700px">
{{-- Validation Errors --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <h3 class="mb-4 text-center">My Profile</h3>

    {{-- Update Name --}}
    <div class="card mb-4">
        <div class="card-header">Update Profile Information</div>
        <div class="card-body">

            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text"
                           class="form-control"
                           name="name"
                           value="{{ old('name', auth()->user()->name) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           class="form-control"
                           value="{{ auth()->user()->email }}"
                           disabled>
                </div>

                <button class="btn btn-primary">
                    Save Changes
                </button>
            </form>

        </div>
    </div>

    {{-- Change Password --}}
    <div class="card mb-4">
        <div class="card-header">Change Password</div>
        <div class="card-body">

            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Current Password</label>
                    <input type="password" name="current_password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm New Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>

                <button class="btn btn-warning">
                    Update Password
                </button>
            </form>

        </div>
    </div>

</div>
@endsection
