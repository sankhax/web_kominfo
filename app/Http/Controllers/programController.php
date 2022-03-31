<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class programController extends Controller {
	public function index(){
		$users = DB::select('select * from Program');
		$galeri = DB::table('gambar')->orderBy('tanggal','desc')->paginate(6);
		$ksambutan = DB::select('select * from info');
		return view('program',compact ('galeri','users','ksambutan'));
	}
}