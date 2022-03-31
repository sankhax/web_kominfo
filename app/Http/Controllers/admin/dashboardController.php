<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class dashboardController extends BaseController
{
    public function index(){
		$users = DB::table('info')->get();
		$covid = DB::table('covid')->get();
		$popup = DB::table('popup')->get();
		return view('admin/dashboard', ['users'=>$users], compact ('covid','popup'));
	}
	
	public function coverchange(Request $request){
		$image = DB::table('info')->where('id', $request->id)->pluck('foto')->first();
		$filename  = public_path('image/').$image;
		$imageName = time().'.'.$request->foto->extension();  
		$request->foto->move(public_path('image/'), $imageName);
		DB::table('info')->where('id',$request->id)->update(['foto' => $imageName]);
		unlink($filename);
		return redirect('/dashboard');
	}
	
	public function covid(Request $request){
		DB::table('covid')->where('id',$request->id)->update([
			'positif' => $request->positif,
			'negatif' => $request->sembuh,
			'meninggal' => $request->meninggal,
			'tanggal' => $request->tanggal
		]);
		return redirect('/dashboard');
	}
	
	public function popup (Request $request) {
		
		if($request->has('foto')) {
			$imageName = time().'.'.$request->foto->extension();  
			$request->foto->move(public_path('image/'), $imageName);
			$image = DB::table('popup')->where('id', $request->id)->pluck('foto')->first();
			$filename  = public_path('image/').$image;
			unlink($filename);
			
		} else {
			$imageName = DB::table('popup')->where('id', $request->id)->pluck('foto')->first();
		}
		
		
		
		DB::table('popup')->where('id',$request->id)->update([
			'judul' => $request->judul,
			'info' => $request->isi,
			'foto' => $imageName
		]);
		return redirect('/dashboard');
	}
	
	public function iconchange(Request $request){
		$image = DB::table('info')->where('id', $request->id)->pluck('icon')->first();
		$filename  = public_path('image/').$image;
		$imageName = 'icon.'.$request->foto->extension();  
		$extension = $request->foto->getClientOriginalExtension();
		if($extension != 'png'){
			return redirect('/dashboard')->with('alert','Tipe/Extension File Harus PNG');
		}
		DB::table('info')->where('id',$request->id)->update(['icon' => $imageName]);
		unlink($filename);
		$request->foto->move(public_path('image/'), $imageName);
		return redirect('/dashboard');
	}
	
	public function announcement(Request $request){

		if($request->has('foto')) {
			$imageName = time().'.'.$request->foto->extension();  
			$request->foto->move(public_path('image/'), $imageName);
			$image = DB::table('info')->where('id', $request->id)->pluck('foto_kd')->first();
			$filename  = public_path('image/').$image;
			unlink($filename);
			
		} else {
			$imageName = DB::table('info')->where('id', $request->id)->pluck('foto_kd')->first();
		}
		
		DB::table('info')->where('id',$request->id)->update([
			'namakd' => $request->nama,
			'foto_kd' => $imageName,
			'sambutan' => $request->sambutan
		]);
		return redirect('/dashboard');
	}
  
}
