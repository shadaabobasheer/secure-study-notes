@extends('layouts.app')

@section('content')
<h2 class="page-title">📊 Notes Statistics</h2>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon study-icon">
            <i class="bi bi-book"></i>
        </div>
        <div class="stat-info">
            <h3>Study Notes</h3>
            <p class="stat-number">{{ $study }}</p>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon daily-icon">
            <i class="bi bi-sun"></i>
        </div>
        <div class="stat-info">
            <h3>Daily Life Notes</h3>
            <p class="stat-number">{{ $daily }}</p>
        </div>
    </div>
</div>

<style>

.page-title {
    margin-bottom: 30px;
    font-weight: 700;
    color: #1e293b;
}


.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}


.stat-card {
    background: #ffffff;
    padding: 50px 40px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    display: flex;
    align-items: center;
    gap: 25px;
    transition: transform 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-10px);
}


.stat-icon {
    width: 80px;
    height: 80px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 35px;
}

.study-icon { background: rgba(37, 99, 235, 0.1); color: #2563eb; }
.daily-icon { background: rgba(16, 185, 129, 0.1); color: #10b981; }

.stat-info h3 {
    margin: 0;
    font-size: 20px;
    color: #64748b;
    font-weight: 600;
}

.stat-number {
    font-size: 48px;
    font-weight: 800;
    color: #1e293b;
    margin: 0;
}
</style>
@endsection
