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
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('biayaoperasional', $pengajuanpetani->id) }}">Biaya Operasional</a></li>
                        <li class="breadcrumb-item">Hasil Produksi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('proyek')
<div class="card-title">
  <h3>Hasil Produksi</h3>
</div>

<form>
  <div class="row">
    <div class="col-4">
      <div class="form-group">
        <label for="formGroupExampleInput2">Jumlah Bibit (Kg)</label>
        <input type="number" class="form-control" id="bibit1" onkeyup="hasilbibit(this)">
      </div>
    </div>

    <div class="col-4">
      <div class="form-group">
        <label for="formGroupExampleInput2">Persentase Keberhasilan (%)</label>
        <input type="number" class="form-control" id="bibit2" onkeyup="hasilbibit(this)">
      </div>
    </div>

    <div class="col-4">
      <div class="form-group">
        <label for="formGroupExampleInput2">Total Hasil Produksi Jadi (Kg)</label>
        <input disabled type="number" class="form-control" id="bibit3" >
        <i class="fas fa-percentage"></i>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <div class="form-group">
        <label for="formGroupExampleInput2">Berat Rata-Rata Produksi Jadi (Kg)</label>
        <input type="number" class="form-control" id="bibit1" onkeyup="produksijadi(this)">
      </div>
    </div>

    <div class="col-4">
      <div class="form-group">
        <label for="formGroupExampleInput2">Harga Jual per Kg</label>
        <input type="number" class="form-control" id="bibit2" onkeyup="produksijadi(this)">
      </div>
    </div>

    <div class="col-4">
      <div class="form-group">
        <label for="formGroupExampleInput2">Total Penerimaan</label>
        <input disabled type="number" class="form-control" id="bibit3" >
        <i class="fas fa-percentage"></i>
      </div>
    </div>
  </div>
</form>

<script>
function hasilbibit(obj) {
    var e = obj.id.toString();
    if (e == 'bibit1') {
        x = Number(obj.value);
        y = Number(document.getElementById('bibit2').value);
    } else {
        x = Number(document.getElementById('bibit1').value);
        y = Number(obj.value);
    }
    z = x * (y/100);
    document.getElementById('bibit3').value = z;
    document.getElementById('update').innerHTML = z;
}

function produksijadi(obj) {
    var e = obj.id.toString();
    if (e == 'bibit1') {
        x = Number(obj.value);
        y = Number(document.getElementById('bibit2').value);
    } else {
        x = Number(document.getElementById('bibit1').value);
        y = Number(obj.value);
    }
    z = x * (y/100);
    document.getElementById('bibit3').value = z;
    document.getElementById('update').innerHTML = z;
}
</script>
@endsection
