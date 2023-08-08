<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathpostController;

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

Route::get('/', [MathpostController::class, 'home']);
Route::get('/posts/create', [MathpostController::class, 'create']);
Route::get('/posts/{post}', [MathpostController::class ,'detail']);
Route::post('/posts', [MathpostController::class, 'store']);
Route::get('/posts/{post}/edit', [MathpostController::class, 'edit']);
Route::put('/posts/{post}', [MathpostController::class, 'update']);
Route::delete('/posts/{post}', [MathpostController::class,'delete']);