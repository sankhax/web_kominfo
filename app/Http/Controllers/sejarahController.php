<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class sejarahController extends Controller {
	public function index(){
		$sejarah = DB::table('sejarah')->get();
		$visi = DB::table('visi')->get();
		$misi = DB::table('misi')->get();
		return view('visimisi',compact('sejarah', 'visi','misi'));
	}
}