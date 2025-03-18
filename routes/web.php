<?php

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
    return view('welcome');
});

use App\Http\Controllers\Alice\MovieController;
Route::controller(MovieController::class)->group(function() {
    Route::get('alice/movie/create', 'add');
    Route::get('alice/movie/create', 'company');
    Route::get('alice/movie/create', 'services');
    Route::get('alice/movie/create', 'contact');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
