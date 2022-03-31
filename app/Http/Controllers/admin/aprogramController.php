<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class aprogramController extends BaseController
{
    public function index(){
		$users = DB::table('program')->paginate(10);
		return view('admin/aprogram',['users'=>$users]);
	}
	
	public function store(Request $request){

	DB::table('program')->insert([
		'Program' => $request->program,
		'Kegiatan' => $request->kegiatan,
		'sub' => $request->sub
	]);

	return redirect('/aprogram');
 
	}
	
	public function update(Request $request) {
		
		DB::table('program')->where('id',$request->id)->update([
		'Program' => $request->program,
		'Kegiatan' => $request->kegiatan,
		'sub' => $request->sub
		]);
		return redirect('/aprogram');
	}
	
	public function destroy($id) {
		DB::table('program')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/aprogram');
	}
}
