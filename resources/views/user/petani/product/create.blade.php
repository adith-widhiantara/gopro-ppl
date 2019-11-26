@extends('user.petani.product.base')

@section('title', 'Product | GOPRO')

@section('product')
<!-- alert biodata -->
@if(Auth::user()->nama == "")
  <div class="container alertbio">
    <div class="row">
      <div class="col-6 offset-3">
        <div class="alert alert-danger text-center" role="alert">
          Diharap untuk melengkapi biodata terlebih dahulu! <a href="{{ url('home/bio') }}">Klik disini</a>
        </div>
      </div>
    </div>
  </div>
@endif
<!-- alert biodata -->

<!-- Buat product -->
@if(Auth::user()->role == "petani")
  <div class="produk">
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Buat baru produk</h5>
          <form method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputEmail4">Nama Proyek Pendanaan</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="E. g : Perkebunan Buah Naga" name="nama">
                </div>

                <div class="form-group">
                  <label for="inputEmail4">Luas Lahan</label>
                  <div class="row">
                    <div class="col-8">
                      <input type="number" class="form-control" id="inputEmail4" placeholder="E. g : 50 Ha">
                    </div>
                    <div class="col-4">
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Satuan">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail4">Jenis Tanaman</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="E.g : Tembakau, Kakao">
                </div>

              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputEmail4">Scan Surat Tanah</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <div class="form-group">
                  <label for="inputEmail4">Scan Surat NPWP</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputEmail4">Jangka Waktu</label>
                  <div class="row">
                    <div class="col-8">
                      <input type="number" class="form-control" id="inputEmail4" placeholder="E. g : 2 Tahun">
                    </div>
                    <div class="col-4">
                      <fieldset disabled>
                        <input type="text" class="form-control" id="inputEmail4" value="Tahun">
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <button style="position: absolute; bottom: 0; right: 15px;" type="submit" class="btn btn-primary">Primary</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endif
<!-- End Buat product -->
@endsection
