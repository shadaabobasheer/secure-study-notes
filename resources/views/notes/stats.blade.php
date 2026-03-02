@extends('layouts.app')

@section('content')
<h2>Notes Statistics</h2>

<div class="stats-grid">
    <div class="stat-card">
        <h3>Study Notes</h3>
        <p>{{ $study }}</p>
    </div>
    <div class="stat-card">
        <h3>Daily Life Notes</h3>
        <p>{{ $daily }}</p>
    </div>
</div>

<style>
.stats-grid { display: flex; gap: 20px; }
.stat-card { flex: 1; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); text-align: center; }
.stat-card h3 { margin-bottom: 10px; }
.stat-card p { font-size: 24px; font-weight: bold; color: #3490dc; }
</style>
@endsection
