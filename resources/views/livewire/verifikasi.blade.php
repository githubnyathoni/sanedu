<div>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Verifikasi Pembayaran</a>
        <form class="form-inline">
            <input wire:model="search_verif" class="form-control mr-sm-2" type="search" placeholder="Masukkan Invoice" aria-label="Search">
        </form>
    </nav>

    <table class="table table-responsive-xl table-hover mt-4 text-center">
        <thead>
          <tr>
            <th scope="col">Invoice</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Pembayaran</th>
            <th scope="col">Bukti Pembayaran</th>
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
            @if ($message = Session::get('reject'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @foreach($orders as $order)
            <tr>
                <td>#{{$order->id}}</td>
                <td>{{$order->user->name}}</td>
                <td>{{$order->created_at}}</td>
                <td>
                    <a class="image-link" data-target="#myModal{{$order->id}}" data-toggle="modal">{{$order->photo}}</a>
                    <div id="myModal{{$order->id}}" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="{{asset('uploads/'.$order->photo)}}" width="500px" height="500px" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <button type="button" data-toggle="modal" data-target="#verifikasi{{$order->user_id}}" class="btn btn-primary">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                    </button>
                        <div class="modal" id="verifikasi{{$order->user_id}}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title">Verifikasi Pembayaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <p>Yakin <span style="color:blue" class="font-weight-bold">Terima</span> Pembayaran?</p>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button wire:click="verify({{ $order->id }})" onClick="javascript:window.open('https://api.whatsapp.com/send/?phone={{$order->user->phone_number}}&text=Terima%20Kasih!%0APemesanan%20anda%20telah%20berhasil%20diverifikasi.', '_blank');" class="btn btn-primary" data-dismiss="modal">Ya</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    <button type="button" data-toggle="modal" data-target="#reject{{$order->user_id}}" class="btn btn-danger">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                        </svg>
                    </button>
                        <div class="modal" id="reject{{$order->user_id}}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title">Verifikasi Pembayaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <p>Yakin <span style="color:red" class="font-weight-bold">Tolak</span> Pembayaran?</p>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button wire:click="reject({{ $order->id }})" onClick="javascript:window.open('https://api.whatsapp.com/send/?phone={{$order->user->phone_number}}&text=Halo%21%0AMohon+maaf+pesanan+anda+telah+ditolak.%0ASilahkan+untuk+verifikasi+pembayaran+pada+website+kami.', '_blank');" type="button" class="btn btn-primary" data-dismiss="modal">Ya</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    <a href="/\api.whatsapp.com/send/?phone={{$order->user->phone_number}}" type="button" target="_blank" class="btn btn-info">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                        </svg>
                    </a>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
    <ul class="pagination justify-content-end">
      {{ $orders->links() }}
    </ul>
</div>


