<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\contact;
use App\Http\Controllers\PayController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Mail\contactMail;
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

Route::get('/', function () {
    return redirect('tienda');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Tienda
Route::get('/tienda', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products', [ProductsController::class, 'products'])->name('products');
Route::get('/infantil', [ProductsController::class, 'infantil'])->name('infantil');
Route::get('/hombre', [ProductsController::class, 'hombre'])->name('hombre');
Route::get('/mujer', [ProductsController::class, 'mujer'])->name('mujer');
Route::get('/about', [contact::class, 'aboutus'])->name('aboutus');
//Route::get('/product/{id}', [ProductsController::class, 'view'])->name('view'); Ver producto por ID
Route::get('/contact', [contact::class, 'index'])->name('contactus');
Route::post('/contact', [contact::class, 'store'])->name('store');

//Carrito de la compra
//agregar artículo al carrito
Route::post('/tienda', [CartController::class, 'store'])->name('cart.store');
//ver pedido
Route::get('/cart-check', [CartController::class, 'checkin'])->name('cart.checkin');
//Eliminar articulo
Route::post('/remove/${id}', [CartController::class, 'removeItem'])->name('removeitem');
//realizar pedido
Route::post('/cart-checkout', [CartController::class, 'checkout'])->name('cart.checkout');
//cancelar pedido o vaciar carrito
Route::post('/cart-clear', [CartController::class, 'clearAll'])->name('cart.clear');

//Pagar
Route::post('/pay', [PayController::class, 'stripePay'])->name('stripePay');
Route::get('/success', [PayController::class, 'success'])->name('success');
Route::get('/error', [PayController::class, 'error'])->name('error');
//Fin Tienda
require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');