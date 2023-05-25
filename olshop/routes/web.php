<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\PraktikumController;
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
        "title" => "pemeriksaan",
        "heading" => "Form Pemeriksaan Pasien",
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