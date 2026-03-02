@extends('layouts.app')

@section('content')
<div class="dashboard-wrapper">

    <div class="dashboard-card">
        <h2>📘 Notes</h2>
        <p>Manage your study notes easily and securely</p>

        <a href="{{ route('notes.index') }}" class="btn-go">
            Go to Notes
        </a>
    </div>

</div>

<style>

.dashboard-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 70vh;
}


.dashboard-card {
    background: #ffffff;
    width: 420px;
    padding: 40px;
    text-align: center;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease;
}

.dashboard-card:hover {
    transform: translateY(-5px);
}


.dashboard-card h2 {
    font-size: 28px;
    margin-bottom: 15px;
    color: #2d3748;
}


.dashboard-card p {
    font-size: 16px;
    color: #555;
    margin-bottom: 30px;
}


.btn-go {
    display: inline-block;
    padding: 12px 30px;
    background-color: #2563eb;
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    border-radius: 8px;
    transition: background 0.3s ease;
}

.btn-go:hover {
    background-color: #1e40af;
}
</style>
@endsection
