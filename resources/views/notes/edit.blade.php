@extends('layouts.app')

@section('content')
<h2>Edit Note</h2>

<form action="{{ route('notes.update', $note) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>Title</label>
        <input type="text" name="title" required value="{{ old('title',$note->title) }}">
    </div>
    <div>
        <label>Content</label>
        <textarea name="content" required>{{ old('content',$note->content) }}</textarea>
    </div>
    <div>
        <label>Category</label>
        <select name="tag" required>
            <option value="study" {{ $note->tag=='study'?'selected':'' }}>Study</option>
            <option value="daily" {{ $note->tag=='daily'?'selected':'' }}>Daily Life</option>
        </select>
    </div>
    <button type="submit">Update Note</button>
</form>

<style>
form div { margin-bottom: 10px; }
input, textarea, select { width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc; }
button { padding: 8px 15px; border: none; background: #3490dc; color: #fff; border-radius: 5px; cursor: pointer; }
</style>
@endsection
