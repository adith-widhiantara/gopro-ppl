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

<!-- Table Pengajuan Petani -->
<div style="margin-top: 50px;" class="container">
  <div class="row">
    <div class="col-6 offset-3">
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
                  <input type="email" class="form-control" id="inputEmail4" value="{{ $peng -> namaproyek }}">
                </div>
                <div class="col-6">
                  <label for="inputEmail4">Luas Lahan</label>
                  <input type="email" class="form-control" id="inputEmail4" value="{{ $peng -> luaslahan }} {{ $peng -> satuan }}">
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label for="inputEmail4">Jenis Tanaman</label>
                  <input type="email" class="form-control" id="inputEmail4" value="{{ $peng -> jenistanaman }}">
                </div>
                <div class="col-6">
                  <label for="inputEmail4">Jangka Waktu</label>
                  <input type="email" class="form-control" id="inputEmail4" value="{{ $peng -> jangkawaktu }} Tahun">
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
                  <img id="myImg-{{ $peng -> surattanah }}" src="{{ asset('imgupl/surattanah/'.$peng -> surattanah) }}" alt="" class="img-fluid" style="width:100%;max-width:300px">

                  <div id="myModal-{{ $peng -> surattanah }}" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01-{{ $peng -> surattanah }}">
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
                      Proyek Telah Dicek Oleh Surveyor.
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
var modal = document.getElementById("myModal-{{ $peng -> surattanah }}");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg-{{ $peng -> surattanah }}");
var modalImg = document.getElementById("img01-{{ $peng -> surattanah }}");
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
@endsection
