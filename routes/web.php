<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [TestController::class,'index']);

Route::get('/contact', [ContactController::class,'index']);

Route::get('/contact/store', [ContactController::class,'store']);

Route::get('/register/seeker', [UserController::class,'createSeeker'])->name('create.seeker');
Route::post('/register/seeker', [UserController::class,'storeSeeker'])->name('store.seeker');