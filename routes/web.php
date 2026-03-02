<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/archive', [NoteController::class,'archive'])->name('notes.archive');

Route::post('/archive/{id}/restore', [NoteController::class,'restore'])->name('notes.restore');
Route::delete('/archive/{id}/delete', [NoteController::class,'forceDelete'])->name('notes.forceDelete');

    Route::resource('notes', NoteController::class);

    Route::get('/archive', [NoteController::class,'archive'])->name('notes.archive');
    Route::get('/stats', [NoteController::class,'stats'])->name('notes.stats');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
