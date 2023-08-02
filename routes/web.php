<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Artisan;
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
})->name('welcome');

//LOGIN AND LOGOUT
Route::post("login", [LoginController::class, 'login'])->name("login");
Route::post("logout", [LoginController::class, 'logout'])->name("logout");

Route::get('clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";

});


Route::get('php-artisan-storage-link', function() {
	if (file_exists(public_path('storage'))) {
		return 'The "public/storage" directory  already exists';
	}

	app('files')->link(
		storage_path('app/public'), public_path('storage')
	);

	return 'The "public/storage" directory has been linked';
});
