<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\http\Controllers\Participant\Dashboard\DashboardController;
use GuzzleHttp\Middleware;
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

Route::group(['as' => 'auth.'], function() {
    Route::group(['middleware' => 'guest'], function() {
        Route::get('register', [RegisterController::class, 'create'])->name('register.create');
        Route::post('register', [RegisterController::class, 'store'])->name('register.store');
        Route::get('login', [LoginController::class, 'create'])->name('login.create');
        Route::post('login', [LoginController::class, 'store'])->name('login.store');
    });

    Route::post('logout', [loginController::class, 'destroy'])
        ->name('login.destroy')
        ->middleware('auth');
});

Route::get('participant/dashboard', [DashboardController::class, 'index'])
->name('participant.dashboard.index')
->middleware('auth');



//rota de teste para não mostrar a senha
//Route::get('teste', function() {
    //$address = \App\Models\Address::find(2);
    //return $address->user;

    //$user = \App\Models\User::find(2);
    //return $user->address;
    //return \App\Models\User::all();

    //});
