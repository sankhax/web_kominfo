@extends('template')

@section('content')

<div class="text-center mt-5 mb-5 ml-5 mr-5">
	<div class="row">
		<div class="col p-4 mb-5" >
			<h4 class="mt-4">Sejarah</h4>
			@foreach ($sejarah as $user)
				<p class="text-justify">{{ $user->isejarah}}</p>
			@endforeach
		</div>
	</div>
	<div class="row justify-content-around">
		<div class="col-md-5 shadow-sm p-4 mb-3" >
			<h4>Visi</h4>
			@foreach ($visi as $user)
				<p class="text-justify">{{$user->ivisi}}</p>
			@endforeach
		</div>
		<div class="col-md-6 shadow-sm p-4 mb-3" >
			<h4>Misi</h4>
			<table class="table table-borderless text-justify">
			  <tbody>
			  @foreach ($misi as $user)
				<tr>
				  <td style="max-width:1px;">{{ $loop->index+1 }}</td>
				  <td>{{ $user->imisi}}</td>
				</tr>
			  @endforeach
			  </tbody>
			</table>
			<tbody>
		</div>
		</div>
</div>
@endsection



