<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Study Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>

        body {
            background: radial-gradient(circle at center, #f1f5f9 0%, #e2e8f0 100%) !important;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .auth-card {
            background: #ffffff;
            width: 420px;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .auth-icon {
            color: #2563eb;
            font-size: 3rem;
        }
    </style>
</head>
<body>

<div class="auth-card shadow-lg">
    <div class="text-center mb-4">
        <i class="bi bi-shield-lock-fill auth-icon"></i>
        <h4 class="mt-2" style="font-weight: 700; color: #1e293b;">Secure Study Notes</h4>
        <p class="text-muted small">Manage your notes safely</p>
    </div>


    @yield('content')
</div>

</body>
</html>
