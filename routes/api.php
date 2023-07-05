<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ParcelsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//user
Route::get('/users', [UserController::class, 'index'])
    ->name('user.index');
Route::get('/users/{user}', [UserController::class, 'show'])
    ->name('user.show');
Route::post('/users', [UserController::class, 'store'])
    ->name('user.store');
Route::put('/users/{user}', [UserController::class, 'update'])
    ->name('user.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])
    ->name('user.destroy');
//parcels
Route::get('/parcels', [ParcelsController::class, 'index'])
    ->name('parcels.index');
Route::get('/parcels/{parcel_number}', [ParcelsController::class, 'show'])
    ->name('parcels.show');
Route::post('/parcels', [ParcelsController::class, 'store'])
    ->name('parcels.store');
Route::put('/parcels/{parcel_number}', [ParcelsController::class, 'update'])
    ->name('parcels.update');
Route::delete('/parcels/{parcel_number}', [ParcelsController::class, 'destroy'])
    ->name('parcels.destroy');