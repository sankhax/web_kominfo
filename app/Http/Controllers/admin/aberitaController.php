<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class aberitaController extends BaseController
{
    public function index(){
		$users = DB::table('berita')->orderBy('tanggal','desc')->paginate(8);
		$tag = DB::table('tags')->get();
		return view('admin/aberita',['users'=>$users], compact ('tag'));
	}
	
	// method untuk insert data ke table pegawai
	public function store(Request $request){
	
	//move to storage
    $imageName = time().'.'.$request->foto->extension();  
    $request->foto->move(public_path('image/news'), $imageName);

	// insert data ke table pegawai
	DB::table('berita')->insert([
		'judul' => $request->judul,
		'isi' => $request->isi,
		'foto' => $imageName,
		'tanggal' => $request->tanggal,
		'id_tag' => $request->kategori
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/aberita');
 
	}
	
	public function destroy($id) {
		$image = DB::table('berita')->where('id', $id)->pluck('foto')->first();
		$filename  = public_path('image/news/').$image;
		unlink($filename);
		DB::table('berita')->where('id',$id)->delete();
		return redirect('/aberita');
	}
	
	public function update(Request $request) {
		
		if($request->has('foto')) {
			$imageName = time().'.'.$request->foto->extension();  
			$request->foto->move(public_path('image/news'), $imageName);
			$image = DB::table('berita')->where('id', $request->id)->pluck('foto')->first();
			$filename  = public_path('image/news/').$image;
			unlink($filename);
			
		} else {
			$imageName = DB::table('berita')->where('id', $request->id)->pluck('foto')->first();
		}
		
		DB::table('berita')->where('id',$request->id)->update([
			'judul' => $request->judul,
			'isi' => $request->isi,
			'foto' => $imageName,
			'tanggal' => $request->tanggal
		]);
		return redirect('/aberita');
	}
	
	public function addtag(Request $request){

	DB::table('tags')->insert([
		'tag' => $request->isi
	]);
	return redirect('/aberita');
 
	}
	
}

