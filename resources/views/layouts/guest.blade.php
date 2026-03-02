<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Study Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-primary bg-gradient min-vh-100 d-flex align-items-center justify-content-center">

<div class="card shadow-lg border-0 rounded-4 p-4" style="width: 420px;">
    <div class="text-center mb-3">
        <i class="bi bi-shield-lock-fill fs-1 text-primary"></i>
        <h4 class="mt-2">Secure Study Notes</h4>
        <p class="text-muted small">Manage your notes safely</p>
    </div>

    @yield('content')
</div>

</body>
</html>
