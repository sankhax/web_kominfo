<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class gfotoController extends Controller {
	public function index(){
		$users = DB::table('gambar')->orderBy('tanggal','desc')->paginate(6);
		$video = DB::table('video')->orderBy('tanggal','desc')->paginate(6);
		return view('gfoto',compact ('video','users'));
	}
}