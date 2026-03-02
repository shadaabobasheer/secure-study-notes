@extends('layouts.app')

@section('content')
<h2>Add New Note</h2>
{{-- Validation Errors --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('notes.store') }}" method="POST">
    @csrf
    <div>
        <label>Title</label>
        <input type="text" name="title" required value="{{ old('title') }}">
    </div>
    <div>
        <label>Content</label>
        <textarea name="content" required>{{ old('content') }}</textarea>
    </div>
    <div>
        <label>Category</label>
        <select name="tag" required>
            <option value="study" {{ old('tag')=='study'?'selected':'' }}>Study</option>
            <option value="daily" {{ old('tag')=='daily'?'selected':'' }}>Daily Life</option>
        </select>
    </div>
    <button type="submit">Add Note</button>
</form>

<style>
form div { margin-bottom: 10px; }
input, textarea, select { width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc; }
button { padding: 8px 15px; border: none; background: #3490dc; color: #fff; border-radius: 5px; cursor: pointer; }
</style>
@endsection
