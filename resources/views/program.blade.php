@extends('template')

@section('content')

<div class="text-center mt-5 mb-5 ml-5 mr-5">
	<div class="row">
		<div class="col-lg-8 shadow-sm p-4 mb-5" >
			<h4 class="mt-4 mb-3">Program dan Kegiatan</h4>
			
			@foreach ($users as $user)
			<div class="card">
			<div class="card-header" id="headingOne">
			  <h5 class="mb-0">
				<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{$user->id}}" aria-expanded="false" aria-controls="collapseOne">
				  {{ $user->Program}} (klik untuk selengkapnya)
				</button>
			  </h5>
			</div>
			<div id="collapse{{$user->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
			  <div class="card-body  d-flex justify-content-left">
			  <div class="col text-left">
				Kegiatan : <br>
				{{ $user->Kegiatan}}
			  </div>
			  <div class="col  text-left">
				Bidang/Sub Bagian/Seksi : <br>
				{{$user->sub}}
			  </div>
			  </div>
			</div>
		  </div>
		  @endforeach
		  </div>

			<div class="col-md" >
			<div class="shadow-sm p-4 bg-white rounded text-center">
			<h5>Sambutan Kepala Dinas</h5>
			@foreach ($ksambutan as $sambutan)
			<div class="d-flex mr-4 text-center">
				<div class="row justify-content-center">
				<div class="col-8">
				<img  src="/image/{{$sambutan->foto_kd}}" style="max-height:200px;" />
				</div>
				<div class="col-8">
				<b>{{$sambutan->namakd}}</b>
				</div>
				<div class="col-8 text-justify">
				<i>{{$sambutan->sambutan}}</i>
				</div>
				</div>
			</div>
			@endforeach
			</div>
		</div>
	</div>
</div>

@endsection