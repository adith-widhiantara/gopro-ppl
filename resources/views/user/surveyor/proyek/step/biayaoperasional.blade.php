@extends('user.surveyor.proyek.baseproyek')

@section('pageheader')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Biaya Operasional</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item">Data Rencana Proyek</li>
                        <li class="breadcrumb-item">Detail Data Rencana</li>
                        <li class="breadcrumb-item">Biaya Operasional</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

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
        <input type="number" class="@error('beratpupuk') is-invalid @enderror form-control " id="tb1" name="beratpupuk" onkeyup="calc(this)" value="{{ $pengajuanpetani->aberatpupuk }}">
        @error('beratpupuk')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-4">
        <label for="num2">Harga Pupuk per Kg</label>
        <input type="number" class="form-control" id="tb2" name="satuanpupuk" onkeyup="calc(this)" value="{{ $pengajuanpetani->asatuanpupuk }}">
      </div>
      <div class="col-4">
        <label for="result">Total Pupuk</label>
        <input type="number" class="form-control" id="total" disabled value="{{ $pengajuanpetani->atotalpupuk }}">
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

<script>
function calc(obj) {
    var e = obj.id.toString();
    if (e == 'tb1') {
        x = Number(obj.value);
        y = Number(document.getElementById('tb2').value);
    } else {
        x = Number(document.getElementById('tb1').value);
        y = Number(obj.value);
    }
    z = x * y;
    document.getElementById('total').value = z;
    document.getElementById('update').innerHTML = z;
}

function bibit(obj) {
    var e = obj.id.toString();
    if (e == 'bibit1') {
        x = Number(obj.value);
        y = Number(document.getElementById('bibit2').value);
    } else {
        x = Number(document.getElementById('bibit1').value);
        y = Number(obj.value);
    }
    z = x * y;
    document.getElementById('bibit3').value = z;
    document.getElementById('update').innerHTML = z;
}

function karyawan(obj) {
    var e = obj.id.toString();
    if (e == 'karyawan1') {
        x = Number(obj.value);
        y = Number(document.getElementById('karyawan2').value);
    } else {
        x = Number(document.getElementById('karyawan1').value);
        y = Number(obj.value);
    }
    z = x * y;
    document.getElementById('karyawan3').value = z;
    document.getElementById('update').innerHTML = z;
}
</script>
@endsection
