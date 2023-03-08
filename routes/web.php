<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengalamanKuliahController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [LayoutController::class,'home']);
Route::get('/dashboard', [DashboardController::class,'dashboard']);
Route::get('/profile', [ProfileController::class,'profile']);
Route::get('/profile/{$name}', [ProfileController::class,'profile']);
Route::get('/pengalaman-kuliah', [PengalamanKuliahController::class,'pengalaman']);

Route::controller(LayoutController::class)->group(function (){
    Route::get('home', 'home');
    Route::get('/layout/index', 'index');
});


