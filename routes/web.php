<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
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

// Route::get('/', [ShopController::class, 'index'])->name('/');
// Route::get('/detail/{id}', [ShopController::class, 'detail'])->name('detail');

// Admin
// Route::get('/dashboards/data/item', [ItemController::class, 'index'])->name('dashboards.index');

// Route::get('/dashboard/data/item/create', [ItemController::class, 'create'])->name('dashboards.create');
// Route::post('/dashboard/data/item/store', [ItemController::class, 'store'])->name('dashboards.store');

// Route::get('/dashboard/data/item/destroy/{id}', [ItemController::class, 'destroy'])->name('item.destroy');

// Route::get('/dashboard/data/item/edit/{id}', [ItemController::class, 'edit'])->name('item.edit');
// Route::post('/dashboard/data/item/update', [ItemController::class, 'update'])->name('item.update');

// Route::prefix('dashboard')->group(function () {
//     Route::resource('items', ItemController::class)->only([
//         'index', 'create', 'update', 'destroy', 'edit', 'store'
//     ]);
// });

Route::get('/', [ShopController::class, 'index'])->name('/');
Route::get('/detail/{id}', [ShopController::class, 'detail'])->name('detail');

Auth::routes();

// Route::group(function () {
//     Route::resource('/', ShopController::class);
// });

Route::group(['middleware' => ['role:customer']], function () {
    Route::resource('carts', CartController::class);
});

Route::group(['middleware' => ['role:admin'], 'prefix' => 'dashboard'], function () {
    Route::resource('items', ItemController::class)->only([
        'index', 'create', 'update', 'destroy', 'edit', 'store'
    ]);
});