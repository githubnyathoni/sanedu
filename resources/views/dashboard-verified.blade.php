@extends('layouts.master')
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
        <h3>Selamat Datang, {{ Auth::user()->name }}</h3>
    </div>

    <table class="table table-hover w-75 mt-5 mx-auto shadow bg-white rounded">
        <tbody>
            <tr>
                <td>Kode Try Out</td>
                <td class="text-center font-weight-bold"><p class="mb-0" id="tryout">A18020</p><small class="form-text text-muted">Copy kode ini ke fitur SAN Class di aplikasi Sanedu.</small></td>
                <td class="text-center"><a href="#" onclick="copyElementText('tryout')">Copy</a></td>
            </tr>
            <tr>
                <td>Kode Kelas Pengantar</td>
                <td class="text-center font-weight-bold"><p class="mb-0" id="pengantar">982BEC</p><small class="form-text text-muted">Copy kode ini ke fitur SAN Class di aplikasi Sanedu.</small></td>
                <td class="text-center"><a href="#" onclick="copyElementText('pengantar')">Copy</a></td>
            </tr>
            <tr>
                <td>Kode Tes Minat Bakat</td>
                <td class="text-center font-weight-bold"><p class="mb-0" id="bakat">BAD5E5</p><small class="form-text text-muted">Copy kode ini ke fitur SAN Class di aplikasi Sanedu.</small></td>
                <td class="text-center"><a href="#" onclick="copyElementText('bakat')">Copy</a></td>
            </tr>
            <tr>
                <td>Kode Analisis Kompetensi Umum</td>
                <td class="text-center font-weight-bold"><p class="mb-0" id="umum">CE33A1</p><small class="form-text text-muted">Copy kode ini ke fitur SAN Class di aplikasi Sanedu.</small></td>
                <td class="text-center"><a href="#" onclick="copyElementText('umum')">Copy</a></td>
            </tr>
            <tr>
                <td>Kode Rasionalisasi Rapot</td>
                <td class="text-center font-weight-bold"><p class="mb-0" id="rapot">7DA5AF</p><small class="form-text text-muted">Copy kode ini ke fitur SAN Class di aplikasi Sanedu.</small></td>
                <td class="text-center"><a href="#" onclick="copyElementText('rapot')">Copy</a></td>
            </tr>
            <tr>
                <td colspan="2">Data Passing Grade</td>
                <td><button type="button" class="btn btn-success">Download</button></td>
            </tr>
            <tr>
                <td colspan="2">Jadwal Fasilitas</td>
                <td><button type="button" class="btn btn-success">Download</button></td>
            </tr>
        </tbody>
    </table>

    
    <div class="card mt-5 mb-5 mx-auto shadow bg-white rounded w-75">
        <div class="card-body">
            <h6 class="card-title">Rekomendasi Strategi</h6>
            <p>{{$user->recomendation}}</p>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function copyElementText(id) {
        var text = document.getElementById(id).innerText;
        var elem = document.createElement("textarea");
        document.body.appendChild(elem);
        elem.value = text;
        elem.select();
        document.execCommand("copy");
        alert("Berhasil dicopy: " + elem.value);
        document.body.removeChild(elem);
    }
  </script>
  @endsection