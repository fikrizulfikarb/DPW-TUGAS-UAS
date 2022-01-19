<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\SettingController;

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

//tampilan admin
    //login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'prosesLogin']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);
    //beranda
Route::get('beranda', [HomeController::class, 'showBeranda']); //laravel8
Route::get('beranda/{status}', [HomeController::class, 'showBeranda']);
        // Route::get('/beranda', 'showBeranda@HomeController']); laravel 7
Route::get('produk', [HomeController::class, 'showProduk']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('ganti-bahasa', [HomeController::class, 'showgantiBahasa']);

Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);

Route::prefix('admin')->middleware('auth')->group(function(){
Route::post('produk/filter', [ProdukController::class, 'filter']);
Route::resource('produk', ProdukController::class);
Route::resource('product', ProductController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('user', UserController::class);
Route::resource('produk', ProductController::class);

});

//produk controller
Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);
Route::post('produk/filter', [ProdukController::class, 'filter']);

//user controller
Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);

//produk controller
Route::get('home', [ClientProdukController::class, 'home']);
Route::post('home/filter', [ClientProdukController::class, 'show']);
Route::get('produk_single/{produk}', [ClientProdukController::class, 'show']);
Route::get('cart/{produk}', [CartController::class, 'show']);

//client controller
Route::get('/', [ClientProdukController::class, 'index']);
Route::get('home', [ClientProdukController::class, 'index']);
Route::get('produk_single', [ClientProdukController::class, 'showProduk']);
Route::get('produk_single/{produk}', [ClientProdukController::class, 'show']);
Route::get('filter', [ClientProdukController::class, 'filter']);

//kategori controller
Route::get('kategori', [KategoriController::class, 'index']);
Route::get('kategori/create', [KategoriController::class, 'create']);
Route::post('kategori', [KategoriController::class, 'store']);
Route::get('kategori/{kategori}', [KategoriController::class, 'show']);
Route::get('kategori/{kategori}/edit', [KategoriController::class, 'edit']);
Route::put('kategori/{kategori}', [KategoriController::class, 'update']);
Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy']);

Route::get('test-collection', [HomeController::class, 'testCollection']);
Route::get('test-ajax', [HomeController::class, 'testAjax']);

//tampilan user
// Route::get('/', function () {
//     return view('home');
// });


Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produk_single', function () {
    return view('produk_single');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/pesanan', function () {
    return view('pesanan');
});

Route::get('/product', function () {
    return view('product');
});



