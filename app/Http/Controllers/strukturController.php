<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class strukturController extends Controller {
	public function index(){
		$users = DB::select('select * from stuktur');
		$ksambutan = DB::select('select * from info');
		return view('struktur',['users'=>$users], compact('ksambutan'));
	}
}