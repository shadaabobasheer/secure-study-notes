<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        $query = Note::where('user_id', Auth::id());

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%$search%")
                  ->orWhere('content', 'like', "%$search%");
            });
        }

        if ($request->has('tag') && in_array($request->tag, ['study', 'daily'])) {
            $query->where('tag', $request->tag);
        }

        $notes = $query->latest()->get();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'tag' => 'required|in:study,daily'
        ]);

        Note::create([
            'title' => $request->title,
            'content' => $request->content,
            'tag' => $request->tag,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('notes.index')->with('success', 'Note added!');
    }

    public function edit(Note $note)
    {
        $this->authorizeNote($note);
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $this->authorizeNote($note);

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'tag' => 'required|in:study,daily'
        ]);

        $note->update($request->only('title', 'content', 'tag'));
        return redirect()->route('notes.index')->with('success', 'Note updated!');
    }

    public function destroy(Note $note)
    {
        $this->authorizeNote($note);
        $note->delete(); // soft delete
        return redirect()->route('notes.index')->with('success', 'Note archived!');
    }

    /* =========================
        ADVANCED ARCHIVE
    ========================== */

    public function archive(Request $request)
    {
        $notes = Note::onlyTrashed()
            ->where('user_id', Auth::id())
            ->when($request->tag, function ($q) use ($request) {
                $q->where('tag', $request->tag);
            })
            ->when($request->date, function ($q) use ($request) {
                $q->whereDate('deleted_at', $request->date);
            })
            ->orderBy('deleted_at', 'desc')
            ->get();

        return view('notes.archive', compact('notes'));
    }

    public function restore($id)
    {
        $note = Note::onlyTrashed()
            ->where('user_id', Auth::id())
            ->findOrFail($id);

        $note->restore();

        return redirect()->route('notes.archive')
            ->with('success', 'Note restored successfully!');
    }

    public function forceDelete($id)
    {
        $note = Note::onlyTrashed()
            ->where('user_id', Auth::id())
            ->findOrFail($id);

        $note->forceDelete();

        return redirect()->route('notes.archive')
            ->with('success', 'Note permanently deleted!');
    }

    /* ========================= */

    public function stats()
    {
        $study = Note::where('user_id', Auth::id())
            ->where('tag', 'study')->count();

        $daily = Note::where('user_id', Auth::id())
            ->where('tag', 'daily')->count();

        return view('notes.stats', compact('study', 'daily'));
    }

    private function authorizeNote(Note $note)
    {
        if ($note->user_id !== Auth::id()) {
            abort(403);
        }
    }
}
