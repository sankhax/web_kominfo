@extends ('admin/atemplate')

@section('content')

<div>
	<div class="col-12 mt-4 mb-4">
                <div class="card mb-4 mx-4">
                    <div class="card-header">
					<div class="row">
					<div class="col-md-6 d-flex align-items-center">
                        <h6 class="mb-0">Contact Info</h6>
                    </div>
                    </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                    @foreach ($users as $user)
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class=" col d-flex flex-column align-content-center">
                                    <h6 class="mb-3 text-sm text-justify">{{$user->nama}}</h6>
									<span>{{$user->links}}</span> 
                                </div>
                                <div class="ms-auto">
                                    <a class="btn btn-link text-dark px-3 mb-0" href="" data-bs-toggle="modal" data-bs-target="#editModal{{$user->id}}"><i
                                    class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>

											<div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg  modal-dialog-centered">
												<div class="modal-content text-left">
												  <div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit {{$user->nama}}</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												  </div>
												  <form action="/acontact/update" method="post" enctype="multipart/form-data">
												  {{ csrf_field() }}
												  <input type="hidden" name="id" value="{{ $user->id }}">
												  <div class="modal-body">
													  <div class="mb-3">
														<label for="isi" class="form-label">Change Value</label>
														<input class="form-control" id="isi" name="isi" required="required" value="{{$user->links}}">
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

@endsection