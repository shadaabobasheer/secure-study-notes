@extends('layouts.app')

@section('content')
<div class="controls">
    <a href="{{ route('notes.create') }}" class="btn">
    <i class="bi bi-plus-circle"></i> Add Note
</a>
</div>

<form method="GET" action="{{ route('notes.index') }}" style="margin-bottom:15px;">
    <input type="text" name="search" placeholder="Search notes..." value="{{ request()->search }}">
    <select name="tag">
        <option value="">All Categories</option>
        <option value="study" {{ request()->tag=='study'?'selected':'' }}>Study</option>
        <option value="daily" {{ request()->tag=='daily'?'selected':'' }}>Daily Life</option>
    </select>
    <button type="submit" class="submit-btn">Filter</button>
</form>

@if($notes->count() == 0)
<div class="empty-state">
    <i class="fa fa-sticky-note fa-3x"></i>
    <h2>No notes found</h2>
    <p>Add your first note to get started!</p>
</div>
@else
<div class="notes-grid">
    @foreach($notes as $note)
    <div class="note-card">
        <div class="note-header">
            <span class="tag">{{ $note->tag=='study'?'Study':'Daily Life' }}</span>
            <div class="actions">
                <div class="actions">
    <a href="{{ route('notes.edit', $note) }}" title="Edit">
        <i class="bi bi-pencil-square fs-5"></i>
    </a>

    <form action="{{ route('notes.destroy', $note) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" title="Delete">
            <i class="bi bi-trash fs-5"></i>
        </button>
    </form>
</div>
            </div>
        </div>
        <h3>{{ $note->title }}</h3>
        <p>{{ $note->content }}</p>
        <small>{{ $note->created_at->format('d M Y H:i') }}</small>
    </div>
    @endforeach
</div>
@endif

<style>
.notes-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px,1fr)); gap: 20px; }
.note-card { background: #fff; padding: 15px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
.note-header { display: flex; justify-content: space-between; align-items: center; }
.note-header .tag { font-weight: bold; color: #fff; padding: 3px 8px; border-radius: 4px; background-color: #3490dc; }
.actions a, .actions button { background: none; border: none; cursor: pointer; color: #3490dc; margin-left: 5px; }
.empty-state { text-align: center; color: #888; }
.controls { margin-bottom: 15px; }
.btn { background: #3490dc; color: #fff; padding: 8px 12px; border-radius: 6px; text-decoration: none; }
.actions a,
.actions button {
    background: none;
    border: none;
    cursor: pointer;
    color: #0d6efd;
    margin-left: 8px;
}

.actions button {
    color: #dc3545;
}

.actions a:hover,
.actions button:hover {
    opacity: 0.7;
}
</style>
@endsection
