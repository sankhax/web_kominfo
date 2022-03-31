@extends('template')

<style>
thead {
  display:block;
}
tbody {
  display:block;
  overflow-y:scroll;
  height:350px;
}
</style>

@section('content')

<div class="bg">
@foreach ($home as $user)
<img width="100%" style="max-height:600px" src="image/{{$user->foto}}" alt="home" >
@endforeach
</div>


<div class=" text-center mt-4 mb-5 ml-5 mr-5">

<div class="row">
	<div class="col-md p-4 ">
	<div class="text-center">
		<h4>Visi</h4>
	</div>
	<div class="mt-5 d-flex align-items-center">
	@foreach ($visi as $user)
	<div class="text-justify">
		<i>{{$user->ivisi}}</i>
	</div>
	@endforeach
	</div>
	</div>
	<div class="col-md p-4">
	<div class="text-center">
		<h4>Sambutan Kepala Dinas</h4>
	</div>
	@foreach ($home as $sambutan)
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
	<div class="col-md p-4">
					<div class="text-center">
						<h4>Misi</h4>
					</div>
					<table class="table table-borderless table-fixed text-justify">
					  <tbody>
					  @foreach ($misi as $user)
						<tr>
						  <td class="col-xs-2" >{{ $loop->index+1 }}</td>
						  <td class="col-xs-8">{{ $user->imisi}}</td>
						</tr>
					  @endforeach
					  </tbody>
					</table>
					</div>
	</div>
	
		<div class="row">
		@foreach ($covid as $datas)
			<div class="col shadow p-4 bg-white rounded text-center">
			<h4 style="color : #00008B">Data Pantauan Covid-19</h4>
			<h5 style="color : #00008B"> Kabupaten Solok Selatan </h5>
			<h6 style="color : #00008B"> Tanggal : {{ $datas->tanggal}}</h6>
				<div class ="row mt-4 justify-content-center">
				<div class="col-sm-2 p-2 mr-2 text-center" style="color : red">
				<i class="fas fa-frown-open" style="font-size:38px;"></i> <br>
				Positif : {{ $datas->positif}}
				</div>
				<div class="col-sm-2 p-2 mr-2 text-center" style="color : green">
				<i class="fas fa-grin-beam" style="font-size:38px;"></i> <br>
				Sembuh : {{ $datas->negatif}}
				</div>
				<div class="col-sm-2 p-2 mr-2 text-center">
				<i class="fas fa-sad-tear" style="font-size:38px;"></i> <br>
				Meninggal : {{ $datas->meninggal}}
				</div>
				</div>
			<div class="text-right">
			<a href="http://corona.solselkab.go.id/">
			<i> Sumber : http://corona.solselkab.go.id/</i>
			</a>
			</div>
			</div>
		@endforeach
		</div>
	

	<div class="row mt-5">
		<div class="col mb-2" >
			<h4 class="text-center">Berita Terkini </h4>
				<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
				  <div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
					@foreach($users as $key => $slider)
					  <div class="col-md-4" style="float:left">
					   <div class="card mb-2">
						  <img class="mt-2" src="/image/news/{{$slider->foto}}"  style="height:200px;">
						  <div class="card-body">
							<h4 class="card-title">{{$slider->judul}}</h4>
							<p class="card-text text-left" style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden;">{{$slider->isi}}</p>
							<p class="card-text text-left text-muted"><i class="fas fa-calendar-alt"></i> {{ date('d-F-Y', strtotime($slider->tanggal)) }} </p>
							<p class="card-text text-left text-muted"><i class="fas fa-tags"></i> {{$slider->tag}}</p>
							<a class="btn btn-primary" href="berita/{{$slider->id}}" style="color : white"> Selengkapnya </a>
						  </div>
						</div>
					  </div>
					@endforeach
					</div>
				  </div>
				</div>
	
		</div>
	</div>
	
	<h4 class="mt-4">Gallery</h4>
	
	<div class="row d-flex align-items-center justify-content-around">
	<div class="col-md-5 shadow-sm p-4" >
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
																<p class="card-text text-right">{{ date('d-F-Y', strtotime($slider->tanggal)) }}</p>
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
	<div class="col-md-5 shadow-sm p-4" >
			<div class="text-left">
				<div class="col">
					<div class="row">
						<div class="col-6">
							<h4 class="mb-3">Foto</h4>
						</div>
						<div class="col-6 text-right">
							<a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
								<i class="fa fa-arrow-left"></i>
							</a>
							<a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
								<i class="fa fa-arrow-right"></i>
							</a>
						</div>
						<div class="col-12">
							<div id="carouselExampleIndicators2" class="carousel slide carousel-fade"" data-ride="carousel">
								<div class="carousel-inner">
								@foreach($galeri as $key => $slider)
									<div class="carousel-item {{$key == 0 ? 'active' : '' }}">
										<div class="row">
											<div class="col">
												<div class="card">
													<img class="img-fluid" src="/image/gallery/{{$slider->foto}}" style="max-height:300px; width:auto">
													<div class="card-body text-muted">
														<h4 class="card-text text-left">{{$slider->judul}}</h4>
														<p class="card-text text-right">{{ date('d-F-Y', strtotime($slider->tanggal)) }}</p>
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

<!-- Pop Up --->
@foreach ($popup as $pop)
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$pop->judul}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img  src="/image/{{$pop->foto}}" style="max-width:100%" />
		<p class="text-justify mt-2"> {{$pop->info}} </p>
      </div>
    </div>
  </div>
</div>
@endforeach
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>

@endsection