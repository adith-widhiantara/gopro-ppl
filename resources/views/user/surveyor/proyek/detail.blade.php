@extends('user.surveyor.base')

@section('title', 'Surveyor | GOPRO')

@section('titlepageheader', 'Detail Rencana Proyek')

@section('surveyor')
<div class="card">
  <div class="card-body">
    <h1 class="card-title">{{ $pengajuanpetani->namaproyek }}</h1>
    <div class="row">
      <div class="col-6">
        <h3>Luas Lahan : {{ $pengajuanpetani->luaslahan }} {{ $pengajuanpetani->satuan }}</h3>
        <h3>Jenis Tanaman : {{ $pengajuanpetani->jenistanaman }}</h3>
        <h3>Jangka Waktu : {{ $pengajuanpetani->jangkawaktu }} tahun</h3>
        <h3>Alamat : {{ $pengajuanpetani->alamat }}</h3>
      </div>
      <div class="col-6">
        <div class="row">
          <div class="col-6">
            <button onClick="window.open('{{ asset('imgupl/NPWP/'.$pengajuanpetani->NPWP) }}');" class="btn btn-primary btn-lg btn-block">NPWP</button>
          </div>
          <div class="col-6">
            <button onClick="window.open('{{ asset('imgupl/surattanah/'.$pengajuanpetani->surattanah) }}');" class="btn btn-primary btn-lg btn-block">Surat Tanah</button>
          </div>
        </div>
        <div style="margin-top: 10px;" class="row">
          <div class="col-4">
            <button onClick="window.open('{{ asset('imgupl/gambar1/'.$pengajuanpetani->gambar1) }}');" class="btn btn-primary btn-lg btn-block">Kondisi 1</button>
          </div>
          <div class="col-4">
            <button onClick="window.open('{{ asset('imgupl/gambar2/'.$pengajuanpetani->gambar2) }}');" class="btn btn-primary btn-lg btn-block">Kondisi 2</button>
          </div>
          <div class="col-4">
            <button onClick="window.open('{{ asset('imgupl/gambar3/'.$pengajuanpetani->gambar3) }}');" class="btn btn-primary btn-lg btn-block">Kondisi 3</button>
          </div>
        </div>
        <div style="margin-top: 10px;" class="row">
          <div class="col-8 offset-2">
            <a class="btn btn-success btn-lg btn-block" href="{{ route('biayaoperasional',$pengajuanpetani->id) }}" role="button">Tindak Lanjut</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
