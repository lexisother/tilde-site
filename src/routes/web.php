<?php

use App\Http\Controllers\HomeController;
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

Route::prefix('/')->group(function () {
    // Route::get('/', "HomeContoller@show")->name('home');
    Route::get('/', [HomeController::class, 'show'])->name('home');
});

// Route::get('/', function () {
//     return view('welcome');
// });
