<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class videoController extends Controller {
	public function index(){
		$users = DB::select('select * from video');
		$galeri = DB::table('gambar')->orderBy('tanggal','desc')->paginate(6);	
		return view('video',compact ('galeri','users'));
	}
}