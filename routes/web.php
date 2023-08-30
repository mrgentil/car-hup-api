<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function (){
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/search-users', [UserController::class, 'search'])->name('search.post');
    Route::patch('/users/{user}/update-status', [UserController::class, 'updateStatus'])->name('users.updateStatus');

    Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
    Route::post('/cars-add', [CarController::class, 'store'])->name('cars.store');
    Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');
    Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
    Route::patch('/cars/{car}/update-status', [CarController::class, 'updateStatus'])->name('cars.updateStatus');

});
