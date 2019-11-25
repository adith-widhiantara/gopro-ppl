@extends('base.bootstrap')

@section('title', 'GoPro')

@section('bootstrap')
<head>
  <link rel="stylesheet" href="{{ asset('css/biodata.css') }}">
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

<!-- Isian -->
<div class="container isian">
  <div class="row">
    <div class="col-3">
      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{ asset('img/man-user.png') }}" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Selamat Datang!</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="tigatombol">
        <ul>
          <li><a class="btn" href="#" role="button"><i class="fa fa-home" aria-hidden="true"></i> Halaman Depan</a></li>
          <li><a class="btn" href="#" role="button"><i class="fa fa-file" aria-hidden="true"></i> Riwayat Permodalan</a></li>
          <li><a class="btn o" href="#" role="button"><i class="fa fa-user-o" aria-hidden="true"></i> Profilku</a></li>
        </ul>
      </div>
    </div>
    <div class="col-9 profilku">
      <h3>Profilku</h3>
      <div class="row">
        <div class="col-4">
          <form action="{{ url('home/bio/photo') }} " method="post" enctype="multipart/form-data">
            @csrf
            <div class="card unggah">
              @if( Auth::user()->photo == "")
                <img src="{{ asset('img/man-user.png') }}" class="card-img-top" alt="...">
              @else
                <img src="{{ asset('imgupl/photoprofile/'.Auth::user()->photo) }}" class="card-img-top" alt="...">
              @endif
              <div class="card-body">
                <p class="card-text">Besar file maksimum : 10 Megabytes.<br>Ekstensi file yang diperbolehkan .JPG .JPEG .PNG</p>
                <div class="form-group">
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
                </div>
                <button type="submit" class="btn btn-success">Unggah</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-8 bio">
          <form action="{{ url('home/bio/bioup') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="namalengkap">Nama Lengkap</label>
              <input type="text" class="form-control" id="namalengkap" placeholder="e.g : Aditya Saktyawan Widhiantara" name="nama">
            </div>

            <div class="form-group">
              <label for="tanggallahir">Tanggal Lahir</label>
              <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" name="tanggallahir" />
                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <h5 style="font-weight: 400; font-size: 16px;" for="jeniskelamin">Jenis Kelamin</h5>
              <label class="custom-control custom-radio custom-control-inline">
                  <input type="radio" name="jeniskelamin" class="custom-control-input" value="Pria"><span class="custom-control-label">Pria</span>
              </label>
              <label class="custom-control custom-radio custom-control-inline">
                  <input type="radio" name="jeniskelamin" class="custom-control-input" value="Wanita"><span class="custom-control-label">Wanita</span>
              </label>
            </div>

            <div class="form-group">
              <label for="status">Status</label>
              <select name="status" class="form-control">
                <option selected>Pilih status pernikahan</option>
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Sudah Menikah">Sudah Menikah</option>
                <option value="Cerai">Cerai</option>
              </select>
            </div>

            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" placeholder="e.g : adithwidhiantara" name="username">
            </div>

            <fieldset disabled>
              <div class="form-group">
                <label for="formGroupExampleInput">Email</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="{{ Auth::user()->email }}">
              </div>
            </fieldset>

            <div class="form-group">
              <label for="kontak">Kontak</label>
              <input type="text" class="form-control phone-inputmask" id="kontak" placeholder="" name="kontak">
            </div>

            <div class="form-group">
              <label for="KTP">Masukkan KTP</label>
              <input type="file" class="form-control-file" id="KTP" name="ktp">
            </div>

            <div class="form-group">
              <label for="perusahaan">Perusahaan</label>
              <input type="text" class="form-control" id="perusahaan" placeholder="e.g : PT. ABC tbk" name="perusahaan">
            </div>

            <button type="submit" class="btn btn-warning">Simpan</button>
            <a style="float: right;" class="btn btn-outline-warning" href="#">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Isian -->
@endsection
