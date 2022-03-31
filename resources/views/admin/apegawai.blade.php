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
			  <h6>Table Pegawai</h6>
			</div>
						<button type="button" class="btn bg-gradient-primary btn-sm mb-0"  data-bs-toggle="modal" data-bs-target="#exampleModal">
							+&nbsp;Tambah Pegawai
						</button>
						
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg  modal-dialog-centered">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							  </div>
							  <form action="/apegawai/store" method="post" enctype="multipart/form-data">
							  {{ csrf_field() }}
							  <div class="modal-body">
								  <div class="mb-3">
									<label for="judul" class="form-label" >Nama</label>
									<input type="text" class="form-control" id="nama" name="nama" required="required">
								  </div>
								  <div class="mb-3">
									<label for="isi" class="form-label">Jabatan</label>
									<input type="text" class="form-control" id="jabatan" name="jabatan" required="required">
								  </div>
								  <div class="mb-3">
									<label for="foto" class="form-label">Foto</label>
									<input class="form-control" type="file" id="foto" name="foto" required="required">
									</div>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-secondary">Tambah Pegawai</button>
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
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan</th>
				  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="max-width:4px">Action</th>
                </tr>
              </thead>
              <tbody>
			  @foreach ($users as $user)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="/image/employee/{{$user->foto}}" class="avatar avatar-sm me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{ $user->nama}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $user->jabatan}}</p>
                  </td>
                  <td class="align-middle" style="max-width:4px">
                    <a href="" class="mx-2 text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#editModal{{ $user->id}}">
                      Edit
                    </a>
					<a href="" class="mx-2 text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $user->id}}">
                      Delete
                    </a>
                  </td>
						<div class="modal fade" id="editModal{{ $user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg  modal-dialog-centered">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							  </div>
							  <form action="/apegawai/update" method="post" enctype="multipart/form-data">
							  {{ csrf_field() }}
							  <input type="hidden" name="id" value="{{ $user->id }}">
							  <div class="modal-body">
								  <div class="mb-3">
									<label for="judul" class="form-label" >Nama</label>
									<input type="text" class="form-control" id="nama" name="nama" required="required" value="{{ $user->nama}}">
								  </div>
								  <div class="mb-3">
									<label for="isi" class="form-label">Jabatan</label>
									<input type="text" class="form-control" id="jabatan" name="jabatan" required="required" value="{{ $user->jabatan}}">
								  </div>
								  <div class="mb-3">
									<label for="foto" class="form-label">Foto</label>
									<input class="form-control" type="file" id="foto" name="foto">
									</div>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-secondary">Update Pegawai</button>
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
															<p class="text font-weight-bold mb-0">{{$user->nama}} ?</p>
														  </div>
													  </div>
													  <div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
														<a role="button" href="/apegawai/destroy/{{$user->id}}}" class="btn btn-secondary">Delete</a>
													  </div>
													</div>
												  </div>
												</div>
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