@extends('layouts.app')

@section('content')
<div class="container pb-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title"><i class="bi bi-archive-fill me-2 text-secondary"></i>Archived Notes</h2>
        <span class="badge bg-secondary rounded-pill">{{ $notes->count() }} Notes</span>
    </div>


    <div class="filter-card shadow-sm mb-4">
        <form method="GET" class="row g-3">
            <div class="col-md-4">
                <label class="form-label small fw-bold text-muted">Category</label>
                <select name="tag" class="form-select custom-input">
                    <option value="">All Categories</option>
                    <option value="study" {{ request()->tag=='study'?'selected':'' }}>Study</option>
                    <option value="daily" {{ request()->tag=='daily'?'selected':'' }}>Daily Life</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label small fw-bold text-muted">Date Deleted</label>
                <input type="date" name="date" value="{{ request()->date }}" class="form-control custom-input">
            </div>

            <div class="col-md-4 d-flex align-items-end gap-2">
                <button class="btn btn-primary-custom flex-grow-1">
                    <i class="bi bi-filter me-1"></i> Filter
                </button>
                <a href="{{ route('notes.archive') }}" class="btn btn-light-custom">
                    <i class="bi bi-arrow-clockwise"></i> Reset
                </a>
            </div>
        </form>
    </div>

    @if($notes->isEmpty())
        <div class="empty-state">
            <i class="bi bi-folder-x"></i>
            <h4>No archived notes found</h4>
            <p>You haven't deleted any notes that match these criteria.</p>
        </div>
    @else

        <div class="table-container shadow-sm">
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Deleted At</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($notes as $note)
                    <tr>
                        <td class="fw-bold text-dark">{{ $note->title }}</td>
                        <td>
                            <span class="badge-category {{ $note->tag == 'study' ? 'tag-study' : 'tag-daily' }}">
                                {{ ucfirst($note->tag) }}
                            </span>
                        </td>
                        <td class="text-muted small">{{ $note->deleted_at->format('d M Y H:i') }}</td>
                        <td class="text-end">
                            <form action="{{ route('notes.restore',$note->id) }}" method="POST" style="display:inline">
                                @csrf
                                <button class="btn btn-action-success me-1" title="Restore">
                                    <i class="bi bi-arrow-counterclockwise"></i> Restore
                                </button>
                            </form>

                            <form action="{{ route('notes.forceDelete',$note->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-action-danger"
                                        onclick="return confirm('Delete permanently? This action cannot be undone.')" title="Delete Permanently">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>

<style>
    .page-title { font-weight: 800; color: #1e293b; }


    .filter-card {
        background: white;
        padding: 25px;
        border-radius: 16px;
        border: none;
    }

    .custom-input {
        border-radius: 10px;
        border: 1px solid #e2e8f0;
        padding: 10px 15px;
        background-color: #f8fafc;
    }


    .table-container {
        background: white;
        border-radius: 16px;
        overflow: hidden;
    }

    .table thead {
        background-color: #f8fafc;
    }

    .table thead th {
        padding: 15px 20px;
        border: none;
        color: #64748b;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .table tbody td {
        padding: 18px 20px;
        border-bottom: 1px solid #f1f5f9;
    }


    .badge-category {
        padding: 5px 12px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 600;
    }
    .tag-study { background: #dbeafe; color: #2563eb; }
    .tag-daily { background: #dcfce7; color: #16a34a; }


    .btn-primary-custom {
        background: #2563eb;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-light-custom {
        background: #f1f5f9;
        color: #64748b;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        text-decoration: none;
    }

    .btn-action-success {
        background: #ecfdf5;
        color: #059669;
        border: none;
        border-radius: 8px;
        padding: 5px 12px;
        font-size: 14px;
    }

    .btn-action-danger {
        background: #fef2f2;
        color: #dc2626;
        border: none;
        border-radius: 8px;
        padding: 5px 12px;
        font-size: 14px;
    }


    .empty-state {
        text-align: center;
        padding: 60px;
        background: rgba(255, 255, 255, 0.5);
        border: 2px dashed #cbd5e1;
        border-radius: 20px;
    }
    .empty-state i { font-size: 50px; color: #cbd5e1; }
</style>
@endsection
