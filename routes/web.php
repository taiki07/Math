<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MathpostController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MathuserController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(MathpostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'home')->name('home');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/create', 'create')->name('create');
    Route::get('/posts/{post}', 'detail')->name('detail');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
});

Route::get('/schools/{school}', [SchoolController::class,'home'])->middleware("auth");
Route::get('/units/{unit}', [UnitController::class,'home'])->middleware("auth");
Route::get('/tests/{test}', [TestController::class,'home'])->middleware("auth");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';