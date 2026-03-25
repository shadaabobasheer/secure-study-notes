@extends('layouts.app')

@section('content')
<div class="dashboard-wrapper">

    <div class="dashboard-card">
        <div class="card-icon">📘</div>
        <h2>Notes</h2>
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
    min-height: 85vh;
    background: radial-gradient(circle at center, #f1f5f9 0%, #e2e8f0 100%);
}

.dashboard-card {
    background: #ffffff;
    width: 400px;
    padding: 50px 40px;
    text-align: center;
    border-radius: 24px;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.dashboard-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
}


.card-icon {
    font-size: 50px;
    margin-bottom: 20px;
}

.dashboard-card h2 {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 12px;
    color: #1e293b;
}

.dashboard-card p {
    font-size: 16px;
    color: #64748b;
    margin-bottom: 35px;
    line-height: 1.6;
}


.btn-go {
    display: inline-block;
    padding: 14px 40px;
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    color: #ffffff;
    text-decoration: none;
    font-weight: 600;
    font-size: 17px;
    border-radius: 12px;
    box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
    transition: all 0.3s ease;
}

.btn-go:hover {
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    box-shadow: 0 20px 25px -5px rgba(37, 99, 235, 0.4);
    transform: scale(1.02);
}
</style>
@endsection
