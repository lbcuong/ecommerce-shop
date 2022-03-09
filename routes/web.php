<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [ShopController::class, 'index'])->name('/');
Route::get('/detail/{id}', [ShopController::class, 'detail'])->name('detail');

// Admin
Route::get('/dashboard/data/item', [ItemController::class, 'index'])->name('item');

Route::get('/dashboard/data/item/insert', [ItemController::class, 'insert'])->name('item.insert');
Route::post('/dashboard/data/item/store', [ItemController::class, 'store'])->name('item.store');

Route::get('/dashboard/data/item/destroy/{id}', [ItemController::class, 'destroy'])->name('item.destroy');

Route::get('/dashboard/data/item/edit/{id}', [ItemController::class, 'edit'])->name('item.edit');
Route::post('/dashboard/data/item/update', [ItemController::class, 'update'])->name('item.update');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
