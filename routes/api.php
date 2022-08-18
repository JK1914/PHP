<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\BookingController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('rooms/create', [RoomsController::class, 'create']);
Route::get('rooms', [RoomsController::class, 'list']);
Route::get('rooms/{id}', [RoomsController::class, 'item']);
Route::put('rooms/update/{id}', [RoomsController::class, 'update']);
Route::delete('rooms/{id}', [RoomsController::class, 'delete']);

Route::post('booking/create', [BookingController::class, 'create']);
Route::get('bookings', [BookingController::class, 'list']);
Route::get('booking/{id}', [BookingController::class, 'item']);
Route::put('booking/update/{id}', [BookingController::class, 'update']);
Route::delete('booking/{id}', [BookingController::class, 'delete']);

Route::post('building/create', [BuildingController::class, 'create']);
Route::get('buildings', [BuildingController::class, 'list']);
Route::get('building/{id}', [BuildingController::class, 'item']);
Route::put('building/update/{id}', [BuildingController::class, 'update']);
Route::delete('building/{id}', [BuildingController::class, 'delete']);