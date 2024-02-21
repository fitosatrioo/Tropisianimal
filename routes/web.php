<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GallerysController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KontakController;
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
    return view('home');
});


Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('welcome');
});



Route::prefix('admin')->group(function() {
    Route::resource('news', NewsController::class);
});


    Route::resource('berita', BeritaController::class);
    Route::resource('/', IndexController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('tentang', TentangController::class);
    Route::resource('kontak', KontakController::class);


Route::prefix('admin')->group(function() {
    Route::resource('abouts', AboutController::class);
});



Route::prefix('admin')->group(function() {
    Route::resource('gallerys', GallerysController::class);
});

Route::get('/dashboard', function(){
    return view('welcome');
})->name('dashboard')->middleware('auth');

Route::get('/login', [LoginController::class,'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');

Route::get('/logout', [LoginController::class,'logout'])->name('logout');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
