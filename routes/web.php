<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'index']);

// kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori/create', [KategoriController::class, 'store']);

// item
Route::get('/item', [ItemController::class, 'index']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
