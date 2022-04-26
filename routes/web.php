<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemDataTableController;
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

Route::group(['middleware' => ['auth', 'role:customer']], function () {
    Route::post('/carts/checkout', [CartController::class, 'checkout'])->name('carts.checkout');
    Route::post('/carts/district', [CartController::class, 'getDistrict'])->name('carts.district');
    Route::post('/carts/ward', [CartController::class, 'getWard'])->name('carts.ward');
    Route::resource('carts', CartController::class);
});

Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'dashboard'], function () {
    Route::get('/ecommerce', [DashboardController::class, 'ecommerce'])->name('dashboards.ecommerce');
    
    Route::resource('itemsDatatable', ItemDataTableController::class);
    Route::post('/itemsDatatable/update/{id}', [ItemDataTableController::class, 'update'])->name('itemsDatatable.update');
    Route::post('/itemsDatatable/destroy-multiple', [ItemDataTableController::class, 'destroyMultiple'])->name('itemsDatatable.destroyMultiple');

    Route::resource('items', ItemController::class);
    Route::post('/items/edit/{item}', [ItemController::class, 'edit'])->name('items.edit');
    Route::post('/items/show/{item}', [ItemController::class, 'show'])->name('items.show');
    Route::post('/items/update', [ItemController::class, 'update'])->name('items.update');

    Route::resource('users', UserController::class);
    Route::post('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::post('/users/destroy-multiple', [UserController::class, 'destroyMultiple'])->name('users.destroyMultiple');

    Route::resource('categories', CategoryController::class);
    Route::resource('issues', IssueController::class);
});