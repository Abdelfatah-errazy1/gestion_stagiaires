<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\AbsenceController;

Route::resource('stagiaires', StagiaireController::class);
Route::resource('stages', StageController::class);
Route::resource('absences', AbsenceController::class);

Route::get('/', function () {
    return view('pages.index');
});
