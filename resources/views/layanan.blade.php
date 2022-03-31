@extends('template')

@section('content')

<div class="text-center mt-5 mb-5 ml-5 mr-5">
	<div class="row">
		<div class="col-md shadow-sm p-4 mb-5" >
		<h4>Aplikasi Diskominfo</h4>
		
		<div class="row d-flex justify-content-center" >
		@foreach ($users as $user)
		<div class="p-4 mt-4 mr-2 ml-2" >
		<a href="#" >
			<img src="/image/layanan/{{$user->icon}}" style="max-height :50px"> <br>
			{{ $user->nama}}
		</a>
		</div>
		@endforeach
		</div>
		</div>
	</div>
</div>
@endsection



