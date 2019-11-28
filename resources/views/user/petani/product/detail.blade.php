@extends('user.petani.product.base')

@section('title', 'Product | GOPRO')

@section('product')
  <div style="margin-top: 10px;" class="container">
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
            <h2 class="card-title">Hasil Survey</h2>
            <form>
              <div class="row">
                <div class="col">
                  <label for="formGroupExampleInput">Berat Pupuk</label>
                  <input disabled type="text" class="form-control" value="{{ $pengajuanpetani -> aberatpupuk }} kg">
                </div>
                <div class="col">
                  <label for="formGroupExampleInput">Example label</label>
                  <input type="text" class="form-control" value="{{ $pengajuanpetani -> asatuanpupuk }}">
                </div>
                <div class="col">
                  <label for="formGroupExampleInput">Example label</label>
                  <input type="text" class="form-control" placeholder="Last name">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
