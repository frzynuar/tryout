<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\UserController;

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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin');
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::get('user', [UserController::class, 'index'])->name('user');
        // Try Out
        Route::get('tryout-index', [ExamController::class, 'index'])->name('tryout');
        Route::get('/category/{id}', [ExamController::class, 'category'])->name('category');
        Route::get('/question/{id}', [ExamController::class, 'question'])->name('category');
        Route::get('/kelas-list', [UserController::class, 'KelasData'])->name('kelas.datatable');
        Route::post('/kelas-store', [UserController::class, 'KelasDataStore'])->name('kelas.store');
        Route::post('/kelas-remove', [UserController::class, 'KelasDataRemove'])->name('kelas.remove');
        Route::post('/kelas-change', [UserController::class, 'KelasDataChange'])->name('kelas.change');
    });
});