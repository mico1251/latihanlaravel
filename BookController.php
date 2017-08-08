<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BookController extends Controller
{
    // testing controller
	public function index() {
		return 'ini index';
	}
	
	public function viewJudul($judul) {
		$data=array(
			'judul'=>$judul
			);
		//return view('Book');	
		return view('Book')->with($data);
			
		//return View::make('Book',$data);
		//return 'Buku yang anda baca berjudul : '.$judul;
	}
	
}
