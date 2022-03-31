@extends ('admin/atemplate')

@section('content')

<div>
    <div class="container-fluid">
	@foreach($users as $user)
        <div class="page-header min-height-400 border-radius-xl mt-4" style="background-image: url('/image/{{$user->foto}}'); background-position-y: 50%;">
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/image/{{$user->icon}}" class="w-100 border-radius-lg shadow-sm">
                        <a data-bs-toggle="modal" data-bs-target="#iconModal{{$user->id}}" href=""
                            class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                            <i class="fa fa-pen top-0" title="Edit Image"></i>
                        </a>
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Diskominfo Solok Selatan
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Admin Panel
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative">
					
                        <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="modal" data-bs-target="#coverModal{{$user->id}}" href="">
                                     <i class="fa fa-images"></i>
                                    <span class="ms-1">Change Cover</span>
                                </a>	
								<a class="nav-link mb-0 px-0 py-1" data-bs-toggle="modal" data-bs-target="#pengumumanModal{{$user->id}}" href="">
                                     <i class="fas fa-bullhorn"></i>
                                    <span class="ms-1">Change Opening Speech</span>
                                </a>
							</li>
                        </ul>
					</div>
				</div>
            </div>
        </div>
											<div class="modal fade" id="coverModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg  modal-dialog-centered">
												<div class="modal-content text-left">
												  <div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Change Cover</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												  </div>
												  <form action="/dashboard/coverchange" method="post" enctype="multipart/form-data">
												  {{ csrf_field() }}
												  <input type="hidden" name="id" value="{{ $user->id }}">
												  <div class="modal-body">
													 <div class="mb-3">
														<label for="foto" class="form-label">Input Image</label>
														<input class="form-control" type="file" id="foto" name="foto" required="required"> 
													</div>
												  </div>
												  <div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-secondary">Save changes</button>
												  </div>
												  </form>
												</div>
											  </div>
											  </div>
											  
											  <div class="modal fade" id="iconModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg  modal-dialog-centered">
												<div class="modal-content text-left">
												  <div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Change Icon</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												  </div>
												  <form action="/dashboard/iconchange" method="post" enctype="multipart/form-data">
												  {{ csrf_field() }}
												  <input type="hidden" name="id" value="{{ $user->id }}">
												  <div class="modal-body">
													 <div class="mb-3">
														<label for="foto" class="form-label">Input Image</label>
														<input class="form-control" type="file" id="foto" name="foto" required="required"> 
													</div>
												  </div>
												  <div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-secondary">Save changes</button>
												  </div>
												  </form>
												</div>
											  </div>
											  </div>
											  <div class="modal fade" id="pengumumanModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg  modal-dialog-centered">
												<div class="modal-content text-left">
												  <div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Change Opening Speech</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												  </div>
												  <form action="/dashboard/announcement" method="post" enctype="multipart/form-data">
												  {{ csrf_field() }}
												  <input type="hidden" name="id" value="{{ $user->id }}">
												  <div class="modal-body">
													  <div class="mb-3">
														<label for="isi" class="form-label">Change Name</label>
														<input class="form-control" id="nama" name="nama" required="required" value="{{ $user->namakd }}">
													  </div>
													  <div class="mb-3">
														<label for="foto" class="form-label">Change Image</label>
														<input class="form-control" type="file" id="foto" name="foto">
														</div>
														<div class="mb-3">
														<label for="isi" class="form-label">Change Speech</label>
														<input class="form-control" id="sambutan" name="sambutan" required="required" value="{{ $user->sambutan }}">
													  </div>
												  </div>
												  <div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-secondary">Save changes</button>
												  </div>
												  </form>
												</div>
											  </div>
											</div>
	@endforeach
	<div class="row mt-2 p-4 justify-content-center">
	
					<a href="" class="col-md-2 shadow p-2 mt-2 mb-2 border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
					data-bs-toggle="modal" data-bs-target="#covid" >
                        <i class="fas fa-viruses"></i>
						<span class="nav-link-text ms-1">Data Covid-19</span>
                    </a>
					@foreach ($covid as $user)
							<div class="modal fade" id="covid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg  modal-dialog-centered">
								<div class="modal-content text-left">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Covid-19 Data</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												  </div>
												  <form action="/dashboard/covid" method="post" enctype="multipart/form-data">
												  {{ csrf_field() }}
												  <input type="hidden" name="id" value="{{ $user->id }}">
												  <div class="modal-body">
													  <div class="mb-3">
														<label for="positif" class="form-label">Jumlah Positif :</label>
														<input type="text" class="form-control" id="positif" name="positif" required="required" value="{{ $user->positif }}">
													  </div>
													  <div class="mb-3">
														<label for="sembuh" class="form-label">Jumlah Sembuh :</label>
														<input type="text" class="form-control" id="sembuh" name="sembuh" required="required" value="{{ $user->negatif }}">
													  </div>
													  <div class="mb-3">
														<label for="meninggal" class="form-label">Jumlah Meninggal :</label>
														<input type="text" class="form-control" id="meninggal" name="meninggal" required="required" value="{{ $user->meninggal }}">
													  </div>
													  <div class="mb-3">
														<label for="tanggal" class="form-label">Tanggal Update :</label>
														<input class="form-control" type="date" id="tanggal" name="tanggal" value="{{ $user->tanggal }}">
													   </div>
												  </div>
												  <div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-secondary">Save changes</button>
												  </div>
												  </form>
												</div>
											  </div>
											</div>
					
					@endforeach
					
					<a href="" class="col-md-2 shadow p-2 mt-2 mb-2 border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
					data-bs-toggle="modal" data-bs-target="#popup">
                        <i class="fas fa-comment-dots"></i>
						<span class="nav-link-text ms-1">Pop-Up Menu</span>
                    </a>
					@foreach ($popup as $user)
						<div class="modal fade" id="popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg  modal-dialog-centered">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Update Pop-Up Menu</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							  </div>
							  <form action="/dashboard/popup" method="post" enctype="multipart/form-data">
							  {{ csrf_field() }}
							  <input type="hidden" name="id" value="{{ $user->id }}">
							  <div class="modal-body">
								  <div class="mb-3">
									<label for="judul" class="form-label" >Judul</label>
									<input type="text" class="form-control" id="judul" name="judul" required="required" value="{{ $user->judul }}">
								  </div>
								  <div class="mb-3">
									<label for="foto" class="form-label">Foto</label>
									<input class="form-control" type="file" id="foto" name="foto">
								  </div>
								  <div class="mb-3">
									<label for="isi" class="form-label">Informasi</label>
									<textarea class="form-control" id="isi" rows="3" name="isi" required="required">{{ $user->info }}</textarea>
								  </div>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-secondary">Update Pop-Up</button>
							  </div>
							  </form>
							</div>
						  </div>
						  </div>
					@endforeach
					
					<h5 class="mb-1 text-center">
                        Features
                    </h5>
					
                    <a href="/dashboard" class="col-md-2 shadow p-2 mt-2 mb-2 border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-home"></i>
						<span class="nav-link-text ms-1">Dashboard</span>
                    </a>
					
					<a href="/aberita" class="col-md-2 shadow p-2 mt-2 mb-2 border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-newspaper"></i>
						<span class="nav-link-text ms-1">Berita</span>
                    </a>
					
					<a href="/astruktur" class="col-md-2 shadow p-2 mt-2 mb-2 border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-bars"></i>
						<span class="nav-link-text ms-1">Struktur Organisasi</span>
                    </a>
					
					<a href="/asejarah" class="col-md-2 shadow p-2 mt-2 mb-2 border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-history"></i>
						<span class="nav-link-text ms-1">Sejarah & Visi Misi</span>
                    </a>
					
					<a href="/aprogram" class="col-md-2 shadow p-2 mt-2 mb-2 border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sticky-note"></i>
						<span class="nav-link-text ms-1">Program & Kegiatan</span>
                    </a>
					
					<a href="/apegawai" class="col-md-2 shadow p-2 mt-2 mb-2 border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-users"></i>
						<span class="nav-link-text ms-1">Daftar Pegawai</span>
                    </a>
					
					<a href="/afoto" class="col-md-2 shadow p-2 mt-2 mb-2 border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-images"></i>
						<span class="nav-link-text ms-1">Foto</span>
                    </a>
					
					<a href="/avideo" class="col-md-2 shadow p-2 mt-2 mb-2 border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-video"></i>
						<span class="nav-link-text ms-1">Video</span>
                    </a>
					
					<a href="/alayanan" class="col-md-2 shadow p-2 mt-2 mb-2 border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-headset"></i>
						<span class="nav-link-text ms-1">Layanan</span>
                    </a>
					
					<a href="/acontact" class="col-md-2 shadow p-2 mt-2 mb-2 border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-phone"></i>
						<span class="nav-link-text ms-1">Contact</span>
                    </a>
					

	</div>
	</div>
</div>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>

@endsection