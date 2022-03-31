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
			  <h6>Table Pengaduan</h6>
			</div>					
        </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kontak</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
				  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="max-width:4px">Action</th>
                </tr>
              </thead>
              <tbody>
			  @foreach ($users as $user)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                        <p class="text-xs font-weight-bold mb-0">{{ $user->nama}}</p>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $user->kontak}}</p>
                  </td>
				  <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:3px;">
                    <p class="text-xs font-weight-bold mb-0">{{ $user->isi}}</p>
                  </td>
                  <td class="align-middle" style="max-width:4px">
					<a href="" class="mx-2 text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#viewModal{{ $user->id}}">
                      View
                    </a>
					<a href="" class="mx-2 text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $user->id}}">
                      Delete
                    </a>
                  </td>
				  <div class="modal fade" id="viewModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg  modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-body">
									<div class="mb-3">
										<p class="text mb">Nama :<b> {{$user->nama}} </b></p>
										<p class="text mb">Kontak :<b> {{$user->kontak}} </b></p>
										<p class="text mb-0">Deskripsi :</p>
										<p class="text mb">{{$user->isi}}</p>
										<p class="text mb">Lampiran :<a href="/lampiran/{{$user->lampiran}}" target="_blank">
										<b> {{$user->lampiran}} </b> </a></p>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
												<div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												  <div class="modal-dialog modal-lg  modal-dialog-centered">
													<div class="modal-content">
													  <div class="modal-body">
														  <div class="mb-3">
															<p class="text mb-0">Delete Pengaduan</p>
															<p class="text font-weight-bold mb-0">{{$user->nama}} ?</p>
														  </div>
													  </div>
													  <div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
														<a role="button" href="/dpengaduan/{{$user->id}}}" class="btn btn-secondary">Delete</a>
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