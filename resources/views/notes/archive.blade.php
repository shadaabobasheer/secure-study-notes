@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class="mb-3">Archived Notes</h2>

    {{-- Filters --}}
    <form method="GET" class="row mb-4">
        <div class="col-md-4">
            <select name="tag" class="form-select">
                <option value="">All Categories</option>
                <option value="study" {{ request()->tag=='study'?'selected':'' }}>Study</option>
                <option value="daily" {{ request()->tag=='daily'?'selected':'' }}>Daily Life</option>
            </select>
        </div>

        <div class="col-md-4">
            <input type="date" name="date" value="{{ request()->date }}" class="form-control">
        </div>

        <div class="col-md-4">
            <button class="btn btn-primary">Filter</button>
            <a href="{{ route('notes.archive') }}" class="btn btn-secondary">Reset</a>
        </div>
    </form>

    @if($notes->isEmpty())
        <div class="alert alert-info text-center">
            No archived notes found
        </div>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Deleted At</th>
                    <th width="200">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notes as $note)
                <tr>
                    <td>{{ $note->title }}</td>
                    <td>{{ ucfirst($note->tag) }}</td>
                    <td>{{ $note->deleted_at->format('d M Y H:i') }}</td>
                    <td>
                        {{-- Restore --}}
                        <form action="{{ route('notes.restore',$note->id) }}" method="POST" style="display:inline">
                            @csrf
                            <button class="btn btn-success btn-sm">Restore</button>
                        </form>

                        {{-- Permanent Delete --}}
                        <form action="{{ route('notes.forceDelete',$note->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete permanently?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
