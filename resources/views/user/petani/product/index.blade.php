@extends('base.bootstrap')

@section('title', 'Product')

@section('bootstrap')
<head>
  <link rel="stylesheet" href="{{ url('css/product.css') }}">
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
          <a class="nav-link active" href="#">Proyek Pendanaan</a>
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
            <a class="dropdown-item" href="#">Lihat Akun</a>
            <a class="dropdown-item" href="{{url('logout')}}">Keluar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Buat product -->
<div class="produk">
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Buat baru produk</h5>
        <form>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Judul Produk">
            </div>

            <div class="col">
              <input type="number" class="form-control" placeholder="Harga">
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Buat product -->

@endsection
