<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MatController;
use App\Http\Controllers\EpreuveController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\TestController;

/*Route::get('/epreuve', [EpreuveController::class, 'index']);

Route::get('/addep', [EpreuveController::class, 'store']);

Route::get('/matiere',  [MatController::class, 'index']);

Route::get('/addmat', [MatController::class, 'store']);

Route::get('/formMat',  [MatController::class,'create']);

Route::post('/formMat', [MatController::class,'store']);

Route::get('/formEp',  [EpreuveController::class,'create']);

Route::post('/formEp', [EpreuveController::class,'store']);

Route::resource('test',TestController::class);*/

Route::resource('matieres',controller: MatiereController::class);
Route::resource('epreuves',controller: EpreuveController::class);








