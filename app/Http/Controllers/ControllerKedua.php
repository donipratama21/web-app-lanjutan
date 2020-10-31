<?php
namespace App\Http\Controllers;

/**
 * 
 */
class ControllerKedua extends Controller{
	public function warna(){
		return view('hitam');
	}
	public function benda(){
		return view('kursi');
	}
	public function angka(){
		return view('satu');
	}
}
?>