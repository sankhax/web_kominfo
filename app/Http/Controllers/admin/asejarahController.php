<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class asejarahController extends BaseController
{
    public function index(){
		$sejarah = DB::table('sejarah')->get();
		$visi = DB::table('visi')->get();
		$misi = DB::table('misi')->get();
		return view('admin/asejarah',compact('sejarah', 'visi','misi'));
	}
	
	public function updates(Request $request) {
		
		DB::table('sejarah')->where('id',$request->id)->update([
		'isejarah' => $request->isi,
		]);
		return redirect('/asejarah');
	}
	
	public function updatev(Request $request) {
		
		DB::table('visi')->where('id',$request->id)->update([
		'ivisi' => $request->isi,
		]);
		return redirect('/asejarah');
	}
	
	public function updatem(Request $request) {
		
		DB::table('misi')->where('id',$request->id)->update([
		'imisi' => $request->isi,
		]);
		return redirect('/asejarah');
	}
	
	public function storev(Request $request){

	// insert data ke table pegawai
	DB::table('visi')->insert([
		'ivisi' => $request->isi,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/asejarah');
 
	}
	
	public function storem(Request $request){

	// insert data ke table pegawai
	DB::table('misi')->insert([
		'imisi' => $request->isi,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/asejarah');
 
	}
	
	public function destrov($id) {
		DB::table('visi')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/asejarah');
	}
	
	public function destrom($id) {
		DB::table('misi')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/asejarah');
	}
	
}
