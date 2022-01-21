<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:cliente']], function () {
  // Route::resource('buys', ProductController::class, [ 'only' => ['create']]);
  Route::post('buys/create', [BuyController::class, 'create'])->name('buys.create');
  Route::get('/home/invoice/{id}', [BuyController::class, 'invoice_show'])->name('buys.invoice');
});

Route::group(['middleware' => ['role:admin']], function () {
  Route::resource('products', ProductController::class, [ 'exception' => ['index']]);
});
