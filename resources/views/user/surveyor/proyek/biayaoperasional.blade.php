@extends('user.surveyor.base')

@section('title', 'Surveyor | GOPRO')

@section('titlepageheader', 'Data Rencana Proyek')

@section('biayaoperasional', 'Biaya Operasional')

@section('surveyor')
<div class="row">
  <div class="col-5">
    <div class="card">
      <div class="card-header">
        <h3>Identitas Lahan</h3>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <h1 class="card-title">{{ $pengajuanpetani->namaproyek }}</h1>
          <h5>Luas Lahan : {{ $pengajuanpetani->luaslahan }} {{ $pengajuanpetani->satuan }}</h5>
          <h5>Jenis Tanaman : {{ $pengajuanpetani-> jenistanaman }}</h5>
          <h5>Jangka Waktu : {{ $pengajuanpetani-> jangkawaktu }} tahun</h5>
        </li>
        <li class="list-group-item">
          <h5>Nama Pemilik lahan : {{ $pengajuanpetani-> user-> nama }}</h5>
          <h5>Alamat Pemilik lahan : {{ $pengajuanpetani-> alamat }}</h5>
        </li>
      </ul>
    </div>
  </div>
  <div class="col-7">
    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h3>Biaya Operasional</h3>
        </div>
        <form method="post">
          @csrf
          @method('patch')
          <div class="form-group">
            <div class="row">
              <div class="col-6">
                <label for="formGroupExampleInput">Berat Pupuk</label>
                <input type="number" class="form-control" id="formGroupExampleInput" name="beratpupuk">
              </div>
              <div class="col-6">
                <label for="formGroupExampleInput">Harga Pupuk per Kg</label>
                <input type="number" class="form-control" id="formGroupExampleInput" name="satuanpupuk">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-6">
                <label for="formGroupExampleInput">Berat Bibit</label>
                <input type="number" class="form-control" id="formGroupExampleInput" name="beratbibit">
              </div>
              <div class="col-6">
                <label for="formGroupExampleInput">Harga Bibit per Kg</label>
                <input type="number" class="form-control" id="formGroupExampleInput" name="satuanbibit">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-12">
                <label for="formGroupExampleInput">Total Operasional</label>
                <input type="number" class="form-control" id="formGroupExampleInput" name="totaloperasional">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-6">
                <label for="formGroupExampleInput">Jumlah Pegawai</label>
                <input type="number" class="form-control" id="formGroupExampleInput" name="jumlahkaryawan">
              </div>
              <div class="col-6">
                <label for="formGroupExampleInput">Upah Tiap Pegawai</label>
                <input type="number" class="form-control" id="formGroupExampleInput" name="satuankaryawan">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-6">
                <label for="formGroupExampleInput">Sewa Lahan</label>
                <input type="number" class="form-control" id="formGroupExampleInput" name="sewalahan">
              </div>
              <div class="col-6">
                <label for="formGroupExampleInput">Total Biaya Peralatan</label>
                <input type="number" class="form-control" id="formGroupExampleInput" name="totalperalatan">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
