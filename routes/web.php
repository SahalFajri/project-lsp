<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Models\Aspirasi;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', [AspirasiController::class, 'create']);
Route::post('/home', [AspirasiController::class, 'store']);

Route::get('/aspirasis', [AspirasiController::class, 'indexUser']);
Route::get('/aspirasis/{aspirasi}', [AspirasiController::class, 'show']);

// Route Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [AspirasiController::class, 'index'])->middleware('auth');

Route::get('/dashboard/aspirasis/{aspirasi}', [AspirasiController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/aspirasis/{aspirasi}', [AspirasiController::class, 'update'])->middleware('auth');

Route::resource('/dashboard/categories', CategoryController::class)->except('show')->middleware('auth');
