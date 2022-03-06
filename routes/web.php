<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ShopController;

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

Route::get('/', [ItemController::class, 'index']);

Route::get('/shop', [ShopController::class, 'index']);

// Admin
Route::get('/dashboard/data/item-management', [ItemController::class, 'index'])->name('item-management');
Route::get('/dashboard/data/item-insert', [ItemController::class, 'insert'])->name('item-insert');
