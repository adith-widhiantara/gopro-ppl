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
    <div class="card">
      <div class="card-body">
        <h2 class="card-title"> Ubah Biodata</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <div class="card-body">
            <img src ="{{ asset('imgupl/photoprofile/'.Auth::user()->photo) }}" class="card-img-top" alt="Auth::user()->photo">
            <form>
              <div class="form-group">
                <label for="exampleFormControlFile1">Ubah Foto Profil</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
                <button style="float:right; margin-top: 10px;" type="submit" class="btn btn-warning">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form class="" method="post">
              @csrf
              @method('patch')
              <div class="form-row">

                <div class="form-group col-md-6">
                  <fieldset disabled>
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" value="{{Auth::user()->email}}">
                  </fieldset>
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
                  <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" name="tanggallahir" value="{{Auth::user()->tanggallahir}}" />
                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <h5 style="font-weight: 400; font-size: 16px;" for="jeniskelamin">Jenis Kelamin</h5>
                  <label class="custom-control custom-radio custom-control-inline">
                      <input type="radio" name="jeniskelamin" class="custom-control-input" value="Pria" @if(Auth::user()->jeniskelamin == "Pria") checked @endif><span class="custom-control-label">Pria</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                      <input type="radio" name="jeniskelamin" class="custom-control-input" value="Wanita" @if(Auth::user()->jeniskelamin == "Wanita") checked @endif><span class="custom-control-label">Wanita</span>
                  </label>
                </div>

                <div class="form-group col-md-6">
                  <label for="status">Status</label>
                  <select name="status" class="form-control">
                    <option >Pilih status pernikahan</option>
                    <option @if( Auth::user()->status == "Belum Menikah" ) selected @endif value="Belum Menikah">Belum Menikah</option>
                    <option @if( Auth::user()->status == "Sudah Menikah" ) selected @endif value="Sudah Menikah">Sudah Menikah</option>
                    <option @if( Auth::user()->status == "Cerai" ) selected @endif value="Cerai">Cerai</option>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="kontak">Kontak</label>
                  <input type="text" class="form-control" id="kontak" value="{{Auth::user()->kontak}}">
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Lihat KTP
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">KTP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <img src="{{ asset('imgupl/ktp/'.Auth::user()->ktp) }}" class="img-fluid" alt="Responsive image">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <div style="float: right;">
              <a class="btn btn-warning" href="{{ url('home/edit') }}">Ubah Data</a>
              <a class="btn btn-secondary" href="{{ url('/') }}">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Biodata -->
@endsection
