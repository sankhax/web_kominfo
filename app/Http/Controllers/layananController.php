<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class layananController extends Controller {
	public function aplikasi(){
		$users = DB::select('select * from layanan');
		return view('layanan',['users'=>$users]);
	}
	
	public function pengaduan(){
		return view('pengaduan');
	}
	
	public function spengaduan(Request $request){
		
		$file = null;
		if($request->has('lampiran')) {
			$extension = $request->lampiran->getClientOriginalExtension();
			if ($extension == 'php'){
				return redirect('pengaduan')->with('success','Pengaduan Tidak Berhasil dibuat.');
			}
			$file = time().'.'.$request->lampiran->extension();  
			$request->lampiran->move(public_path('/lampiran'), $file);
		}
		DB::table('pengaduan')->insert([
			'nama' => $request->nama,
			'kontak' => $request->kontak,
			'isi' => $request->isi,
			'lampiran' => $file,
		]);
		
		return redirect('pengaduan')->with('success','Pengaduan Berhasil dibuat.');
	}
	
}