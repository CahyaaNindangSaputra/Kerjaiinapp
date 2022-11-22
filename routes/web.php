<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\registerperusahancontroller;
use App\Http\Controllers\registerpelamarcontroller;




use App\Http\Controllers\perusahaancontroller;
use App\Http\Controllers\cpcontroller;
use App\Http\Controllers\lokasicontroller;
use App\Http\Controllers\legalitascontroller;

use App\Http\Controllers\pelamarcontroller;
use App\Http\Controllers\pendidikancontroller;
use App\Http\Controllers\nonformalcontroller;
use App\Http\Controllers\prestasicontroller;
use App\Http\Controllers\pengalamancontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\ListingController;



use App\Http\Controllers\usercontroller;

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
Route::get('home', function () {
    return view('home');
});

Route::resource('listing', ListingController::class);

Route::resource('home', homecontroller::class);

  Route::get('login', function () {
    return view('auth.login');
  });






Route::get('/login', [logincontroller::class, 'login'])->name('login');
Route::post('actionlogin', [logincontroller::class, 'actionlogin'])->name('actionlogin');
Route::post('actionlogout', [logincontroller::class, 'actionlogout'])->name('actionlogout');
Route::get('register', [registercontroller::class, 'index'] )->name('register.index');
Route::resource('register', registercontroller::class);



Route::resource('registerperusahan', registerperusahancontroller::class);
Route::get('registerperusahan', [registerperusahancontroller::class, 'index'])->name('registerperusahan');
Route::resource('perusahaann', perusahaancontroller::class);
Route::resource('cpperusahaann', cpcontroller::class);
Route::resource('lokasiperusahaann', lokasicontroller::class);
Route::resource('legalitass', legalitascontroller::class);

Route::resource('registerpelamar', registerpelamarcontroller::class);
Route::get('registerpelamar', [registerpelamarcontroller::class, 'index'])->name('registerpelamar');
Route::resource('pelamarr', pelamarcontroller::class);
Route::resource('pendidikann', pendidikancontroller::class);
Route::resource('nonformall', nonformalcontroller::class);
Route::resource('prestasii', prestasicontroller::class);
Route::resource('pengalamann', pengalamancontroller::class);
// Route::resource('registerbiasa', registercontroller::class);




Route::group(['middleware' => ['auth', 'role: admin, perusahaan']], function () {
    Route::resource('registerperusahan', registerperusahancontroller::class);
    Route::get('register', [registerperusahancontroller::class, 'index'] )->name('registerperusahan');
});

Route::group(['middleware' => ['auth', 'role:admin, pelamar']], function () {
    Route::resource('registerpelamar', registerpelamarcontroller::class);
    Route::get('register', [registerpelamarcontroller::class, 'index'] )->name('registerpelamar');
});

// Route::group(['middleware' => ['auth', 'role:perusahaan, pelamar']], function () {
//     Route::resource('register', registercontroller::class);
// });
