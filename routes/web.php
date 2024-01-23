<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConciergeController;
use App\Http\Controllers\RichiestaController;

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

// rotta form login
Route::get('/', [PublicController::class, 'home'])->name('home');

// rotta funzione login
Route::post('/', [RoomController::class, 'login'])->name('login');

//rotta chiedi al concierge
Route::get('/chiedialconcierge', [ConciergeController::class, 'chiediConcierge'])->name('chiediconcierge');
Route::post('/inviarichiesta', [ConciergeController::class, 'inviaRichiesta'])->name('inviarichiesta');

// rotta homeservice
Route::get('/homeservice', [PublicController::class, 'homeservice'])->name('homeservice');

// rotta category show
Route::get('/category/{id}', [CategoryController::class, 'categoryShow'])->name('categoryshow');

// rotta cheese-tasting
Route::get('/cheese-tasting', [CategoryController::class, 'cheeseTasting'])->name('gastronomieexperience.cheesetasting');

// rotta wine-tasting
Route::get('/wine-tasting', [CategoryController::class, 'wineTasting'])->name('gastronomieexperience.winetasting');

// rotta cocktail-masterclass
Route::get('/cocktail-masterclass', [CategoryController::class, 'cocktailMasterclass'])->name('gastronomieexperience.cocktailmasterclass');

// rotta coocking-class
Route::get('/cooking-class', [CategoryController::class, 'coockingClass'])->name('gastronomieexperience.cookingclass');


