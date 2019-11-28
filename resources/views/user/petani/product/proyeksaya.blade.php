@extends('user.petani.product.base')

@section('title', 'Product | GOPRO')

@section('product')
<head>
  <link rel="stylesheet" href="{{ asset('css/petani/index.css') }}">
</head>
<!-- alert biodata -->
@if(Auth::user()->nama == "")
  <div class="container alertbio">
    <div class="row">
      <div class="col-6 offset-3">
        <div class="alert alert-danger text-center" role="alert">
          Diharap untuk melengkapi biodata terlebih dahulu! <a class="alert-link" href="{{ url('home/bio') }}">Klik disini</a>
        </div>
      </div>
    </div>
  </div>
@endif
<!-- alert biodata -->

@if(count($pengajuanpetani)>0)
<!-- Table Pengajuan Petani -->
<div style="margin-top: 50px;" class="container">
  <div class="row">
    <div class="col-1">
      <div class="card">
        <div class="card-body">
          <a href="{{ URL::previous() }}"><i style="font-size: 35px;" class="fa fa-caret-left" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="col-6 offset-2">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title">Daftar Proyek</h1>
        </div>
      </div>
    </div>
  </div>
  @foreach($pengajuanpetani as $peng)
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="col-6">
                  <label for="inputEmail4">Nama Proyek</label>
                  <input disabled type="text" class="form-control" id="inputEmail4" value="{{ $peng -> namaproyek }}">
                </div>
                <div class="col-6">
                  <label for="inputEmail4">Luas Lahan</label>
                  <input disabled type="text" class="form-control" id="inputEmail4" value="{{ $peng -> luaslahan }} {{ $peng -> satuan }}">
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label for="inputEmail4">Jenis Tanaman</label>
                  <input disabled type="text" class="form-control" id="inputEmail4" value="{{ $peng -> jenistanaman }}">
                </div>
                <div class="col-6">
                  <label for="inputEmail4">Jangka Waktu</label>
                  <input disabled type="text" class="form-control" id="inputEmail4" value="{{ $peng -> jangkawaktu }} Tahun">
                </div>
              </div>
              <div style="margin-top: 20px;" class="row">
                <div class="col-md-4">
                  <button onClick="window.open('{{ asset('imgupl/gambar1/'.$peng->gambar1) }}');" class="btn btn-primary">Gambar Kondisi 1</button>
                </div>
                <div class="col-md-4">
                  <button onClick="window.open('{{ asset('imgupl/gambar2/'.$peng->gambar2) }}');" class="btn btn-primary">Gambar Kondisi 2</button>
                </div>
                <div class="col-md-4">
                  <button onClick="window.open('{{ asset('imgupl/gambar3/'.$peng->gambar3) }}');" class="btn btn-primary">Gambar Kondisi 3</button>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row">
                <div class="col-4">
                  <label for="inputEmail4">NPWP</label>
                  <img id="myImg-{{ $peng -> id }}" src="{{ asset('imgupl/NPWP/'.$peng -> NPWP) }}" alt="" class="img-fluid" style="width:100%;max-width:300px">

                  <div id="myModal-{{ $peng -> id }}" class="modal">
                    <span class="close-{{ $peng -> id }}">&times;</span>
                    <img class="modal-content" id="img01-{{ $peng -> id }}">
                    <div id="caption"></div>
                  </div>
                </div>
                <div class="col-4">
                  <label for="inputEmail4">Surat Tanah</label>
                  <img id="myImg" src="{{ asset('imgupl/surattanah/'.$peng -> surattanah) }}" alt="" class="img-fluid" style="width:100%;max-width:300px">

                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>
                </div>
                <div class="col-4">
                  <label for="inputEmail4">Status</label>
                  @if($peng->check == 0)
                  <div class="card bg-danger">
                    <div class="card-body text-white">
                      Belum Dicek Oleh Surveyor
                    </div>
                  </div>
                  @elseif($peng->check == 1)
                  <div class="card bg-warning">
                    <div class="card-body text-white">
                      Proyek Telah Dicek Oleh Surveyor. <a href="{{ route('proyeksayadetail', $peng->id) }}" class="card-link">Details</a>
                    </div>
                  </div>
                  @elseif($peng->check == 2)
                  <div class="card bg-success">
                    <div class="card-body text-white">
                      Proyek Telah Disetujui Oleh Surveyor.<br>
                      <a href="{{ route('proyeksayadetail', $peng->id) }}" class="card-link">Klik Detail</a>
                    </div>
                  </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
<!-- End Table Pengajuan Petani -->
@else
<div style="margin-top: 10px;" class="container">
  <div class="card text-center">
    <div class="card-header">
      GOPRO
    </div>
    <div class="card-body">
      <h5 class="card-title">Rencana Proyek Saya Masih Kosong</h5>
      <p class="card-text">Segera buat proyek melalui GOPRO. Untuk hasil yang lebih baik.</p>
      <a href="{{ route('buatrencanaproyek') }}" class="btn btn-primary">Klik disini utnuk membuat proyek</a>
    </div>
    <div class="card-footer text-muted">
      GOPRO
    </div>
  </div>
</div>
@endif

@if(count($pengajuanpetani)>0)
@foreach($pengajuanpetani as $peng)
<script>
// Get the modal
var modal = document.getElementById("myModal-{{ $peng -> id }}");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg-{{ $peng -> id }}");
var modalImg = document.getElementById("img01-{{ $peng -> id }}");
var captionText = document.getElementById("caption");
img.onclick = function(){
modal.style.display = "block";
modalImg.src = this.src;
captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-{{ $peng -> id }}")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
modal.style.display = "block";
modalImg.src = this.src;
captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}
</script>
@endforeach
@endif
@endsection
