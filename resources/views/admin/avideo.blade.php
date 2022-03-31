@extends ('admin/atemplate')

@section('content')


<main>
      <div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
		<div class="d-flex flex-row justify-content-between">
			<div>
				<h6>Semua Video</h6>
			</div>
			<div>
				<button type="button" class="btn btn-secondary btn-sm mb-0"  data-bs-toggle="modal" data-bs-target="#exampleModal">
					+&nbsp;Tambah Video
				</button>
			</div>
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg  modal-dialog-centered">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Video</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							  </div>
							  <form action="/avideo/store" method="post" enctype="multipart/form-data">
							  {{ csrf_field() }}
							  <div class="modal-body">
									<div class="mb-3">
										<label for="judul" class="form-label" >Judul</label>
										<input type="text" class="form-control" id="judul" name="judul" required="required">
									  </div>
									  <div class="mb-3">
										<label for="judul" class="form-label" >Video (link video ubah ke embed)</label>
										<input class="form-control" type="file" id="video" name="video">
										<input type="text" class="form-control" id="linkv" name="linkv">
										<small id="linkvHelp" class="form-text text-muted">ex : https://www.youtube.com/watch?v=clU8c2fpk2s to https://www.youtube.com/embed/clU8c2fpk2s</small>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-secondary">Tambah Video</button>
							  </div>
							  </form>
							</div>
						  </div>
						</div>
						</div>
        </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Link Video</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
			  @foreach ($users as $user)
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div>
                        <h6 class="text-xs mb-0" style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:300px;">
						{{ $user->judul}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0" style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:200px;">
					{{ $user->linkv}}</p>
                  </td>
                  <td class="align-middle" style="max-width:2px">
                    <button class="btn btn-link text-secondary mb-0"  data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
					<ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" data-bs-toggle="modal" data-bs-target="#editModal{{$user->id}}" href="">Edit</a>
					  </li>
                      <li><a class="dropdown-item border-radius-md" data-bs-toggle="modal" data-bs-target="#deleteModal{{$user->id}}" href="">Delete</a>
					  </li>
                    </ul>
						<div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg  modal-dialog-centered">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Edit</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								  </div>
								  <form action="/avideo/update" method="post" enctype="multipart/form-data">
								  {{ csrf_field() }}
								  <input type="hidden" name="id" value="{{ $user->id }}">
								  <div class="modal-body">
									  <div class="mb-3">
										<label for="judul" class="form-label" >Judul</label>
										<input type="text" class="form-control" id="program" name="judul" required="judul" value="{{ $user->judul}}">
									  </div>
									  <div class="mb-3">
										<label for="linkv" class="form-label" >Link Video (link video ubah ke embed)</label>
										<input class="form-control" type="file" id="video" name="video">
										<input type="text" class="form-control" id="linkv" name="linkv" required="required" value="{{ $user->linkv}}">
										<small id="linkvHelp" class="form-text text-muted">ex : https://www.youtube.com/watch?v=clU8c2fpk2s to https://www.youtube.com/embed/clU8c2fpk2s</small>
									  </div>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-secondary">Update</button>
							  </div>
							  </form>
							</div>
						  </div>
						</div>
						
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
														<a role="button" href="/avideo/destroy/{{$user->id}}}" class="btn btn-secondary">Delete</a>
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
</div>
    </main>

@endsection