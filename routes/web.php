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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/test', function() {
    return 'Hello World';
});

Route::get('/nr20', function() {
    return 'Selamat Datang di Halaman NR20
     Halaman ini berisikan informasi mengenai NR20';
});

Route::redirect('/test', '/nr20');

Route::view('/greeting', 'greeting');

Route::get('/user/{id}', function ($id) {
    return "User".$id;
});