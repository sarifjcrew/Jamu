<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\VillageProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\indexController;

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
// Route::get("/pintu-masuk", function(){
//     return "selamat datang di pintu masuk";
// });

//Route halaman utama (frontend)
Route::get("/", [indexController::class, 'halutama' ])->name('home');

//Route autentikasi
Route::get("/login", [loginController::class, 'login']);
Route::get("/register", [RegisterController::class,'create']);

Route::get("/about", [aboutController::class, 'about'])->name('about');

Route::get("/checkout", [checkoutController::class, 'checkout'])->name('checkout');


//route untuk admin LTE
Route::get("/profil-desa", [VillageProfileController::class, 'index'])->name('profil-desa');
Route::get("/tambah-profil", [VillageProfileController::class, 'create'])->name('tambah-profil');
Route::get("/ubah-profil", [VillageProfileController::class, 'edit'])->name('ubah-profil');
Route::get("/data-produk", [ProductController::class, 'edit'])->name('data-produk');
Route::get("/tambah-produk", [ProductController::class, 'create'])->name('tambah-produk');
Route::get("/ubah-produk", [adminController::class, 'edit'])->name('ubah-produk');
Route::resource("/village", VillageProfileController::class);









Route::get("/show-all-items", [ItemController::class, 'showAllItems']);
Route::get("categories", [categoryController::class, 'index']);
Route::get("search", [productController::class, 'search']);






Auth::routes();

// Route::get('/profil-desa', [App\Http\Controllers\HomeController::class, 'index'])->name('profil-desa');

