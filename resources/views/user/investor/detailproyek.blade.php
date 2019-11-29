@extends('user.petani.product.base')

@section('title', 'Detail Proyek')

@section('product')
<div style="margin-top: 10px;" class="container">
  <div class="row">
    <div class="col-8 offset-2">

      <div class="card">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img height="500px;" src="{{ asset('imgupl/gambar1/'.$pengajuanpetani->gambar1) }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img height="500px;" src="{{ asset('imgupl/gambar2/'.$pengajuanpetani->gambar2) }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img height="500px;" src="{{ asset('imgupl/gambar3/'.$pengajuanpetani->gambar3) }}" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="card-body">
          <h1 style="text-align: center;" class="card-title">{{ $pengajuanpetani -> namaproyek }}</h1>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h2 class="card-title" style="text-align: center;">Biaya Operasional</h2>
          <div class="row">
            <div class="col-6">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Total Kebutuhan Pupuk</label>
                  <input disabled type="text" class="form-control" id="formGroupExampleInput" value="{{ $pengajuanpetani -> atotalpupuk }}">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Total Operasional</label>
                  <input disabled type="text" class="form-control" id="formGroupExampleInput2" value="{{ $pengajuanpetani -> atotaloperasional }}">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Total Sewa Lahan</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $pengajuanpetani -> asewalahan }}" disabled>
                </div>
              </form>
            </div>
            <div class="col-6">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Total Kebutuhan Bibit</label>
                  <input disabled type="text" class="form-control" id="formGroupExampleInput" value="{{ $pengajuanpetani -> atotalbibit }}">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Total Upah Karyawan</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $pengajuanpetani -> atotalkaryawan }}" disabled>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Total Peralatan</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $pengajuanpetani -> atotalperalatan }}" disabled>
                </div>
              </form>
            </div>
          </div>
          <h2>Nilai Investasi : {{ $pengajuanpetani -> atotalsemua }}</h2>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h2 class="card-title" style="text-align: center;">Hasil Produksi</h2>
          <div class="row">
            <div class="col-6">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Total Bibit</label>
                  <input disabled type="text" class="form-control" id="formGroupExampleInput2" value="{{ $pengajuanpetani -> aberatbibit }}">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Total Produksi</label>
                  <input disabled type="text" class="form-control" id="formGroupExampleInput" value="{{ $pengajuanpetani -> btotaljadi }}">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Harga Jual Tiap Kg</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $pengajuanpetani -> bhargajual }}" disabled>
                </div>
              </form>
            </div>
            <div class="col-6">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Survival Rate</label>
                  <input disabled type="text" class="form-control" id="formGroupExampleInput" value="{{ $pengajuanpetani -> bsurvivalrate }} %">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Berat Rata-Rata Produksi</label>
                  <input disabled type="text" class="form-control" id="formGroupExampleInput2" value="{{ $pengajuanpetani -> bsatuanjadi }} Kg">
                </div>
              </form>
            </div>
          </div>
          <h2>Hasil Produksi : {{ $pengajuanpetani -> btotalpenerimaan }}</h2>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h2 class="card-title" style="text-align: center;">Pendapatan Per Produksi</h2>
          <div class="row">
            <div class="col-6">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Hasil Produksi</label>
                  <input disabled type="text" class="form-control" id="formGroupExampleInput2" value="{{ $pengajuanpetani -> btotalpenerimaan }}">
                </div>
              </form>
            </div>
            <div class="col-6">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Biaya Operasional</label>
                  <input disabled type="text" class="form-control" id="formGroupExampleInput" value="{{ $pengajuanpetani -> atotalsemua }}">
                </div>
              </form>
            </div>
          </div>
          <h2>Laba Bersih : {{ $pengajuanpetani -> clababersih }}</h2>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h2 class="card-title" style="text-align: center;">Prosentase Bagi Hasil</h2>
          <div class="row">
            <div class="col-6">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Pendapatan Per Produksi</label>
                  <input disabled type="text" class="form-control" id="formGroupExampleInput2" value="{{ $pengajuanpetani -> clababersih }}">
                </div>
              </form>
            </div>
            <div class="col-6">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Bagi Hasil</label>
                  <input disabled type="text" class="form-control" id="formGroupExampleInput" value="{{ $pengajuanpetani -> cbagihasil }} %">
                </div>
              </form>
            </div>
          </div>
          <h2>Jumlah : {{ $pengajuanpetani -> cjumlah }}</h2>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h2 class="card-title" style="text-align: center;">Estimasi Pendapatan Investor</h2>
          <div class="row">
            <div class="col-6">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Nilai Investasi</label>
                  <input disabled type="text" class="form-control" id="formGroupExampleInput2" value="{{ $pengajuanpetani -> dtotalnilaiinvestasi }}">
                </div>
              </form>
            </div>
            <div class="col-6">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">ROI</label>
                  <input disabled type="text" class="form-control" id="formGroupExampleInput" value="{{ $pengajuanpetani -> droi }} %">
                </div>
              </form>
            </div>
          </div>
          <h2>Keuntungan : {{ $pengajuanpetani -> dtotalbagihasil }}</h2>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <form method="post">
            @csrf
            <input type="hidden" name="pengajuanpetani_id" value="{{ $pengajuanpetani->id }}">
            <button type="submit" class="btn btn-success">Ambil</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
