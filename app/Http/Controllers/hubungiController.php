<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class hubungiController extends Controller {

	public function index(){
		$users = DB::table('contact')->get();
		return view('hubungi',compact('users'));
	}
}