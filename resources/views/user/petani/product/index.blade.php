@extends('user.petani.product.base')

@section('title', 'Product | GOPRO')

@section('product')
<head>
  <!-- <link rel="stylesheet" href="{{ asset('css/petani/index.css') }}"> -->
</head>
<!-- alert biodata -->
@if(Auth::user()->nama == "")
  <div class="container alertbio">
    <div class="row">
      <div class="col-6 offset-3">
        <div class="alert alert-danger text-center" role="alert">
          Diharap untuk melengkapi biodata terlebih dahulu! <a class="alert-link" href="{{ url('home/bio') }}">Klik disini</a>
        </div>
      </div>
    </div>
  </div>
@endif
<!-- alert biodata -->

@if (session('status'))
<div style="margin-top: 10px;" class="container">
  <div class="alert alert-primary" role="alert">
    {{ session('status') }}
  </div>
</div>
@endif

@if(Auth::user()->role == "petani")
<div style="margin-top: 50px;" class="container">
  <a class="btn btn-primary" href="{{ url('home/product/create') }}">Buat Proyek</a>
  <a class="btn btn-primary" href="{{ route('proyeksaya') }}">Lihat Proyek Saya</a>
  <a class="btn btn-primary" href="{{ route('tf') }}">Proyek Saya Disetujui</a>
</div>
@endif

<!-- Table Pengajuan Petani -->
<div style="margin-top: 50px;" class="container">
  <div class="row">
    <div class="col-6 offset-3">
      <div class="card">
        <div class="card-body">
          <h1 style="text-align: center;" class="card-title">Daftar Proyek</h1>
        </div>
      </div>
    </div>
  </div>
  @foreach($pengajuanpetani as $peng)
  <div class="row">
    <div class="col-4">
      <div class="card">
        <img src="{{ asset('imgupl/gambar1/'.$peng->gambar1) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title" style="text-align: center;">{{ $peng -> namaproyek}}</h3>
          <h4 style="text-align : center;">Harga :<br>{{ $peng -> dtotalnilaiinvestasi }}</h4>
          <h4 style="text-align : center;">ROI :<br>{{ $peng -> droi }}</h4>
          <div style="text-align: center;">
            <a class="btn btn-primary" href="{{ route('detailproyekinves',$peng->id) }}">Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
<!-- End Table Pengajuan Petani -->

@endsection
