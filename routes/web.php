<?php

use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\DashboardController;
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

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\StagiaireController;
use Illuminate\Support\Facades\Route;

// Stagiaires routes
Route::get('stagiaires', [StagiaireController::class, 'index'])->name('stagiaires.index');
Route::get('stagiaires/create', [StagiaireController::class, 'create'])->name('stagiaires.create');
Route::post('stagiaires', [StagiaireController::class, 'store'])->name('stagiaires.store');
Route::get('stagiaires/show/{stagiaire}', [StagiaireController::class, 'show'])->name('stagiaires.show');
Route::get('stagiaires/{stagiaire}/edit', [StagiaireController::class, 'edit'])->name('stagiaires.edit');
Route::put('stagiaires/{stagiaire}', [StagiaireController::class, 'update'])->name('stagiaires.update');
Route::get('stagiaires/{stagiaire}', [StagiaireController::class, 'destroy'])->name('stagiaires.destroy');

// Stages routes
Route::get('stages', [StageController::class, 'index'])->name('stages.index');
Route::get('stages/create', [StageController::class, 'create'])->name('stages.create');
Route::post('stages', [StageController::class, 'store'])->name('stages.store');
Route::get('stages/show/{stage}', [StageController::class, 'show'])->name('stages.show');
Route::get('stages/{stage}/edit', [StageController::class, 'edit'])->name('stages.edit');
Route::put('stages/{stage}', [StageController::class, 'update'])->name('stages.update');
Route::get('stages/{stage}', [StageController::class, 'destroy'])->name('stages.destroy');

// Absences routes
Route::get('absences', [AbsenceController::class, 'index'])->name('absences.index');
Route::get('absences/create', [AbsenceController::class, 'create'])->name('absences.create');
Route::post('absences', [AbsenceController::class, 'store'])->name('absences.store');
Route::get('absences/show/{absence}', [AbsenceController::class, 'show'])->name('absences.show');
Route::get('absences/{absence}/edit', [AbsenceController::class, 'edit'])->name('absences.edit');
Route::put('absences/{absence}', [AbsenceController::class, 'update'])->name('absences.update');
Route::get('absences/{absence}', [AbsenceController::class, 'destroy'])->name('absences.destroy');

Route::get('/save',[DatabaseController::class, 'saveToExcel']);
Route::get('/',[DashboardController::class, 'index']);
Route::get('/division/{code}',[DashboardController::class, 'show'])->name('stagiaires.division');
Route::post('/import',[DatabaseController::class, 'import'])->name('import.excel');
