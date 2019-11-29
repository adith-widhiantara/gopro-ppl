@extends('user.petani.product.base')

@section('title', 'Product | GOPRO')

@section('product')
  <div style="margin-top: 10px;" class="container">
    <div class="row">
      <div class="col-8 offset-2">
        <div class="card">
          <div class="card-body">
            <h2 style="text-align: center;" class="card-title">Hasil Survey</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">{{ $pengajuanpetani -> namaproyek }}</h1>
            <h3>Luas Lahan : {{ $pengajuanpetani -> luaslahan }} {{ $pengajuanpetani -> satuan }}</h3>
            <h3>Jenis Tanaman :  {{ $pengajuanpetani -> jenistanaman }}</h3>
            <h3>Alamat : {{ $pengajuanpetani -> alamat }}</h3>
          </div>
        </div>
      </div>
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <h3 style="text-align: center;" class="card-title">Biaya Operasional</h3>
            <form>
              <div class="row">
                <div class="col">
                  <label for="formGroupExampleInput">Berat Pupuk</label>
                  <input disabled type="text" class="form-control" value="{{ $pengajuanpetani -> aberatpupuk }} kg">
                </div>
                <div class="col">
                  <label for="formGroupExampleInput">Harga Pupuk</label>
                  <input disabled type="text" class="form-control" value="{{ $pengajuanpetani -> asatuanpupuk }}">
                </div>
                <div class="col">
                  <label for="formGroupExampleInput">Total Harga Pupuk</label>
                  <input disabled type="text" class="form-control" value="{{ $pengajuanpetani -> atotalpupuk }}">
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-4">
                    <label for="formGroupExampleInput">Berat Bibit</label>
                    <input disabled type="text" class="form-control" id="bibit1" value="{{ $pengajuanpetani -> aberatbibit }} kg">
                  </div>
                  <div class="col-4">
                    <label for="formGroupExampleInput">Harga Bibit per Kg</label>
                    <input disabled type="number" class="form-control" id="bibit2" value="{{ $pengajuanpetani -> asatuanbibit }}">
                  </div>
                  <div class="col-4">
                    <label for="result">Total Bibit</label>
                    <input disabled type="number" class="form-control" id="bibit3" value="{{ $pengajuanpetani -> atotalbibit }}">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-4">
                    <label for="formGroupExampleInput">Jumlah Karyawan</label>
                    <input disabled type="text" class="form-control" id="bibit1" value="{{ $pengajuanpetani -> ajumlahkaryawan }}">
                  </div>
                  <div class="col-4">
                    <label for="formGroupExampleInput">Upah Tiap Karyawan</label>
                    <input disabled type="number" class="form-control" id="bibit2" value="{{ $pengajuanpetani -> asatuankaryawan }}">
                  </div>
                  <div class="col-4">
                    <label for="result">Total Upah Karyawan</label>
                    <input disabled type="number" class="form-control" id="bibit3" value="{{ $pengajuanpetani -> atotalkaryawan }}">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-4">
                    <label for="formGroupExampleInput">Total Operasional</label>
                    <input disabled type="text" class="form-control" id="bibit1" value="{{ $pengajuanpetani -> atotaloperasional }}">
                  </div>
                  <div class="col-4">
                    <label for="formGroupExampleInput">Sewa Lahan</label>
                    <input disabled type="number" class="form-control" id="bibit2" value="{{ $pengajuanpetani -> asewalahan }}">
                  </div>
                  <div class="col-4">
                    <label for="result">Total Peralatan</label>
                    <input disabled type="number" class="form-control" id="bibit3" value="{{ $pengajuanpetani -> atotalperalatan }}">
                  </div>
                </div>
              </div>
            </form>
            <h2>Nilai Investasi : {{ $pengajuanpetani -> atotalsemua }}</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">

  </script>
@endsection
