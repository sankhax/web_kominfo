<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class beritaController extends Controller {

	public function index(){
		$users = DB::table('berita')
		->join('tags', 'id_tag', '=', 'tags.id')
		->select('berita.*', 'tags.tag')
		->orderBy('tanggal','desc')->paginate(6);
		$tags = DB::table('tags')->get();
		return view('berita',compact('users','tags'));
	}

	public function getBerita($id){
		$users = DB::table('berita')
		->join('tags', 'id_tag', '=', 'tags.id')
		->select('berita.*', 'tags.tag')->where('berita.id',$id)->get();
		$lain = DB::table('berita')->orderBy('tanggal','desc')->paginate(6);
		$tags = DB::table('tags')->get();
		$komen = DB::table('comment')->where('id_berita',$id)->get();
		$balas = DB::table('replies')->where('id_berita',$id)->get();
		
		return view('detail-berita' ,compact('users','lain','tags','komen','balas'));
    }
	
	public function getKategori($tag){
		$users = DB::table('berita')
		->join('tags', 'id_tag', '=', 'tags.id')
		->select('berita.*', 'tags.tag')-> where('id_tag', $tag)
		->orderBy('tanggal','desc')->paginate(6);
		$tags = DB::table('tags')->get();
		return view('kategori', compact('users','tags'));
    }
	
	public function commentberita(Request $request){
		
		DB::table('comment')->insert([
			'id_berita' => $request->berita_id,
			'nama' => $request->nama,
			'komen' => $request->body,
		]);
		
		return back();
    }
	
	public function replyberita(Request $request){
		
		DB::table('replies')->insert([
			'id_berita' => $request->berita_id,
			'id_comment' => $request->comment_id,
			'nama' => $request->nama,
			'balas' => $request->body,
		]);
		
		return back();
    }
	
	
}