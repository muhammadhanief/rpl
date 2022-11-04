<?php

use App\Http\Controllers\TestGoogleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GitHubController;

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
    return view('auth.login');
    // return view('welcome');
});

// Route::get('/', [LoginController::class, '__construct']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::put('/profile', 'ProfileController@update')->name('profile.update');

// formulir
Route::get('/formulir', 'FormulirController@index')->name('formulir');

// admin yang table
Route::get('/admin', 'AdminController@index')->name('admin');

// Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('auth/google', [TestGoogleController::class, 'index']);
// Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);
Route::get('callback/google', [TestGoogleController::class, 'handleCallback']);

// route untuk github login
Route::get('auth/github', [GitHubController::class, 'gitRedirect']);
Route::get('auth/github/callback', [GitHubController::class, 'gitCallback']);


Route::get('/about', function () {
    return view('about');
})->name('about');