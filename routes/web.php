<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\BookingController;


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
    return view('welcome');
});

Route::get('hello', [RoomsController::class, 'hello']);

Route::post('rooms/create', [RoomsController::class, 'create']);
Route::get('rooms/list', [RoomsController::class, 'list']);
Route::get('rooms/item/{id}', [RoomsController::class, 'item']);
Route::put('rooms/update/{id}', [RoomsController::class, 'update']);
Route::delete('rooms/delete/{id}', [RoomsController::class, 'delete']);

Route::post('booking/create', [BookingController::class, 'create']);
Route::get('booking/list', [BookingController::class, 'list']);
Route::get('booking/item/{id}', [BookingController::class, 'item']);
Route::put('booking/update/{id}', [BookingController::class, 'update']);
Route::delete('booking/delete/{id}', [BookingController::class, 'delete']);

Route::post('building/create', [BuildingController::class, 'create']);
Route::get('building/list', [BuildingController::class, 'list']);
Route::get('building/item/{id}', [BuildingController::class, 'item']);
Route::put('building/update/{id}', [BuildingController::class, 'update']);
Route::delete('building/delete/{id}', [BuildingController::class, 'delete']);

