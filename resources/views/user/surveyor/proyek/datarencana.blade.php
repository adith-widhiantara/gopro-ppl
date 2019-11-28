@extends('user.surveyor.base')

@section('title', 'Surveyor | GOPRO')

@section('titlepageheader', 'Data Rencana Proyek')

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
