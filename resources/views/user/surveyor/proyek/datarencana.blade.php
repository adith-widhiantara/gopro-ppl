@extends('user.surveyor.base')

@section('title', 'Surveyor | GOPRO')

@section('titlepageheader', 'Data Rencana Proyek')

@section('pageheader')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Data Rencana Proyek</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Rencana Proyek</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('surveyor')
  @foreach($pengajuanpetani as $sur)
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <h2>{{ $sur -> namaproyek }}</h2>
            <p>Luas Lahan : {{ $sur -> luaslahan }} {{ $sur -> satuan }}</p>
          </div>
          <div class="col-4">
            <p>Jenis Tanaman : {{ $sur -> jenistanaman }}</p>
            <p>Jangka Waktu : {{ $sur -> jangkawaktu }} tahun</p>
            <p>Pemilik : <a href="{{ route('detailpetani', $sur -> user -> id) }}">{{ $sur -> user -> nama }}</a></p>
          </div>
          <div class="col-4">
            <a class="btn btn-primary" href="{{ route('detailproyek', $sur -> id) }}">Detail</a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endsection
