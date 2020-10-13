<div>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Rekomendasi</a>
        <form class="form-inline">
            {{-- <input wire:model="search_rekom" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> --}}
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
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->user->school }}</td>
                <td>{{ $order->user->email }}</td>
                <td><a target="_blank" href="/\api.whatsapp.com/send/?phone={{$order->user->phone_number}}">{{ $order->user->phone_number}}</a></td>
                <td>
                <button type="button" data-toggle="modal" data-target="#rekomendasi{{$order->id}}" class="btn btn-success" style="color:white;">Buat Rekomendasi</button>
                        <div class="modal" id="rekomendasi{{$order->id}}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title">Buat Rekomendasi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <label for="password" class="col-form-label">Masukkan Rekomendasi:</label>
                                    <textarea wire:model.defer="recomendation" type="text" row="5" class="form-control mt-2" id="password1"></textarea>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button wire:click="recom({{ $order->user->id }})" class="btn btn-success" data-dismiss="modal">Simpan</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
    </nav>
</div>