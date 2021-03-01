<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
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
Route::get("/profil-desa", [adminController::class, 'profilDes'])->name('profil-desa');
Route::get("/data-produk", [adminController::class, 'dataPro'])->name('data-produk');
Route::get("/tambah-produk", [adminController::class, 'tambPro'])->name('tambah-produk');
Route::get("/ubah-profil", [adminController::class, 'ubProfil'])->name('ubah-profil');
Route::get("/ubah-produk", [adminController::class, 'ubProd'])->name('ubah-produk');









Route::get("/show-all-items", [ItemController::class, 'showAllItems']);
Route::get("categories", [categoryController::class, 'index']);
Route::get("search", [productController::class, 'search']);






Auth::routes();

Route::get('/profil-desa', [App\Http\Controllers\HomeController::class, 'index'])->name('profil-desa');

