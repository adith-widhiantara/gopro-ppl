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
        @yield('proyek')
      </div>
    </div>
  </div>
</div>

<script>
var x = 0;
var y = 0;
var z = 0;
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
