<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class astrukturController extends BaseController
{
    public function index(){
		$users = DB::table('stuktur')->get();
		return view('admin/astruktur',['users'=>$users]);
	}
	
	public function update(Request $request) {
		
		$image = DB::table('stuktur')->where('id', $request->id)->pluck('image')->first();
		$filename  = public_path('image/structure/').$image;
		$imageName = time().'.'.$request->foto->extension();  
		$request->foto->move(public_path('image/structure'), $imageName);
		DB::table('stuktur')->where('id',$request->id)->update(['image' => $imageName]);
		unlink($filename);
		return redirect('/astruktur');
		
	}
}
