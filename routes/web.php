<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProdukPageController;
use App\Http\Controllers\CartController;

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

// login
Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

// regis
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register/post', [LoginController::class, 'register_action'])->name('register.action');

// logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// hak akses
Route::group(['middleware' => ['auth','ceklevel:admin']], function() {

    Route::get('/dashboard',[KategoriController::class, 'index']);

    route::get('/halamansatu','BerandaController@halamansatu')->name('halamansatu');
});


Route::group(['middleware' => ['auth','ceklevel:user']], function() {

    route::get('/halamansatu','BerandaController@halamansatu')->name('halamansatu');

});


// home
Route::get('/', [HomeController::class, 'index'])->name('/');



//produk
Route::get('/produkpage', [ProdukPageController::class, 'index'])->name('/produkpage');
Route::get('/addproduk', [ProdukController::class, 'index'])->name('addproduk');
Route::post('/post-produk', [ProdukController::class, 'store'])->name('post-produk');

Route::get('/Artikel-kategori/{slug}', [ProdukPageController::class, 'showKategori'])->name('artikel.kategori');
// Route::get('/Artikel-kategori/{kategori}', 'ProdukPageController@artikel_kategori')->name('artikel.kategori');

// detailproduk
// Route::get('/detail-produk/{id}', [ProdukPageController::class, 'detailproduk'])->name('detail-produk');
Route::get('/detail-produk/{id}', [DetailController::class, 'detailproduk'])->name('detail.produk');


// cart
Route::middleware(['auth'])->group(function () {
    Route::post('add-to-cart', [CartController::class, 'addProduct']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('cart', [CartController::class, 'viewcart']);
});

Route::post('delete-cart-item', [CartController::class, 'deletecart']);


// kategori
// route::get('kategori','KategoriController@index')->name('kategori');

// Route::resource('kategori', KategoriController::class@index);

// Route::get('kategori', [KategoriController::class, 'kategori'])->name('kategori')->middleware('auth');


// Route::post('/postlogi',[Login])

// Route::get('/index', 'BerandaController@halamansatu')->name('halaman-satu');
// Route::get('/dashboard', 'BerandaController@halamandua')->name('halaman-dua');