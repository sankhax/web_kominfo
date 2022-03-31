<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\sejarahController;
use App\Http\Controllers\strukturController;
use App\Http\Controllers\programController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\gfotoController;
use App\Http\Controllers\videoController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\berita\detailController;
use App\Http\Controllers\layananController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\hubungiController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\aberitaController;
use App\Http\Controllers\admin\astrukturController;
use App\Http\Controllers\admin\asejarahController;
use App\Http\Controllers\admin\acontactController;
use App\Http\Controllers\admin\afotoController;
use App\Http\Controllers\admin\alayananController;
use App\Http\Controllers\admin\apegawaiController;
use App\Http\Controllers\admin\aprogramController;
use App\Http\Controllers\admin\asosmedController;
use App\Http\Controllers\admin\avideoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[homeController::class, 'index']);


Route::get('/struktur',[strukturController::class, 'index']);


Route::get('/visimisi',[sejarahController::class, 'index']);


Route::get('/program',[programController::class, 'index']);

Route::get('/pegawai',[pegawaiController::class, 'index']);

Route::get('/gfoto',[gfotoController::class, 'index']);

Route::get('/video',[videoController::class, 'index']);

Route::get('/aplikasi',[layananController::class, 'aplikasi']);

Route::get('/pengaduan',[layananController::class, 'pengaduan']);
Route::post('/spengaduan',[layananController::class, 'spengaduan']);

Route::get('/hubungi',[hubungiController::class, 'index']);

Route::get('/berita',[beritaController::class, 'index']);

Route::get('/berita/{id}',[beritaController::class, 'getberita']);

Route::post('/berita/comment',[beritaController::class, 'commentberita'])->name('comments.store');
Route::post('/berita/reply',[beritaController::class, 'replyberita'])->name('comments.reply');

Route::get('/kategori/{tag}',[beritaController::class, 'getKategori']);


Route::group(['middleware' => 'auth'], function () {
 
    Route::get('/dashboard',[dashboardController::class, 'index']);
	Route::post('/dashboard/coverchange',[dashboardController::class, 'coverchange']);
	Route::post('/dashboard/iconchange',[dashboardController::class, 'iconchange']);
	Route::post('/dashboard/announcement',[dashboardController::class, 'announcement']);
	Route::post('/dashboard/covid',[dashboardController::class, 'covid']);
	Route::post('/dashboard/popup',[dashboardController::class, 'popup']);

	Route::get('/aberita',[aberitaController::class, 'index']);
	Route::post('/aberita/store',[aberitaController::class, 'store']);
	Route::post('/aberita/update',[aberitaController::class, 'update']);
	Route::get('/aberita/destroy/{id}',[aberitaController::class, 'destroy']);
	Route::post('/aberita/addtags',[aberitaController::class, 'addtag']);

	Route::get('/astruktur',[astrukturController::class, 'index']);
	Route::post('/astruktur/update',[astrukturController::class, 'update']);

	Route::get('/asejarah',[asejarahController::class, 'index']);
	Route::post('/asejarah/updates',[asejarahController::class, 'updates']);
	Route::post('/asejarah/updatev',[asejarahController::class, 'updatev']);
	Route::post('/asejarah/updatem',[asejarahController::class, 'updatem']);
	Route::post('/asejarah/storev',[asejarahController::class, 'storev']);
	Route::post('/asejarah/storem',[asejarahController::class, 'storem']);
	Route::get('/asejarah/destrov/{id}',[asejarahController::class, 'destrov']);
	Route::get('/asejarah/destrom/{id}',[asejarahController::class, 'destrom']);

	Route::get('/aprogram',[aprogramController::class, 'index']);
	Route::post('/aprogram/store',[aprogramController::class, 'store']);
	Route::post('/aprogram/update',[aprogramController::class, 'update']);
	Route::get('/aprogram/destroy/{id}',[aprogramController::class, 'destroy']);

	Route::get('/apegawai',[apegawaiController::class, 'index']);
	Route::post('/apegawai/store',[apegawaiController::class, 'store']);
	Route::post('/apegawai/update',[apegawaiController::class, 'update']);
	Route::get('/apegawai/destroy/{id}',[apegawaiController::class, 'destroy']);

	Route::get('/afoto',[afotoController::class, 'index']);
	Route::post('/afoto/store',[afotoController::class, 'store']);
	Route::post('/afoto/update',[afotoController::class, 'update']);
	Route::get('/afoto/destroy/{id}',[afotoController::class, 'destroy']);

	Route::get('/avideo',[avideoController::class, 'index']);
	Route::post('/avideo/store',[avideoController::class, 'store']);
	Route::post('/avideo/update',[avideoController::class, 'update']);
	Route::get('/avideo/destroy/{id}',[avideoController::class, 'destroy']);

	Route::get('/alayanan',[alayananController::class, 'index']);
	Route::post('/alayanan/store',[alayananController::class, 'store']);
	Route::post('/alayanan/update',[alayananController::class, 'update']);
	Route::get('/alayanan/destroy/{id}',[alayananController::class, 'destroy']);
	
	Route::get('/apengaduan',[alayananController::class, 'apengaduan']);
	Route::get('/dpengaduan/{id}',[alayananController::class, 'dpengaduan']);

	Route::get('/acontact',[acontactController::class, 'index']);
	Route::post('/acontact/update',[acontactController::class, 'update']);
 
});
