<?php

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\LoanController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\DashboardUserController;

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

Route::get('/localization/{language}', '\App\Http\Controllers\LocalizationController')->name('localization.switch');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

Route::get('/detail/{slug}', [DetailController::class, 'index'])->name('detail');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function() { 
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('member', '\App\Http\Controllers\Admin\MemberController');
        Route::resource('user', '\App\Http\Controllers\Admin\UserController');
        Route::resource('category', '\App\Http\Controllers\Admin\CategoryController');
        Route::resource('book', '\App\Http\Controllers\Admin\BookController');
        Route::resource('loan', '\App\Http\Controllers\Admin\LoanController');
        Route::put('/ubah/{id}', [LoanController::class, 'ubah'])->name('ubah');
        Route::get('/print', [LoanController::class, 'print'])->name('print');
        Route::resource('restore', '\App\Http\Controllers\Admin\RestoreController');
        Route::post('/logout', [LoginController::class, 'logout']);
    });

    Route::prefix('user')
    ->namespace('User')
    ->middleware(['auth', 'user'])
    ->group(function() { 
        Route::get('/', [DashboardUserController::class, 'index'])->name('dashboard-user');
        Route::resource('loan-user', '\App\Http\Controllers\User\LoanUserController');
        Route::post('/logout', [LoginController::class, 'logout']);
    });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
