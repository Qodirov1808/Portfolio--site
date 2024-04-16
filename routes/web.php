<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FrondEndController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\SettingController;
use App\Http\Middleware\SuperMiddleware;
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

Route::get('/', [FrondEndController::class , 'index'])->name('index');
Route::resource('/menu', MenuController::class)->Middleware('auth');
Route::resource('/section', SectionController::class)->Middleware('auth');
Route::resource('/item', ItemController::class)->Middleware('auth');
Route::resource('/text', TextController::class)->Middleware('auth');
Route::resource('/setting', SettingController::class)->Middleware('auth');
Route::get('/user/{id}', [AdminController::class, 'user'])->name('user')->Middleware('auth');
Route::put('/user/Update', [AdminController::class, 'userUpdate'])->name('user.update')->Middleware('auth');
Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->Middleware('auth');
Route::get('/register', function () {   
})->Middleware('role:super');

