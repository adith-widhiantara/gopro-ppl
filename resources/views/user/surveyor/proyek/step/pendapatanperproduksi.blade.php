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
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('hasilproduksi', $pengajuanpetani->id) }}">Hasil Produksi</a></li>
                        <li class="breadcrumb-item">Pendapatan Per Produksi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('proyek')
<div class="card-title">
  <h3>Pendapatan Per Produksi</h3>
</div>

<form method="post">
  @csrf
  @method('patch')
  <div class="row">
    <div class="col">
      <label for="formGroupExampleInput2">Biaya Operasional</label>
      <input disabled type="text" class="form-control" value="{{ $pengajuanpetani -> atotalsemua }}">
    </div>
    <div class="col">
      <label for="formGroupExampleInput2">Hasil Produksi</label>
      <input disabled type="text" class="form-control" value="{{ $pengajuanpetani -> btotalpenerimaan }}">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="formGroupExampleInput2">Laba Bersih</label>
      <input disabled type="text" class="form-control" id="num1" onkeyup="operasi(this)" value="{{ $pengajuanpetani -> clababersih }}">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="formGroupExampleInput2">Bagi Hasil</label>
      <input type="text" class="form-control" id="num2" onkeyup="operasi(this)" name="bagihasil">
    </div>
    <div class="col">
      <label for="formGroupExampleInput2">Nominal Bagi Hasil</label>
      <input disabled type="text" class="form-control" id="num3">
    </div>
  </div>

  <button style="margin-top:10px;" type="submit" class="btn btn-primary">Proses</button>
</form>

<script>
function operasi(obj) {
    var e = obj.id.toString();
    if (e == 'num1') {
        x = Number(obj.value);
        y = Number(document.getElementById('num2').value);
    } else {
        x = Number(document.getElementById('num1').value);
        y = Number(obj.value);
    }
    z = x * y/100;
    document.getElementById('num3').value = z;
    document.getElementById('update').innerHTML = z;
}
</script>
@endsection
