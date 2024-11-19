<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\EpreuveController;

Route::get('/', function () {
    redirect(url('./matieres'));

});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::middleware('auth')->group(function () {
    Route::get('epreuves/{epreuve}/edit', [EpreuveController::class, 'edit'])->name('epreuves.edit');
    Route::delete('epreuves/{epreuve}', [EpreuveController::class, 'destroy'])->name('epreuves.destroy');
    Route::get('matieres/{matiere}/edit', [MatiereController::class, 'edit'])->name('matieres.edit');
    Route::delete('matieres/{matiere}', [MatiereController::class, 'destroy'])->name('matieres.destroy');

});

Route::resource('epreuves', EpreuveController::class)->except(['edit','destroy']);
Route::resource('matieres', MatiereController::class)->except(['edit', 'destroy']);






require __DIR__.'/auth.php';
