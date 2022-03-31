<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class afotoController extends BaseController
{
     public function index(){
		$users = DB::table('gambar')->orderBy('tanggal','desc')->paginate(8);
		return view('admin/afoto',['users'=>$users]);
	}
	
	
	public function store(Request $request){
	
	//move to storage
    $imageName = time().'.'.$request->foto->extension();  
    $request->foto->move(public_path('image/gallery'), $imageName);

	// insert data ke table pegawai
	DB::table('gambar')->insert([
		'judul' => $request->judul,
		'foto' => $imageName,
		'tanggal' => $request->tanggal
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/afoto');
 
	}
	
	public function destroy($id) {
		$image = DB::table('gambar')->where('id', $id)->pluck('foto')->first();
		$filename  = public_path('image/gallery/').$image;
		unlink($filename);
		DB::table('gambar')->where('id',$id)->delete();
		return redirect('/afoto');
	}
	
	public function update(Request $request) {
		
		if($request->has('foto')) {
			$imageName = time().'.'.$request->foto->extension();  
			$request->foto->move(public_path('image/gallery'), $imageName);
			$image = DB::table('gambar')->where('id', $request->id)->pluck('foto')->first();
			$filename  = public_path('image/gallery/').$image;
			unlink($filename);
			
		} else {
			$imageName = DB::table('gambar')->where('id', $request->id)->pluck('foto')->first();
		}
		
		DB::table('gambar')->where('id',$request->id)->update([
			'judul' => $request->judul,
			'foto' => $imageName,
			'tanggal' => $request->tanggal
		]);
		return redirect('/afoto');
	}
}
