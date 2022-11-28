<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\NewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouterController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\VerificationController;


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
});

Auth::routes();

// Router
Route::get('/router', [RouterController::class, 'index'])->name('router')->middleware('auth');
Route::get('/createRouter', [RouterController::class, 'create'])->name('createRouter')->middleware('auth');
Route::get('/createRouter/{router}/edit', [RouterController::class, 'edit'])->name('router.edit')->middleware('auth');
Route::get('router/{id}/detail', [RouterController::class, 'detail'])->name('router.detail')->middleware('auth');
Route::post('/createRouter/store', [RouterController::class, 'store'])->name('createRouter.store')->middleware('auth');
Route::post('/router/destroy/{id}', [RouterController::class, 'destroy'])->name('router.destroy')->middleware('auth');
Route::put('/createRouter/{router}', [RouterController::class, 'update'])->name('router.update')->middleware('auth');


// Laptop
Route::get('/laptop', [LaptopController::class, 'index'])->name('laptop')->middleware('auth');
Route::get('/createLaptop', [LaptopController::class, 'create'])->name('createLaptop')->middleware('auth');
Route::get('/createLaptop/{laptop}/edit', [LaptopController::class, 'edit'])->name('laptop.edit')->middleware('auth');
Route::get('/laptop/{id}/detail', [LaptopController::class, 'detail'])->name('laptop.detail')->middleware('auth');
Route::post('/createLaptop/store', [LaptopController::class, 'store'])->name('createLaptop.store')->middleware('auth');
Route::post('/laptop/destroy/{id}', [LaptopController::class, 'destroy'])->name('laptop.destroy')->middleware('auth');
Route::put('/createLaptop/{laptop}', [LaptopController::class, 'update'])->name('laptop.update')->middleware('auth');

// Server
Route::get('/server', [ServerController::class, 'index'])->name('server')->middleware('auth');
Route::get('/createServer', [ServerController::class, 'create'])->name('createServer')->middleware('auth');
Route::get('/createServer/{server}/edit', [ServerController::class, 'edit'])->name('server.edit')->middleware('auth');
Route::get('/server/{id}/detail', [ServerController::class, 'detail'])->name('server.detail')->middleware('auth');
Route::post('/createServer/store', [ServerController::class, 'store'])->name('createServer.store')->middleware('auth');
Route::post('/server/destroy/{id}', [ServerController::class, 'destroy'])->name('server.destroy')->middleware('auth');
Route::put('/createServer/{server}', [ServerController::class, 'update'])->name('server.update')->middleware('auth');


// User
Route::get('/user',[UserController::class, 'index'])->name('user')->middleware('auth');
Route::get('/createUser', [UserController::class, 'create'])->name('createUser')->middleware('auth');
Route::get('/createUser/{user}/edit', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::get('/user/{id}/detail', [UserController::class, 'detail'])->name('user.detail')->middleware('auth');
Route::post('/createUser/store', [UserController::class, 'store'])->name('createUser.store')->middleware('auth');
Route::post('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('auth');
Route::put('/createUser/{user}', [UserController::class, 'update'])->name('user.update')->middleware('auth');

// Auth
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth')->middleware('auth');