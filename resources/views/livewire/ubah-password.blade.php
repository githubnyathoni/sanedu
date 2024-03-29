<div>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">List User</a>
        <form class="form-inline">
            <input wire:model="search_pass" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </form>
    </nav>

    <table class="table table-responsive-xl table-hover mt-4 text-center">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Asal Sekolah</th>
            <th scope="col">Email</th>
            <th scope="col">Nomor WhatsApp</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @forelse($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->school }}</td>
                <td>{{ $user->email }}</td>
                <td><a target="_blank" href="/\api.whatsapp.com/send/?phone={{$user->phone_number}}">{{ $user->phone_number}}</a></td>
                <td>
                    <button type="button" data-toggle="modal" data-target="#change_password{{$user->id}}" class="btn btn-info" style="color:white;" data-toggle="tooltip" data-placement="top" title="Ubah Password"><i class="fa fa-lock"></i></button>
                        <div class="modal" id="change_password{{$user->id}}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ubah Password</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="password" class="col-form-label">Masukkan Password Baru:</label>
                                        <input placeholder="Masukkan Password" type="text" wire:model.defer="change_pass" class="form-control mt-2">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button wire:click="change({{ $user->id }})" target="_blank" class="btn btn-success" data-dismiss="modal">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </td>
                <td>
                    <button type="button" data-toggle="modal" data-target="#delete_user{{$user->id}}" class="btn btn-danger" style="color:white;" data-toggle="tooltip"   data-placement="top" title="Hapus User"><i class="fa fa-trash"></i></button>
                    <div class="modal" id="delete_user{{$user->id}}" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Apakah anda yakin akan menghapus <h6>{{$user->name}}</h6>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" wire:click="delete({{$user->id}})" class="btn btn-primary" data-dismiss="modal">Yakin</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </td>
            </tr>
            @empty
                <h6 class="text-center">Data Tidak Ditemukan</h6>
            @endforelse
        </tbody>
    </table>

    <ul class="pagination justify-content-end">
      {{ $users->links() }}
    </ul>

</div>