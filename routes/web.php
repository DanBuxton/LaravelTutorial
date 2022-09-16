<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ModuleTutorialController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::resource('modules', ModuleController::class)
    ->only(['index', 'show', 'create', 'store']);

Route::resource('modules.tutorials', ModuleTutorialController::class)
    ->only([
        'create',
        'store'
    ]);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
