<?php

use App\Http\Controllers\Admin1Controller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserControler;
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

//home

route::get('/',[HomeController::class,'index']);
route::get('/home',[HomeController::class,'rediresct'])->name('home');
route::post('/appoint',[HomeController::class,'appointment'])->name('appoint');

//admin

route::resource('/doctor',Admin1Controller::class)->middleware(['auth']);
route::resource('/appointment',appointmentController::class)->middleware(['auth']);

route::resource('/user',UserControler::class)->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
