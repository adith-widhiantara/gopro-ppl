@extends('user.petani.product.base')

@section('title', 'Product | GOPRO')

@section('product')
<div class="container" style="margin-top: 10px;">
  <div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Identitas Investor</h3>
          <form>
            <div class="form-group">
              <label for="formGroupExampleInput">Nama</label>
              <input disabled type="text" class="form-control" id="formGroupExampleInput" value="{{ $investasi -> user -> nama }}">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Email</label>
              <input disabled type="text" class="form-control" id="formGroupExampleInput2" value="{{ $investasi -> user -> email }}">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Kontak</label>
              <input disabled type="text" class="form-control" id="formGroupExampleInput2" value="{{ $investasi -> user -> kontak }}">
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Bukti Transfer</h2>
          <img src="{{ asset('imgupl/buktitf1/'.$investasi->buktitf1) }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
