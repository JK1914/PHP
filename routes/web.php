<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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

Route::get('lesson/3', [FirstController::class, 'lesson']);
Route::get('calc', [FirstController::class, 'calculator']);
Route::post('user/create', [FirstController::class, 'create']);
Route::get('users', [FirstController::class, 'list']);
Route::get('user/{id}', [FirstController::class, 'item']);

Route::post('userinfo/create', [FirstController::class, 'createUserInfo']);
Route::get('usersinfo', [FirstController::class, 'listUserInfo']);
Route::get('userinfo/{id}', [FirstController::class, 'itemUserInfo']);
Route::get('userinfodelete/{id}', [FirstController::class, 'deleteUserInfo']);
