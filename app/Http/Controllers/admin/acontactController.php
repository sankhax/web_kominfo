<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class acontactController extends BaseController
{
    public function index(){
		$users = DB::table('contact')->get();
		return view('admin/acontact', ['users'=>$users]);
	}
	
	public function update(Request $request) {
		
		DB::table('contact')->where('id',$request->id)->update([
			'links' => $request->isi,
		]);
		return redirect('/acontact');
	}
}
