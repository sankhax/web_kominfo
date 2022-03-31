<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class avideoController extends BaseController
{
    public function index(){
		$users = DB::table('video')->paginate(10);
		return view('admin/avideo',['users'=>$users]);
	}
	
	public function store(Request $request){

		if($request->has('video')) {
			$video = time().'.'.$request->video->extension();  
			$request->video->move(public_path('videos'), $video);
			$videoName = '/videos/'.$video;
		} else if($request->has('linkv')) {
			$videoName = $request->linkv;
		} 
		DB::table('video')->insert([
			'judul' => $request->judul,
			'linkv' => $videoName
		]);

	return redirect('/avideo');
 
	}
	
	public function update(Request $request) {
		
		if($request->has('video')) {
			$video = time().'.'.$request->video->extension();  
			$request->video->move(public_path('videos'), $video);
			$videoName = '/videos/'.$video;
			$videon  = DB::table('video')->where('id', $request->id)->pluck('linkv')->first();
			$filename  = public_path($videon);
			unlink($filename);
		} else if($request->has('linkv')) {
			$videoName = $request->linkv;
		} 
		DB::table('video')->where('id',$request->id)->update([
			'judul' => $request->judul,
			'linkv' => $videoName
		]);
		return redirect('/avideo');
	}
	
	public function destroy($id) {
		
		$video  = DB::table('video')->where('id', $id)->pluck('linkv')->first();
		$filename  = public_path($video);
		if (File::exists($filename)){
			unlink($filename);
		}
		DB::table('video')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/avideo');
	}
}
