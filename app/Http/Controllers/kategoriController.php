<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class kategoriController extends Controller {

	public function index(){
		$users = DB::table('berita')
		->join('tags', 'id_tag', '=', 'tags.id')
		->select('berita.*', 'tags.tag')
		->orderBy('tanggal','desc')->paginate(6);
		$tags = DB::table('tags')->get();
		return view('berita',compact('users',('tags')));
	}

	public function getBerita($judul){
		$users = DB::table('berita')->select('*')-> where('judul',$judul)->get();
		return view('detail-berita')->with('users',$users);
    	}
}