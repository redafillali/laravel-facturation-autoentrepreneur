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
    return redirect( 'dashboard/home' );
});

Auth::routes();


// Comptes routes protected by auth middleware
Route::prefix('dashboard')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/comptes', [App\Http\Controllers\ComptesController::class, 'index'])->name('comptes');
})->middleware(['auth', 'verified', 'role:admin', 'permission:super-admin']);
