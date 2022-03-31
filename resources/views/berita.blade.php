@extends('template')

@section('content')

<div class="text-center mt-5 ml-5 mr-5">

	<div class="row">
		<div class="col-lg-8" >
			<h4 class="mt-4">Berita Terbaru</h4>
			@foreach ($users as $user)	

			<div class="card mb-3">
			  <div class="row no-gutters">
				<div class="col-md-5">
				  <img src="/image/news/{{$user->foto}}" class="mt-3" height="200">
				</div>
				<div class="col-md-7">
				  <div class="card-body">
					<h5 class="card-title text-left">{{$user->judul}}</h5>
					<h6 class="card-subtitle text-left"><small class="text-muted">{{ date('d-F-Y', strtotime($user->tanggal)) }}</small></h6>
					<p class="card-text text-left" style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden;"> {{$user->isi}}</p>
					<p class="card-text text-left text-muted"><i class="fas fa-tags"></i> {{$user->tag}}</p>
					<a href="/berita/{{$user->id}}"> <p class="card-text text-right">Selengkapnya...</p> </a>
				  </div>
				</div>
			  </div>
			</div>
			
			@endforeach  
			
		<div class="d-flex justify-content-center mt-4">
			{{$users->links()}}
		</div> 
		</div> 
		<div class="col-md mt-5">
		<div class="col shadow-sm p-4 mb-3" >
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
@endsection
