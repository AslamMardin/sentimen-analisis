<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SentimenController;

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

Route::get('/sentimen', [SentimenController::class, 'index'])->name('home');
Route::get('/profile', [SentimenController::class, 'profile'])->name('profile');
Route::get('/unasman', [SentimenController::class, 'dbUnasman']);
Route::get('/polewali', [SentimenController::class, 'dbPolewali']);
Route::get('/sulbar', [SentimenController::class, 'dbSulbar']);