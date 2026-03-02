<!DOCTYPE html>
<html>
<head>
    <title>Secure Study Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/dashboard">Secure Notes</a>
        <div class="d-flex align-items-center">

    <!-- Links -->
    <div class="d-flex gap-4 me-4">
        <a href="{{ route('notes.index') }}" class="nav-link text-white">
            Notes
        </a>

        <a href="{{ route('notes.stats') }}" class="nav-link text-white">
            Stats
        </a>

        <a href="{{ route('notes.archive') }}" class="nav-link text-white">
            Archive
        </a>

        <a href="{{ route('profile.edit') }}" class="nav-link text-white">
    Profile
</a>
    </div>

    <!-- Logout -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-outline-light btn-sm">
            Logout
        </button>
    </form>

</div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
