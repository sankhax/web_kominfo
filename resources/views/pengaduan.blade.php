@extends('template')

@section('content')

<div class="text-center mt-5 mb-5 ml-5 mr-5">
	<div class="row">
		<div class="col-md shadow-sm p-4" >
		@if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
        @endif
		<h4>Laporan Pengaduan</h4>
		<div class="text-left mt-4">
		<form action="/spengaduan" method="post" enctype="multipart/form-data">
		@csrf
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Nama</label>
		  <input type="text" class="form-control" name="nama" required="required">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Kontak yang bisa dihubungi</label>
		  <input type="text" class="form-control" name="kontak" required="required">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Pengaduan</label>
		  <textarea class="form-control" rows="3" name="isi" required="required"></textarea>
		</div>
		<div class="mb-3">
		  <label for="formFile" class="form-label">Lampiran</label>
		  <input class="form-control" type="file" name="lampiran">
		</div>
		<div class="mt-4">
		  <button type="submit" class="btn btn-success mb-3">Laporkan Pengaduan</button>
		</div>
		</form>
		</div>
	</div>
</div>
</div>
@endsection



