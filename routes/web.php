<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\ExerciceController;
use App\Http\Controllers\annonceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;
use Illuminate\Http\RedirectResponse;


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

Route::get('/', function () {

    if(Auth::guest()){
        return view('auth/login');
    }
    else{
        return view('dashboard');
    }

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('/Mes_cours', CoursController::class)->names([
        'index' => 'cours'
    ]);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/tchat', function () {
    return view('tchat');
})->name('tchat');

Route::namespace('Prof')->prefix('prof')->name('prof.')->group(function(){
    Route::resource('users','\App\Http\Controllers\Prof\UsersController');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('question', QuestionController::class)->names([
        'index' => 'Question'
    ]);
});
//Route::get('/exercice/{id}', [ExerciceController::class, 'index'])->name('Exercice');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('exercice/{id}', ExerciceController::class)->names([
        'index' => 'Exercice'
    ]);
});


// Route::post('test','QuestionController@store');


Route::post('dashboard',[annonceController::class,'addAnnonce']);
