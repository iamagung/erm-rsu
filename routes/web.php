<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;

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

// Route::get('/', fn () => redirect()->route('dashboard.main'));

# Authenticate
Route::controller(LoginController::class)
->as('auth.')->group(function () {
	Route::get('login', 'login')->name('login');
	Route::post('do-login', 'doLogin')->name('doLogin');
	Route::get('logout', 'logout')->name('logout');
});

Route::middleware(['auth'])->group(function () {
	# Menu dashboard
	Route::controller(DashboardController::class)
	->prefix('dashboard')->as('dashboard.')
	->group(function () {
		Route::get('/', 'main')->name('main');
	});
});
