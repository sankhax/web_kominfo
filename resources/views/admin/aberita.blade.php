@extends ('admin/atemplate')

@section('content')


<div>
   <div class="row mt-4 mb-4">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Semua Berita</h5>
                        </div>
						
						<!-- Button trigger modal -->
						<div class="text-center" >
						<button type="button" class="btn bg-gradient-primary btn-sm mb-0"  data-bs-toggle="modal" data-bs-target="#exampleModal">
						+&nbsp;Tambah Berita
						</button> <br>
						<a href=""  data-bs-toggle="modal" data-bs-target="#kategori">
						<small> Tambah Kategori </small>
						</a>
						<div class="modal fade" id="kategori" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
								<div class="modal-dialog modal-lg  modal-dialog-centered">
									<div class="modal-content text-left">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Tambah Kategori </h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												  </div>
												  <form action="/aberita/addtags" method="post" enctype="multipart/form-data">
												  {{ csrf_field() }}
												  <input type="hidden" name="id" value="">
												  <div class="modal-body">
												  <label>List Kategori</label>
														<select class="form-select">
														@foreach ($tag as $tags)
														  <option value="{{$tags->id}}">{{$tags->tag}}</option>
														@endforeach
														</select>
													  <div class="mb-3">
														<label for="isi" class="form-label">Tambah Kategori :</label>
														<input class="form-control" id="isi" rows="3" name="isi" required="required">  </input>
													  </div>
												  </div>
												  <div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-secondary">Tambah</button>
												  </div>
												  </form>
												</div>
											  </div>
									</div>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg  modal-dialog-centered">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							  </div>
							  <form action="/aberita/store" method="post" enctype="multipart/form-data">
							  {{ csrf_field() }}
							  <div class="modal-body">
								  <div class="mb-3">
									<label for="judul" class="form-label" >Judul</label>
									<input type="text" class="form-control" id="judul" name="judul" required="required">
								  </div>
								  <div class="mb-3">
									<label for="isi" class="form-label">Isi Berita</label>
									<textarea class="form-control" id="isi" rows="3" name="isi" required="required"> </textarea>
								  </div>
								  <div class="mb-3">
									<label for="kategori" class="form-label" >Kategori</label>
									<select class="form-select" id="kategori" name="kategori">
									@foreach ($tag as $tags)
									  <option value="{{$tags->id}}">{{$tags->tag}}</option>
									@endforeach
									</select>
								  </div>
								  <div class="mb-3">
									<label for="foto" class="form-label">Foto</label>
									<input class="form-control" type="file" id="foto" name="foto" required="required">
								  </div>
									<div class="mb-3">
									<label for="tanggal" class="form-label">Tanggal</label>
									<input class="form-control" type="date" id="tanggal" name="tanggal" required="required">
								   </div>
								
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-secondary">Tambah Berita</button>
							  </div>
							  </form>
							</div>
						  </div>
						</div>
						
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Foto
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Judul
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Isi Berita
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal
                                    </th>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
							@foreach($users as $user)
                                <tr>
                                    <td class="ps-4" style="width:2px">
                                        <p class="text-xs font-weight-bold mb-0">{{ $loop->index+1 }}</p>
                                    </td>
                                    <td style="width:2px">
                                        <div>
                                            <img src="/image/news/{{$user->foto}}" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center" style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                                        <p class="text-xs font-weight-bold mb-0">{{$user->judul}}</p>
                                    </td>
                                    <td class="text-center" style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:3px;">
                                        <p class="text-xs font-weight-bold mb-0">{{$user->isi}}</p>
                                    </td>
                                    <td class="text-center" style="width:2px">
                                        <span class="text-secondary text-xs font-weight-bold">{{$user->tanggal}}</span>
                                    </td>
                                    <td class="text-center" style="width:10px">
                                        <a href="" class="mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}">
                                            <i class="fas fa-user-edit text-secondary"></i>
											<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        </a>
										  <div class="modal-dialog modal-lg  modal-dialog-centered">
												<div class="modal-content text-left">
												  <div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit Berita</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												  </div>
												  <form action="/aberita/update" method="post" enctype="multipart/form-data">
												  {{ csrf_field() }}
												  <input type="hidden" name="id" value="{{ $user->id }}">
												  <div class="modal-body">
													  <div class="mb-3">
														<label for="judul" class="form-label" >Judul</label>
														<input type="text" class="form-control" id="judul" name="judul" required="required" value="{{$user->judul}}">
													  </div>
													  <div class="mb-3">
														<label for="isi" class="form-label">Isi Berita</label>
														<textarea class="form-control" id="isi" rows="3" name="isi" required="required">{{$user->isi}} </textarea>
													  </div>
													  <div class="mb-3">
														<label for="foto" class="form-label">Foto</label>
														<input class="form-control" type="file" id="foto" name="foto"> 
														</div>
														<div class="mb-3">
														<label for="tanggal" class="form-label">Tanggal</label>
														<input class="form-control" type="date" id="tanggal" name="tanggal" required="required" value="{{$user->tanggal}}">
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
                                        <a href="" data-bs-toggle="modal" data-bs-target="#deleteModal{{$user->id}}">
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
												</a>
												<div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												  <div class="modal-dialog modal-lg  modal-dialog-centered">
													<div class="modal-content">
													  <div class="modal-body">
														  <div class="mb-3">
															<p class="text mb-0">Delete Content</p>
															<p class="text font-weight-bold mb-0">{{$user->judul}} ?</p>
														  </div>
													  </div>
													  <div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
														<a role="button" href="/aberita/destroy/{{$user->id}}}" class="btn btn-secondary">Delete</a>
													  </div>
													</div>
												  </div>
												</div>
                                    </td>
                                </tr>
                            @endforeach
							</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<div class="d-flex justify-content-center mt-4">
			{{$users->links()}}
		</div> 
</div>


@endsection