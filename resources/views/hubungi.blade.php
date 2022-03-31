@extends('template')

@section('content')

<div class="text-center mt-5 mb-5 ml-5 mr-5">
	
	<div class="row">
		<div class="col-md p-4 mb-5 " >
		<h4>Hubungi Kami</h4>
		<div class="row d-flex justify-content-center" >
		<div class="col-sm-8">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.0833869523944!2d101.25628068846419!3d-1.5418303990365916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2cf4712ca731d3%3A0x748eb3c6bd183505!2sKantor%20Dinas%20Kominfo%20Solok%20Selatan!5e0!3m2!1sid!2sid!4v1630312380332!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		</div>
		<div class="row d-flex justify-content-center" >
		@foreach($users as $user)
			<div class="col-md-3 p-4 shadow-sm mx-2 my-2">
			@if ($user->id == 1)
				<a class="color-gray-darker c6 td-hover-none">
						<i class="fas fa-home" style="font-size:60px;"></i> <br>
						Alamat : <br>
						{{$user->links}}
				</a>
			@endif
			@if ($user->id == 2)
				<a class="color-gray-darker c6 td-hover-none">
						<i class="fas fa-envelope" style="font-size:60px;"></i> <br>
						E-Mail : <br>
						{{$user->links}}
				</a>
			@endif
			@if ($user->id == 3)
				<a class="color-gray-darker c6 td-hover-none">
						<i class="fas fa-phone" style="font-size:60px;"></i> <br>
						Phone : <br>
						{{$user->links}}
				</a>
			@endif
			@if ($user->id == 4)
				<a href="{{$user->links}}" class="color-gray-darker c6 td-hover-none">
						<i  class="fab fa-instagram" style="font-size:60px;"></i> <br>
						Instagram : <br>
						@diskominfosolsel
				</a>
			@endif
			@if ($user->id == 5)
				<a href="{{$user->links}}" class="color-gray-darker c6 td-hover-none">
						<i  class="fab fa-facebook" style="font-size:60px;"></i> <br>
						Facebook : <br>
						Diskominfo Solok Selatan
				</a>
			@endif
			@if ($user->id == 6)
				<a href="{{$user->links}}" class="color-gray-darker c6 td-hover-none">
						<i  class="fab fa-youtube" style="font-size:60px;"></i> <br>
						Youtube : <br>
						Diskominfo Solok Selatan
				</a>
			@endif
			</div>
		@endforeach
		</div>
		</div>
	</div>
</div>
@endsection



