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

<form method="post">
  @csrf
  @method('patch')
  <div class="row">
    <div class="col-4">
      <div class="form-group">
        <label for="formGroupExampleInput2">Jumlah Bibit (Kg)</label>
        <input disabled type="number" class="form-control" id="bibit1" onkeyup="hasilbibit(this)" value="{{ $pengajuanpetani -> aberatbibit }}">
      </div>
    </div>

    <div class="col-4">
      <div class="form-group">
        <label for="formGroupExampleInput2">Persentase Keberhasilan (%)</label>
        <input type="number" class="form-control" id="bibit2" onkeyup="hasilbibit(this)" name="survivalrate">
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
        <input type="number" class="form-control" id="produksi1" onkeyup="produksijadi(this)" name="satuanjadi">
      </div>
    </div>

    <div class="col-4">
      <div class="form-group">
        <label for="formGroupExampleInput2">Harga Jual per Kg</label>
        <input type="number" class="form-control" id="produksi2" onkeyup="produksijadi(this)" name="hargajual">
      </div>
    </div>

    <div class="col-4">
      <div class="form-group">
        <label for="formGroupExampleInput2">Total Penerimaan</label>
        <input disabled type="number" class="form-control" id="produksi3" >
      </div>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Selanjutnya</button>
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
    if (e == 'produksi1') {
        x = Number(obj.value);
        y = Number(document.getElementById('produksi2').value);
    } else {
        x = Number(document.getElementById('produksi1').value);
        y = Number(obj.value);
    }
    w = x * y * z;
    document.getElementById('produksi3').value = w;
    document.getElementById('update').innerHTML = w;
}
</script>
@endsection
