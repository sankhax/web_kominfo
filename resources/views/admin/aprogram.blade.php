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
				<h6>Program dan Kegiatan</h6>
			</div>
			<div>
				<button type="button" class="btn btn-secondary btn-sm mb-0"  data-bs-toggle="modal" data-bs-target="#exampleModal">
					+&nbsp;Tambah Program/Kegiatan
				</button>
			</div>
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg  modal-dialog-centered">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Program/Kegiatan</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							  </div>
							  <form action="/aprogram/store" method="post" enctype="multipart/form-data">
							  {{ csrf_field() }}
							  <div class="modal-body">
									<div class="mb-3">
										<label for="judul" class="form-label" >Program</label>
										<input type="text" class="form-control" id="program" name="program" required="required">
									  </div>
									  <div class="mb-3">
										<label for="judul" class="form-label" >Kegiatan</label>
										<input type="text" class="form-control" id="kegiatan" name="kegiatan" required="required">
									  </div>
									  <div class="mb-3">
										<label for="judul" class="form-label" >Bidang/Sub Bagian/Seksi</label>
										<input type="text" class="form-control" id="sub" name="sub" required="required">
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-secondary">Tambah Program/Kegiatan</button>
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
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Program</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kegiatan</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Bidang/Sub Bagian/Seksi</th>
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
						{{ $user->Program}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0" style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:200px;">
					{{ $user->Kegiatan}}</p>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold" style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:200px;">
					{{$user->sub}}</span>
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
									<h5 class="modal-title" id="exampleModalLabel">Edit Program/Kegiatan</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								  </div>
								  <form action="/aprogram/update" method="post" enctype="multipart/form-data">
								  {{ csrf_field() }}
								  <input type="hidden" name="id" value="{{ $user->id }}">
								  <div class="modal-body">
									  <div class="mb-3">
										<label for="judul" class="form-label" >Program</label>
										<input type="text" class="form-control" id="program" name="program" required="required" value="{{ $user->Program}}">
									  </div>
									  <div class="mb-3">
										<label for="judul" class="form-label" >Kegiatan</label>
										<input type="text" class="form-control" id="kegiatan" name="kegiatan" required="required" value="{{ $user->Kegiatan}}">
									  </div>
									  <div class="mb-3">
										<label for="judul" class="form-label" >Bidang/Sub Bagian/Seksi</label>
										<input type="text" class="form-control" id="sub" name="sub" required="required" value="{{ $user->sub}}">
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
															<p class="text font-weight-bold mb-0">{{$user->Program}} ?</p>
														  </div>
													  </div>
													  <div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
														<a role="button" href="/aprogram/destroy/{{$user->id}}}" class="btn btn-secondary">Delete</a>
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