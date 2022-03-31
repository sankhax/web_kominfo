@extends ('admin/atemplate')

@section('content')
<main>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Struktur Organisasi</h6>
                    </div>
                    <div class="card-body pt-4 p-3">
					@foreach ($users as $user)
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">Last Update : {{$user->tanggal}}</h6>
                                    <span class="mb-2 text-center">
									<img src="/image/structure/{{$user->image}}" width="90%">
									</span>
                                </div>
                                <div class="ms-auto">
                                    
									<a class="btn btn-link text-dark px-3 mb-0" href="" class="mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}">
									<i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true">
									</i>Edit
									
									</a>
									<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg  modal-dialog-centered">
												<div class="modal-content text-left">
												  <div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit Struktur</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												  </div>
												  <form action="/astruktur/update" method="post" enctype="multipart/form-data">
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