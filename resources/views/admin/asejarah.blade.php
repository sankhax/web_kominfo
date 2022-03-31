@extends ('admin/atemplate')

@section('content')
<main>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-md-12 mb-lg-0 mb-4">
                        <div class="card mt-4">
						@foreach ($sejarah as $user)
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <h6 class="mb-0">Sejarah</h6>
                                    </div>
									<div class="col-md-6 text-right">
									<i href="" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}" title="Edit Card">
									<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									</i>
												<div class="modal-dialog modal-lg  modal-dialog-centered">
												<div class="modal-content text-left">
												  <div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit Sejarah</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												  </div>
												  <form action="/asejarah/updates" method="post" enctype="multipart/form-data">
												  {{ csrf_field() }}
												  <input type="hidden" name="id" value="{{ $user->id }}">
												  <div class="modal-body">
													  <div class="mb-3">
														<label for="isi" class="form-label">Sejarah</label>
														<textarea class="form-control" id="isi" rows="3" name="isi" required="required">{{$user->isejarah}} </textarea>
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
									</div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col">
									
                                        <div
                                            class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                            <h6 class="mb-0 text-justify">
											{{$user->isejarah}}
                                            </h6>
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
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
					<div class="row">
					<div class="col-md-6 d-flex align-items-center">
                        <h6 class="mb-0">Visi</h6>
                    </div>
					<div class="col-md-6 text-right">
                         <a class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#exampleModalvisi"><i
                         class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Visi</a>
                    </div>
					<div class="modal fade" id="exampleModalvisi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg  modal-dialog-centered">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Visi</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							  </div>
							  <form action="/asejarah/storev" method="post" enctype="multipart/form-data">
							  {{ csrf_field() }}
							  <div class="modal-body">
								  <div class="mb-3">
									<label for="isi" class="form-label">Visi</label>
									<textarea class="form-control" id="isi" rows="3" name="isi" required="required"> </textarea>
								  </div>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-secondary">Tambah Visi</button>
							  </div>
							  </form>
							</div>
						  </div>
						</div>
                    </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                    @foreach ($visi as $user)
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class=" col d-flex flex-column align-content-center">
                                    <h6 class="mb-3 text-sm text-justify">{{$user->ivisi}}</h6>
                                </div>
                                <div class="ms-auto">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="" data-bs-toggle="modal" data-bs-target="#deleteModal{{$user->id}}"><i
                                     class="far fa-trash-alt me-2"></i>Delete</a>
												<div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												  <div class="modal-dialog modal-lg  modal-dialog-centered">
													<div class="modal-content">
													  <div class="modal-body">
														  <div class="mb-3">
															<p class="text mb-0">Delete Content</p>
															<p class="text font-weight-bold mb-0">{{$user->ivisi}} ?</p>
														  </div>
													  </div>
													  <div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
														<a role="button" href="/asejarah/destrov/{{$user->id}}}" class="btn btn-secondary">Delete</a>
													  </div>
													</div>
												  </div>
												</div>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="" data-bs-toggle="modal" data-bs-target="#editModal{{$user->id}}"><i
                                    class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>

											<div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg  modal-dialog-centered">
												<div class="modal-content text-left">
												  <div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit Visi</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												  </div>
												  <form action="/asejarah/updatev" method="post" enctype="multipart/form-data">
												  {{ csrf_field() }}
												  <input type="hidden" name="id" value="{{ $user->id }}">
												  <div class="modal-body">
													  <div class="mb-3">
														<label for="isi" class="form-label">Visi</label>
														<textarea class="form-control" id="isi" rows="3" name="isi" required="required">{{$user->ivisi}} </textarea>
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

                                </div>
                            </li>
                        </ul>
                    @endforeach
                    </div>
				</div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
					<div class="row">
					<div class="col-md-6 d-flex align-items-center">
                        <h6 class="mb-0">Visi</h6>
                    </div>
					<div class="col-md-6 text-right">
                         <a class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#exampleModalmisi"><i
                         class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Misi</a>
                    </div>
						<div class="modal fade" id="exampleModalmisi" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
						  <div class="modal-dialog modal-lg  modal-dialog-centered">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalmisi">Tambah Misi</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							  </div>
							  <form action="/asejarah/storem" method="post" enctype="multipart/form-data">
							  {{ csrf_field() }}
							  <div class="modal-body">
								  <div class="mb-3">
									<label for="isi" class="form-label">Misi</label>
									<textarea class="form-control" id="isi" rows="3" name="isi" required="required"> </textarea>
								  </div>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-secondary">Tambah Misi</button>
							  </div>
							  </form>
							</div>
						  </div>
						</div>
                    </div>
                    </div>
                    <div class="card-body pt-4 p-3">
					@foreach ($misi as $user)
                       <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class=" col d-flex flex-column align-content-center">
                                    <h6 class="mb-3 text-sm text-justify">{{$user->imisi}}</h6>
                                </div>
                                <div class="ms-auto">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="" data-bs-toggle="modal" data-bs-target="#mdeleteModal{{$user->id}}"><i
                                     class="far fa-trash-alt me-2"></i>Delete</a>
												<div class="modal fade" id="mdeleteModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												  <div class="modal-dialog modal-lg  modal-dialog-centered">
													<div class="modal-content">
													  <div class="modal-body">
														  <div class="mb-3">
															<p class="text mb-0">Delete Content</p>
															<p class="text font-weight-bold mb-0">{{$user->imisi}} ?</p>
														  </div>
													  </div>
													  <div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
														<a role="button" href="/asejarah/destrom/{{$user->id}}}" class="btn btn-secondary">Delete</a>
													  </div>
													</div>
												  </div>
												</div>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="" data-bs-toggle="modal" data-bs-target="#meditModal{{$user->id}}"><i
                                    class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>

											<div class="modal fade" id="meditModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg  modal-dialog-centered">
												<div class="modal-content text-left">
												  <div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit Misi</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												  </div>
												  <form action="/asejarah/updatem" method="post" enctype="multipart/form-data">
												  {{ csrf_field() }}
												  <input type="hidden" name="id" value="{{ $user->id }}">
												  <div class="modal-body">
													  <div class="mb-3">
														<label for="isi" class="form-label">Misi</label>
														<textarea class="form-control" id="isi" rows="3" name="isi" required="required">{{$user->imisi}} </textarea>
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

                                </div>
                            </li>
                        </ul>
                    @endforeach
					</div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection