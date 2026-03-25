<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Secure Study Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>

        body {
            background: radial-gradient(circle at center, #f1f5f9 0%, #e2e8f0 100%) !important;
            background-attachment: fixed;
            min-height: 100vh;
            color: #1e293b;
        }


        .navbar-custom {
            background: #1e293b;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 12px 0;
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .nav-link {
            font-weight: 500;
            transition: all 0.3s ease;
            opacity: 0.85;
        }

        .nav-link:hover {
            opacity: 1;
            transform: translateY(-1px);
            color: #3b82f6 !important;
        }


        .btn-logout {
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            padding: 6px 16px;
            transition: all 0.3s;
        }

        .btn-logout:hover {
            background: #ef4444;
            border-color: #ef4444;
            color: white;
        }

        .card {
            border: none !important;
            border-radius: 16px !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="/dashboard">
             <i class="bi bi-journal-check me-2"></i>Secure Notes
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto gap-3 align-items-center">
                <a href="{{ route('notes.index') }}" class="nav-link text-white">Notes</a>
                <a href="{{ route('notes.stats') }}" class="nav-link text-white">Stats</a>
                <a href="{{ route('notes.archive') }}" class="nav-link text-white">Archive</a>
                <a href="{{ route('profile.edit') }}" class="nav-link text-white me-2">Profile</a>

                <form method="POST" action="{{ route('logout') }}" class="m-0">
                    @csrf
                    <button class="btn btn-logout text-white btn-sm">
                        <i class="bi bi-box-arrow-right me-1"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>

</body>
</html>
