<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReponseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::resource('Formulaire', FormulaireController::class);
//Route::resource('qcm',FormulaireController::class);
Route::get('/formulaire',FormulaireController::class.'@afficher');
Route::get('/questions/{id}',QuestionController::class.'@afficher')->name('questions');
Route::get('/reponses',ReponseController::class.'@afficher')->name('reponses');
