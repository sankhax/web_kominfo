<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pegawaiController extends Controller {
	public function index(){
		$users = DB::select('select * from pegawai');
		$ksambutan = DB::select('select * from info');
		return view('pegawai',['users'=>$users], compact('ksambutan'));
	}
}