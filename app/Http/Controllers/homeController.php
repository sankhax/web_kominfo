<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class homeController extends BaseController
{
    public function index(){
		$users = DB::table('berita')
		->join('tags', 'id_tag', '=', 'tags.id')
		->select('berita.*', 'tags.tag')
		->orderBy('tanggal','desc')->paginate(3);	
		$galeri = DB::table('gambar')->orderBy('tanggal','desc')->paginate(6);	
		$video = DB::table('video')->orderBy('tanggal','desc')->paginate(6);
		$visi = DB::table('visi')->get();
		$misi = DB::table('misi')->get();
		$home = DB::table('info')->get();
		$popup = DB::table('popup')->get();
		$covid = DB::table('covid')->get();
	return view('home',compact ('users','galeri','video','visi','misi','home','popup','covid'));
	}
}
