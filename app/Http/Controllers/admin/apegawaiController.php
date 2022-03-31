<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class apegawaiController extends BaseController
{
    public function index(){
		$users = DB::table('pegawai')->paginate(8);
		return view('admin/apegawai', ['users'=>$users]);
	}
	
	public function store(Request $request){
	
	//move to storage
    $imageName = time().'.'.$request->foto->extension();  
    $request->foto->move(public_path('image/employee'), $imageName);

	// insert data ke table pegawai
	DB::table('pegawai')->insert([
		'nama' => $request->nama,
		'jabatan' => $request->jabatan,
		'foto' => $imageName
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/apegawai');
 
	}
	
	public function update(Request $request) {
		
		if($request->has('foto')) {
			$imageName = time().'.'.$request->foto->extension();  
			$request->foto->move(public_path('image/employee'), $imageName);
			$image = DB::table('pegawai')->where('id', $request->id)->pluck('foto')->first();
			$filename  = public_path('image/employee/').$image;
			unlink($filename);
		} else {
			$imageName = DB::table('pegawai')->where('id', $request->id)->pluck('foto')->first();
		}
		DB::table('pegawai')->where('id',$request->id)->update([
			'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'foto' => $imageName
		]);
		return redirect('/apegawai');
	}
	
	public function destroy($id) {
		$image = DB::table('pegawai')->where('id', $id)->pluck('foto')->first();
		$filename  = public_path('image/employee/').$image;
		unlink($filename);
		DB::table('pegawai')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/apegawai');
	}
}
