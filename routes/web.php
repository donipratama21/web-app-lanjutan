<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerPertama;
use App\Http\Controllers\ControllerKedua;

Route::get("/view1", [ControllerPertama::class, "satu"]);
Route::get("/view2", [ControllerPertama::class, "dua"]);
Route::get("/view3", [ControllerPertama::class, "tiga"]);
Route::get("/view4", [ControllerKedua::class, "warna"]);
Route::get("/view5", [ControllerKedua::class, "benda"]);
Route::get("/view6", [ControllerKedua::class, "angka"]);

// Route::get('/', function () {
    // return view('welcome');
// });

// 5 URL
// Route::get("/nama", function() {
// 	return "<h1>Nama Saya Doni Pratama</h1>";
// });
// Route::get("/nim", function() {
// 	return "<h1>NIM Saya 1811102441029</h1>";
// });
// Route::get("/jurusan", function() {
// 	return "<h1>Jurusan saya Teknik Informatika</h1>";
// });
// Route::get("/alamat", function() {
// 	return "<h1>Alamat saya Jl. K.S. Tubun</h1>";
// });
// Route::get("/ttl", function() {
// 	return "<h1>Saya lahir di Samarinda, 21 November 1999</h1>";
// });

