@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{asset('css/image-picker.css') }}">
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#d2d5dc;">
    <a href="\"><img class="navbar-brand" src="{{ asset('logo.png')}}"></a>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Hallo, {{ Auth::user()->name }}
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
        </form>
      </div>
    </ul>
    </div>
</nav>

<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <img src="{{ asset('logo_legacy.png')}}" width="100px"/>
    </div>

    <div class="card mt-5 shadow bg-white rounded">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <p class="font-weight-bold mb-0">Pesanan Anda</p>
                <p class="font-weight-bold mb-0">Biaya</p>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2 col-md-2">
                    <img src="{{ asset('logo_legacy_2.png')}}" width="100px"/>
                </div>
                <div class="col col-md-8">
                    <p class="font-weight-bold">Legacy Project III</p>
                </div>
                <div class="col col-md-2">
                    <p class="text-right font-weight-bold">@currency($product->price)</p>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col mt-1">
                    <p class="text-left">Diskon 90%</p>
                </div>
                <div class="col mt-1">
                    <p class="font-weight-bold text-right text-danger">- @currency($product->price*0.9)</p>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col">
                    <p class="font-weight-bold text-left">Total</p>
                </div>
                <div class="col">
                    <p class="font-weight-bold text-right">Rp. 250.000</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill text-success" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                    Garansi Uang Kembali 100%*</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-5 mb-5 shadow bg-white rounded">
        <div class="card-body">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Syarat dan Ketentuan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-justify">Sebelum Anda membeli  dan menggunakan paket pendampingan Legacy Project pastikan Anda telah membaca, memahami, dan menyetujui semua persyaratan. Dengan membeli dan menggunakan paket pendampingan Legacy Project, kami menganggap Anda telah membaca, memahami dan menerima persyaratan penggunaan yang berlaku.</p>
                            <h5>Lisensi & Penggunaan</h5>
                            <p class="text-justify">Legacy project adalah program pendampingan dibawah naungan Lembaga Konsultan dan Pendampingan Belajar Sanedu Indonesia salah satu unit usaha dari PT. Wahana Gerak Indonesia, seluruh user dari legacy project akan diberikan seluruh fasilitas yang telah tercantum pada brosur promosi dan landing page website legacy project. Seluruh user wajib untuk mentaati seluruh aturan yang berlaku meliputi:</p>
                            <ul>
                                <li><p class="text-justify">Seluruh soal dan pembahasan pada program ini adalah bagian yang tak terpisahkan dari Sanedu yang dilindungi oleh hak cipta, maka seluruh user dilarang menyebarluaskan dan memperbanyak seluruh elemen di dalamnya tanpa sepengetahuan dan izin tertulis dari Sanedu Indonesia.</p></li>
                                <li><p class="text-justify">Seluruh siswa wajib menjaga kondusifitas jalannya program ini, dengan tidak mengganggu privasi dari user lain atau menggunakan fasilitas yang ada untuk kepentingan pribadi yang tidak berkaitan dengan program ini.</p></li>
                                <li><p class="text-justify">Jika user melanggar poin 1 dan 2 dan atau menimbulkan kerugian bagi user lain atau Sanedu Indonesia, maka pihak sanedu berhak untuk mengeliminir user dari program ini tanpa ganti rugi.</p></li>
                            </ul>
                            <h5>Pembayaran</h5>
                            <p class="text-justify">Pembayaran dapat dilakukan melalui transfer bank (BCA, Mandiri & ATM Bersama) dan kartu kredit (via Paypal). Anda juga dapat melakukan pembelian secara offline dengan datang langsung ke kantor kami. Tidak diperbolehkan membeli dengan sistem patungan/urunan karena keanggotaan (membership) hanya untuk perorangan saja.</p>
                            <h5>Dukungan & Bantuan</h5>
                            <p class="text-justify">Kami menyediakan layanan dukungan melalui helpdesk member area dengan mengirimkan ticket support. Pastikan Anda mengirimkan ticket support sesuai format yang dijelaskan pada halaman helpdesk.</p>
                            <p class="text-justify">Kami juga membuka semua jalur komunikasi (email, telepon, sms dan konsultasi langsung ke kantor Sanedu indonesia) kepada Anda agar dapat dengan leluasa menghubungi kami kapanpun Anda mau. Layanan dukungan selain melalui helpdesk member area, Anda diharuskan memberikan informasi terkait userid dan email Anda yang terdaftar di akun Legacy Project. Hal ini akan memungkinkan kami untuk memverifikasi apakah Anda berhak untuk menerima dukungan.</p>
                            <h5>Privacy Policy</h5>
                            <p class="text-justify">Seluruh data user dan hasil analisis user berhak dipergunakan Sanedu Indonesia dalam hal kepentingan Sanedu Indonesia, baik untuk promosi, pengumpulan testimony, survei dan hal hal lain yang berkaitan dengan proses usaha Sanedu Indonesia. Dan sanedu wajib menjaga kerahasiaan data data tersebut yang dapat disalahgunakan oleh pihak lain. Sanedu Indonesia juga tidak ada kewajiban apapun kepada user dalam hal penggunaan data untuk kepentingan Sanedu Indonesia.</p>
                            <p class="text-justify">Kebijakan ini tidak mengikat dan Sanedu Indonesia berhak untuk melakukan berbagai perubahan di masa mendatang.</p>
                            <h5>Ketentuan Garansi Uang kembali</h5>
                            <ol>
                                <li><p class="text-justify">Garansi uang kembali hanya berlaku untuk pembayaran lunas</p></li>
                                <li><p class="text-justify">Garansi uang kembali hanya berlaku jika user merasa tidak puas atas pelayanan Sanedu setelah mengikuti program selama 2 minggu terhitung setelah dimulainya program, jika lebih dari 2 minggu setelah program dimulai user tidak ada keluhan maka garansi uang kembali tidak berlaku lagi.</p></li>
                                <li><p class="text-justify">Jika dalam waktu kurang dari 2 minggu user tidak mengikuti 1 saja fasilitas yang diberikan maka secara otomatis garansi dianggap hangus</p></li>
                            </ol>
                            <h5>Penginapan saat UTBK</h5>
                            <p class="text-justify">Bantuan penginapan saat UTBK hanya berlaku untuk siswa yang berdomisili di luar Kota Bandar Lampung, serta siswa yang bersangkutan berada pada peringkat 1 sampai 50 yang ditentukan berdasarkan peringkat akumulasi tryout selama program.</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('order')}}">
                @csrf
                <h4 class="mt-2">Pilih metode pembayaran</h4>
                <select name="metode" class="image-picker show-html">
                    <option data-img-src="{{ asset('bni.jpg')}}" value="1">Cute Kitten 1</option>
                    <option data-img-src="{{ asset('bri.jpg')}}" value="2">Cute Kitten 1</option>
                    <option data-img-src="{{ asset('dana.jpg')}}" value="3">Cute Kitten 1</option>
                    <option data-img-src="{{ asset('gopay.jpg')}}" value="4">Cute Kitten 1</option>
                </select>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" name="snk" required>
                    <label class="form-check-label" for="defaultCheck1">
                        Dengan ini saya mendaftar dan menyetujui <a href="#exampleModal" data-toggle="modal" data-target="#exampleModal"> Syarat dan Ketentuan</a> pengguna.
                    </label>
                </div> 
                <div class="row">
                    <div class="col">
                        <p class="font-weight-bold mt-2 mb-0">Total Bayar</p>
                        <h5>Rp. 250.000</h5>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-success btn-lg float-right">Bayar Sekarang</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script src="{{asset('js/image-picker.js') }}"></script>
    <script src="{{asset('js/image-picker.min.js') }}"></script>
    <script>$("select").imagepicker()</script>
@endsection