
@extends('template')

@section('content')

<div class="text-center mt-5 mb-2 ml-5 mr-5">

	<div class="row">
			<div class="col-lg-8 sm p-4 mb-4 mr-3" >
			<div class="row justify-content-center">
			
			@foreach ($users as $user)
			<div class="col-md-8">
			<h4>{{ $user->judul}}</h4> <br>
			</div>
			<div class="col-md-8 mt-2 mb-2 mr-2 ml-2 d-flex justify-content-center" >
					<img src="/image/news/{{$user->foto}}" style="height:350px;" /> <br>
			</div>
			</div>
			<p class="card-text text-left text-muted"><i class="fas fa-calendar-alt"></i> {{ date('d-F-Y', strtotime($user->tanggal)) }} </p>
			<p class="text-justify">
			{{ $user->isi}}
			</p>
			<p class="card-text text-left text-muted"><i class="fas fa-tags"></i> {{$user->tag}}</p>
			
			<div class="row p-2 text-left">
				<div class="col-md-12">
				<h3>Komentar</h3>
				@foreach ($komen as $kom)
					<div class="p-4 callout callout-info">
					<div class="row">
						<div class="col-md-10">
						<b> {{$kom->nama}} </b> berkomentar : <br>
						{{$kom->komen}} 
						</div>
						<div class="col-md-2 d-flex justify-content-end">
						<button type="button" class="btn btn-outline-info btn-sm" data-toggle="collapse" data-target="#balas{{$kom->id}}">Balas</button>
						</div>
					</div>
					@foreach ($balas as $b)
					@if ($b->id_comment == $kom->id)
						<div class="p-4 callout">
							<b> {{$b->nama}} </b> membalas : <br>
							{{$b->balas}} 
						</div>
					@endif
					@endforeach
					<form method="post" action="{{ route('comments.reply') }}">
					@csrf
						<div class="collapse" id="balas{{$kom->id}}">
							<div class="p-4">
								<input class="form-control mb-2" type="text" name="nama" placeholder="Nama / Nickname" required="required"/>
								<textarea class="form-control" name="body" placeholder="Balasan Anda Disini..." required="required"></textarea>
								<input type="hidden" name="berita_id" value="{{ $user->id }}" />
								<input type="hidden" name="comment_id" value="{{ $kom->id }}" />
								<input type="submit" class="btn btn-info mt-2" value="Tambah Balasan" />
							</div>
						</div>
					</form>
					</div>
				@endforeach
				<hr>
				</div>
				<div class="col-md-12">
				<h4>Tambah Komentar</h4>
				<form method="post" action="{{ route('comments.store') }}">
					@csrf
					 <div class="form-group">
						<input class="form-control mb-2" type="text" name="nama" placeholder="Nama / Nickname" required="required"/>
						<textarea class="form-control" name="body" placeholder="Komentar Anda Disini..." required="required"></textarea>
						<input type="hidden" name="berita_id" value="{{ $user->id }}" />
					 </div>
					 <div class="form-group ">
						 <input type="submit" class="btn btn-info" value="Tambah Komentar" />
					 </div>
				</form>
				</div>
			</div>
			@break
			@endforeach
			</div>
		<div class="col-md">
		<div class="row">
			<div class="col-md">
			<div class="col-md-12 shadow-sm p-4">
				<h4>Berita Lainnya</h4>
				@foreach ($lain as $user)
					<a href="/berita/{{$user->judul}}"> <p class="card-text text-left">{{$user->judul}}</p> </a>
				@endforeach
			</div>
			<div class="col-md-12 shadow-sm p-4 mt-3" >
				<h4>Kategori</h4>
				@foreach ($tags as $user)
				<div class="d-flex justify-content-left">
				<a href="/kategori/{{$user->id}}">
				<p> <i class="fas fa-tags"></i> {{$user->tag}} </p>
				</a>
				</div>
				@endforeach
			</div>
			</div>
		</div>
		</div>
	</div>
</div>
		
@endsection