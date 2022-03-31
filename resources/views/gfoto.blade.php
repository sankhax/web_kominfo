@extends('template')

@section('content')

<div class="text-center mt-5 ml-5 mr-5">

	<div class="row">
		<div class="col-lg-8 p-4 mb-5 mr-3" >
			<h4 class="mt-4">Foto</h4>
			<div class="row d-flex justify-content-center">
			@foreach ($users as $user)
			<div class="col-md-5 shadow-sm mt-4 mr-2 ml-2" >
				<a data-target="#modalIMG{{$user->id}}" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
						<img  src="/image/gallery/{{$user->foto}}" style="max-height:200px" />
				</a>
						<h5 class="mt-2">{{ $user->judul}}</h5>
						<i> {{ date('d-F-Y', strtotime($user->tanggal))}}</i>
				
			<div aria-hidden="true"  class="modal fade" id="modalIMG{{$user->id}}" role="dialog" tabindex="-1">
				<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title">{{ $user->judul}}</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
							<img src="/image/gallery/{{$user->foto}}" style="max-width:100%">
				</div>
					<div class="modal-footer">
						<i>{{ date('d-F-Y', strtotime($user->tanggal)) }}</i>
					</div>
				</div>
			</div>
			</div>
			
			</div>
			
			@endforeach
			</div>
			<div class="d-flex justify-content-center mt-4">
			{{$users->links()}}
		</div> 
			</div>
		<div class="col">
		<div class="col-md shadow-sm p-4" >
					<div class="text-left">
						<div class="col">
							<div class="row">
								<div class="col-6">
									<h4 class="mb-3">Video</h4>
								</div>
								<div class="col-6 text-right">
									<a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators" role="button" data-slide="prev">
										<i class="fa fa-arrow-left"></i>
									</a>
									<a class="btn btn-primary mb-3 " href="#carouselExampleIndicators" role="button" data-slide="next">
										<i class="fa fa-arrow-right"></i>
									</a>
								</div>
								<div class="col-12">
									<div id="carouselExampleIndicators" class="carousel slide carousel-fade"" data-ride="carousel">
										<div class="carousel-inner">
										@foreach($video as $key => $slider)
											<div class="carousel-item {{$key == 0 ? 'active' : '' }}">
												<div class="row">
													<div class="col">
														<div class="card">
															<div class="embed-responsive embed-responsive-16by9">
															<iframe class="embed-responsive-item" src="{{ $slider->linkv}}" allowfullscreen></iframe>
															</div>
															<div class="card-body text-muted">
																<h4 class="card-text text-left">{{$slider->judul}}</h4>
																<p class="card-text text-right">{{$slider->tanggal}}</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>
		</div>
		</div>
		</div>
<script>
$( 'a a' ).remove();

document.documentElement.setAttribute("lang", "en");
document.documentElement.removeAttribute("class");

axe.run( function(err, results) {
  console.log( results.violations );
} );
</script>
		
@endsection




