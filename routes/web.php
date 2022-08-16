<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AgendaController;

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

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin route
Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::resource('agenda', AgendaController::class);
Route::resource('guru', GuruController::class);
Route::resource('kelas', KelasController::class);

// user route
Route::group(['prefix'=>'user', 'middleware'=>['isUser', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
});