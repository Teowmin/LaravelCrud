<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [ProductController::class, 'index'])->name('index.products');
Route::get('/create-products', [ProductController::class, 'addProduct'])->name('create.products');

Route::post('/store-products', [ProductController::class, 'storeProduct'])->name('store.products');

Route::get('/show-products/{id}', [ProductController::class, 'showProduct'])->name('show.products');

Route::get('/edit-products/{id}', [ProductController::class, 'editProduct'])->name('edit.products');
Route::post('/update-products/{id}',[ProductController::class, 'updateProduct'])->name('update.products');
Route::delete('/delete-products/{id}', [ProductController::class, 'deleteProduct'])->name('delete.products');