<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\PraktikumController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/salam', function () {
    return "Hallo selamat siang teman - teman";
});

Route::get('/about', function() {
    return view('about',[
        "title" => "About",
        "nama" => "St. Nurmuhsina",
        "umur" => 18,
        "email" => "itssina1904@gmail.com"
    ]);
});

Route::get('/nf', function() {
    return view('nf');
});

Route::get('/pemeriksaan', function() {
    return view('pemeriksaan',[
        "title" => "Form Pemeriksaan Pasien",
        "Td" => "120/80 mmhg",
        "Au" => "Pria : < 7 mg/dl | Wanita : < 6 mg/dl",
        "Kt" => "< 200 mg/dl",
        "Gd1" => "Puasa : 70 - 110 mg/dl ",
        "Gd2" => "2 jam setelah makan : 100 - 150 mg/dl",
        "Gd3" => "Sewaktu/acak : 70 -125 mg/dl"
    ]);
});


Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::get('/praktikuminput', [PraktikumController::class, 'index']);
Route::post('/praktikuminput', [PraktikumController::class, 'output']);

// route tampilan admin dan backend
Route::group(['middleware' => ['auth']], function(){
        Route::prefix('admin')->group(function (){
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/logout', [DashboardController::class, 'logout']);
        Route::get('/produk', [ProdukController::class, 'index']);
        Route::get('/kategori', [KategoriController::class, 'index']);
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk/store', [ProdukController::class, 'store']);
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
    });

});


// route untuk tampilan frontend
Route::prefix('frontend')->group(function (){
Route::get('/dashboard', [FrontendController::class, 'index_frontend']);
Route::get('/about', [AboutController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');