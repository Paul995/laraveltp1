<?php

use Illuminate\Support\Facades\Route;
use App\HEtudiantControllers\VillesController;
use App\Http\Controllers\EtudiantsController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/villes', [VillesController::class, 'index'])->name('villes.index');
Route::get('/etudiants', [EtudiantsController::class, 'index'])->name('etudiants.index');

//READ
Route::get('/etudiant/{etudiant}', [EtudiantsController::class, 'show'])->name('etudiants.show');


//UPDATE
Route::get('/edit/etudiant/{etudiant}', [EtudiantsController::class, 'edit'])->name('etudiant.edit'); 
Route::put('/edit/etudiant/{etudiant}', [EtudiantsController::class, 'update'])->name('etudiant.update'); //meme route/page  mais avec post


//CREATE
//inverse pour que ce soit pas confondu avec id (donc show)
Route::get('/create/etudiant', [EtudiantsController::class, 'create'])->name('etudiant.create');
Route::post('/create/etudiant', [EtudiantsController::class, 'store'])->name('etudiant.store'); //meme route/page  mais avec post


//DELETE
Route::delete('/etudiant/{etudiant}', [EtudiantsController::class, 'destroy'])->name('etudiant.delete'); 
