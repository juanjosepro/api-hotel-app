<?php

use App\Http\Controllers\Auth\LoginController;
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

require __DIR__.'/custom_routes.php';
