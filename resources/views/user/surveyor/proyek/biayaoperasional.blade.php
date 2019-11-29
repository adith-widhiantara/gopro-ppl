@extends('user.surveyor.proyek.baseproyek')

@section('proyek')
<div class="card-title">
  <h3>Biaya Operasional</h3>
</div>
<form method="post">
  @csrf
  @method('patch')
  <div class="form-group">
    <div class="row">
      <div class="col-4">
        <label for="num1">Berat Pupuk (Kg)</label>
        <input type="number" class="form-control" id="tb1" name="beratpupuk" onkeyup="calc(this)">
      </div>
      <div class="col-4">
        <label for="num2">Harga Pupuk per Kg</label>
        <input type="number" class="form-control" id="tb2" name="satuanpupuk" onkeyup="calc(this)">
      </div>
      <div class="col-4">
        <label for="result">Total Pupuk</label>
        <input type="number" class="form-control" id="total" disabled>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-4">
        <label for="formGroupExampleInput">Berat Bibit (Kg)</label>
        <input type="number" class="form-control" id="bibit1" name="beratbibit" onkeyup="bibit(this)">
      </div>
      <div class="col-4">
        <label for="formGroupExampleInput">Harga Bibit per Kg</label>
        <input type="number" class="form-control" id="bibit2" name="satuanbibit" onkeyup="bibit(this)">
      </div>
      <div class="col-4">
        <label for="result">Total Bibit</label>
        <input type="number" class="form-control" id="bibit3" disabled>
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
      <div class="col-4">
        <label for="formGroupExampleInput">Jumlah Pegawai</label>
        <input type="number" class="form-control" id="karyawan1" name="jumlahkaryawan" onkeyup="karyawan(this)">
      </div>
      <div class="col-4">
        <label for="formGroupExampleInput">Upah Tiap Pegawai</label>
        <input type="number" class="form-control" id="karyawan2" name="satuankaryawan" onkeyup="karyawan(this)">
      </div>
      <div class="col-4">
        <label for="result">Total Bibit</label>
        <input type="number" class="form-control" id="karyawan3" disabled>
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

  <button type="submit" class="btn btn-primary">Selanjutnya</button>
</form>
@endsection
