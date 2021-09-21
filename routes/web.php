<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
// http://127.0.0.1:8001/user/1
Route::get('/user/create', [UserController::class, 'createUser']);
Route::get('/user/{id}', [UserController::class, 'getUser']);
// 16, 17 라인이 바뀌면 user/create 가 user/{id} 로 인식한다.

Route::get('/question/{user_id}/create', [UserController::class, 'createQuestion']);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
