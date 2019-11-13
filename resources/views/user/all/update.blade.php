@extends('base.bootstrap')

@section('title', 'GoPro')

@section('bootstrap')
<head>
  <link rel="stylesheet" href="{{ asset('css/bio.css') }}">
</head>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <div class="gopro">
      <a class="navbar-brand" href="{{ url('/') }}">GOPRO</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Proyek Pendanaan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pertanyaan</a>
        </li>
      </ul>
      <div class="form-inline my-2 my-lg-0">
        <div class="dropdown">
          <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
          </a>

          <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="{{url('logout')}}">Keluar</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Biodata -->
<div class="biodata">
  <div class="container">
    <div class="row">
      <div class="col-6 offset-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Biodata</h5>
            <div class="card">
              <img src="{{ asset('imgupl/photoprofile/'.Auth::user()->photo) }}" class="card-img-top" alt="Auth::user()->photo">
              <div class="card-body">
                    <form>
                      @csrf
                      <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" value="{{Auth::user()->email}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" value="{{Auth::user()->username}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" value="{{Auth::user()->nama}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="tanggallahir">Tanggal Lahir</label>
                      <input type="text" class="form-control" id="tanggallahir" value="{{Auth::user()->tanggallahir}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="jeniskelamin">Jenis Kelamin</label>
                      <input type="text" class="form-control" id="jeniskelamin" value="{{Auth::user()->jeniskelamin}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="status">Status</label>
                      <input type="text" class="form-control" id="status" value="{{Auth::user()->status}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="kontak">Kontak</label>
                      <input type="text" class="form-control" id="kontak" value="{{Auth::user()->kontak}}">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-outline-warning">Ubah Data</button>
                </form>
              </div>
            </div>
            <a href="{{ url('') }}" class="card-link">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Biodata -->
@endsection
