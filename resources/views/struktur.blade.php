@extends('template')

@section('content')

<div class="text-center mt-5 mb-5 ml-5 mr-5">
	<div class="row">
		<div class="col-lg-8" >
			<h4 class="mt-4">Struktur Organisasi</h4>
			@foreach ($users as $user)
				<img src="/image/structure/{{$user->image}}" width="90%">
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

