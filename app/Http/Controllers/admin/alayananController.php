<?php

namespace App\Http\Controllers\admin;
use DB;
use File;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class alayananController extends BaseController
{
    public function index(){
		$users = DB::table('layanan')->paginate(8);
		return view('admin/alayanan', ['users'=>$users]);
	}
	
	public function store(Request $request){
	
	$imageName = time().'.'.$request->icon->extension();  
    $request->icon->move(public_path('image/layanan'), $imageName);
	// insert data ke table pegawai
	DB::table('layanan')->insert([
		'nama' => $request->nama,
		'icon' => $imageName,
		'linkl' => $request->linkl
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/alayanan');
 
	}
	
	public function update(Request $request) {
		
		if($request->has('icon')) {
			$imageName = time().'.'.$request->icon->extension();  
			$request->icon->move(public_path('image/layanan'), $imageName);
			$image = DB::table('layanan')->where('id', $request->id)->pluck('icon')->first();
			$filename  = public_path('image/layanan/').$image;
			unlink($filename);
			
		} else {
			$imageName = DB::table('layanan')->where('id', $request->id)->pluck('icon')->first();
		}
		DB::table('layanan')->where('id',$request->id)->update([
			'nama' => $request->nama,
			'icon' => $imageName,
			'linkl' => $request->linkl
		]);
		return redirect('/alayanan');
	}
	
	public function destroy($id) {
		$image = DB::table('layanan')->where('id', $id)->pluck('icon')->first();
		$filename  = public_path('image/layanan/').$image;
		unlink($filename);
		DB::table('layanan')->where('id',$id)->delete();
		
		return redirect('/alayanan');
	}
	
	public function dpengaduan($id) {
		
		$image = DB::table('pengaduan')->where('id', $id)->pluck('lampiran')->first();
		$filename  = public_path('/lampiran/').$image;
		if ($image != null){
			unlink($filename);
		}
		DB::table('pengaduan')->where('id',$id)->delete();
		
		return redirect('/apengaduan');
	}
	
	public function apengaduan() {
		$users = DB::table('pengaduan')->orderBy('id','desc')->paginate(8);
		return view('admin/apengaduan', ['users'=>$users]);
	}
}
