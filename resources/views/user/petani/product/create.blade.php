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
          <h2 class="card-title">Buat baru produk</h2>
          <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputEmail4">Nama Proyek Pendanaan</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="E. g : Perkebunan Buah Naga" name="namaproyek" value="{{ old('namaproyek') }}">
                </div>

                <div class="form-group">
                  <label for="inputEmail4">Luas Lahan</label>
                  <div class="row">
                    <div class="col-8">
                      <input type="number" class="form-control" id="inputEmail4" placeholder="E. g : 50 Ha" name="luaslahan" value="{{ old('luaslahan') }}">
                    </div>
                    <div class="col-4">
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Satuan" name="satuan" value="{{ old('satuan') }}">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail4">Jenis Tanaman</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="E.g : Tembakau, Kakao" name="jenistanaman" value="{{ old('jenistanaman') }}">
                </div>

              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputEmail4">Scan Surat Tanah</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="surattanah" value="{{ old('surattanah') }}">
                </div>

                <div class="form-group">
                  <label for="inputEmail4">Scan Surat NPWP</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="NPWP" value="{{ old('NPWP') }}">
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <label for="inputEmail4">Upload gambar keadaan terkini kondisi lahan</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar1" value="{{ old('gambar1') }}">
                  </div>
                  <div class="col-md-4">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar2" value="{{ old('gambar2') }}">
                  </div>
                  <div class="col-md-4">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar3" value="{{ old('gambar3') }}">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputEmail4">Jangka Waktu</label>
                  <div class="row">
                    <div class="col-8">
                      <input type="number" class="form-control" id="inputEmail4" placeholder="E. g : 2 Tahun" name="jangkawaktu" value="{{ old('jangkawaktu') }}">
                    </div>
                    <div class="col-4">
                      <fieldset disabled>
                        <input type="text" class="form-control" id="inputEmail4" value="Tahun">
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>


            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputEmail4">Alamat</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="E.g : Jln. Danau Toba" name="alamat" value="{{ old('alamat') }}">
                </div>
              </div>

              <div class="col-md-6">
                <button style="position: absolute; bottom: 0; right: 15px;" type="submit" class="btn btn-primary">Kirim</button>
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
