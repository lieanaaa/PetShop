<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Grooming_Food;
use App\Http\Controllers\LoginController;

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

// login
route::get('/login', [LoginController::class,'index'])->name('login');
route::post('/proseslogin', [LoginController::class,'proseslogin'])->name('proseslogin');
route::post('/logout', [LoginController::class,'logout'])->name('logout');

//dashboard
Route::group(['middleware'], function(){
    Route::get('/dashboard', [Grooming_Food::class,'Dashboard'])->name('dashboard');
    Route::get('/grooming', [Grooming_Food::class,'Grooming'])->name('grooming');
    Route::get('/Food', [Grooming_Food::class,'Food'])->name('food');
    route::get('/Pemesanan', [Grooming_Food::class,'Pemesanan'])->name('pemesanan');
    Route::get('/cetak-struk/{id}', [Grooming_Food::class,'cetakStruk'])->name('cetak');
});

// route edit
Route::group(['middleware'], function(){
    Route::get('/editadult/{id}', [Grooming_Food::class,'EditAdult'])->name('editadult');
    Route::post('/prosesadult/{id}', [Grooming_Food::class,'ProsesAdult']);
    Route::get('/edit_kitten/{id}', [Grooming_Food::class,'Edit_Kitten'])->name('edit_kitten');
    Route::post('/proseskitten/{id}', [Grooming_Food::class,'ProsesKitten']);
    Route::get('/edit_food/{id}',[Grooming_Food::class,'Edit_Food'])->name('edit_food');
    Route::post('/prosesfood/{id}', [Grooming_Food::class,'ProsesFood']);
    Route::get('/editPesan/{id}', [Grooming_Food::class,'edit_pesan']);
    Route::post('/prosesEditPesan/{id}', [Grooming_Food::class,'proses_edit_pesan']);
});


//route hapus
Route::group(['middleware'], function(){
    Route::get('/delete/{id}', [Grooming_Food::class, 'delete'])->name('delete');
    Route::get('/hapus/{id}', [Grooming_Food::class, 'hapus'])->name('hapus');
    Route::get('/hilang/{id}', [Grooming_Food::class,'hilang'])->name('hilang');
    Route::get('/delete_pesan/{id}', [Grooming_Food::class,'delete_pesan'])->name('delete_pesan');
});


// route tambah
Route::group(['middleware'], function(){
    Route::get('/tambahkitten',[Grooming_Food::class,'TambahKitten'])->name('tambahkitten');
    Route::post('/prosespaket', [Grooming_Food::class,'ProsesTambah']);
    Route::get('/tambahadult', [Grooming_Food::class,'TambahAdult']);
    Route::post('/prosesadult', [Grooming_Food::class,'ProsesAdult']);
    Route::get('/tambah_food',[Grooming_Food::class,'Tambah_Food'])->name('tambah_food');
    Route::post('/prosesfood',[Grooming_Food::class, 'ProsesFood']); 
    Route::get('/tambahPemesanan',[Grooming_Food::class, 'tambah_pesan']); 
    Route::post('/prosesPesan',[Grooming_Food::class, 'proses_pesan']); 
});
