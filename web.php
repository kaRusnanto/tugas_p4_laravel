<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

//route salam
Route::get('/salam', function() {
    return "Assalamualaikum sobat, selamat belajar Laravel";
});

//routing dengan parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama, $divisi) {
    return 'Nama Pegawai '.$nama.'<br/>Departemen: '.$divisi;
});

//menambahkan route/kabar
Route::get('/kabar', function () {
    return view('kondisi');
});

//route data mahasiswa 
//versi 1
// Route::get('mahasiswa',
//     'App\Http\Controllers\MahasiswaController@dataMahasiswa'
// );

//p4
//Menambahkan View Hello
Route::get('/hello', function() {
    return view('/p4/hello', ['name' => 'Inayah']);
});

//menambahkan route nilai
Route::get('/nilai', function () {
    return view('/p4/nilai');
});

//menambahkan route daftar nilai
Route::get('/daftarnilai', function () {
    return view('/p4/daftar_nilai');
});
aaadddd
//route dasar blade template
Route::get('/phpframework', function ()
    { return view('p4/layouts.index');
});


//vmenambahkan route data mahasiswa
Route::get('/mahasiswa',[MahasiswaController::class, 'dataMahasiswa']);
