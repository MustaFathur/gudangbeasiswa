<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::get('/about', [HomeController::class, 'about']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/tambah_beasiswa_view', [AdminController::class, 'tambah']);
Route::post('/upload_beasiswa', [AdminController::class, 'upload']);
Route::get('/tampilkanbeasiswa', [AdminController::class, 'tampilkanbeasiswa']);
Route::get('/hapusbeasiswa/{id}', [AdminController::class, 'hapusbeasiswa']);
Route::get('/updatebeasiswa/{id}', [AdminController::class, 'updatebeasiswa']);
Route::post('/editbeasiswa/{id}', [AdminController::class, 'editbeasiswa']);
