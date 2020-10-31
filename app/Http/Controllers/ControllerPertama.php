<?php
namespace App\Http\Controllers;

/**
 * 
 */
class ControllerPertama extends Controller{
	public function satu(){
		return view('halaman1');
	}
	public function dua(){
		return view('halaman2');
	}
	public function tiga(){
		return view('halaman3');
	}
}
?>