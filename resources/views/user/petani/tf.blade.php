@extends('user.petani.product.base')

@section('title', 'Product | GOPRO')

@section('product')
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
  @foreach($investasi as $inv)
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="col-6">
                  <label for="inputEmail4">Nama Proyek</label>
                  <input disabled type="text" class="form-control" id="inputEmail4" value="{{ $inv -> pengajuanpetani -> namaproyek }}">
                </div>
                <div class="col-6">
                  <label for="inputEmail4">Luas Lahan</label>
                  <input disabled type="text" class="form-control" id="inputEmail4" value="{{ $inv -> pengajuanpetani -> luaslahan }} {{ $inv -> pengajuanpetani -> satuan }}">
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label for="inputEmail4">Jenis Tanaman</label>
                  <input disabled type="text" class="form-control" id="inputEmail4" value="{{ $inv -> pengajuanpetani -> jenistanaman }}">
                </div>
                <div class="col-6">
                  <label for="inputEmail4">Jangka Waktu</label>
                  <input disabled type="text" class="form-control" id="inputEmail4" value="{{ $inv -> pengajuanpetani -> jangkawaktu }} Tahun">
                </div>
              </div>
              <div style="margin-top: 20px;" class="row">
                <div class="col-md-4">
                  <button onClick="window.open('{{ asset('imgupl/gambar1/'.$inv -> pengajuanpetani->gambar1) }}');" class="btn btn-primary">Gambar Kondisi 1</button>
                </div>
                <div class="col-md-4">
                  <button onClick="window.open('{{ asset('imgupl/gambar2/'.$inv -> pengajuanpetani->gambar2) }}');" class="btn btn-primary">Gambar Kondisi 2</button>
                </div>
                <div class="col-md-4">
                  <button onClick="window.open('{{ asset('imgupl/gambar3/'.$inv -> pengajuanpetani->gambar3) }}');" class="btn btn-primary">Gambar Kondisi 3</button>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row">
                <div class="col-4">
                  <label for="inputEmail4">NPWP</label>
                  <img id="myImg-{{ $inv -> pengajuanpetani -> id }}" src="{{ asset('imgupl/NPWP/'.$inv -> pengajuanpetani -> NPWP) }}" alt="" class="img-fluid" style="width:100%;max-width:300px">

                  <div id="myModal-{{ $inv -> pengajuanpetani -> id }}" class="modal">
                    <span class="close-{{ $inv -> pengajuanpetani -> id }}">&times;</span>
                    <img class="modal-content" id="img01-{{ $inv -> pengajuanpetani -> id }}">
                    <div id="caption"></div>
                  </div>
                </div>
                <div class="col-4">
                  <label for="inputEmail4">Surat Tanah</label>
                  <img id="myImg" src="{{ asset('imgupl/surattanah/'.$inv -> pengajuanpetani -> surattanah) }}" alt="" class="img-fluid" style="width:100%;max-width:300px">

                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>
                </div>
                <div class="col-4">
                  <label for="inputEmail4">Status</label>
                  @if($inv -> pengajuanpetani->check == 0)
                  <div class="card bg-danger">
                    <div class="card-body text-white">
                      Belum Dicek Oleh Surveyor
                    </div>
                  </div>
                  @elseif($inv -> pengajuanpetani->check == 1)
                  <div class="card bg-warning">
                    <div class="card-body text-white">
                      Proyek Telah Dicek Oleh Surveyor. <a href="{{ route('proyeksayadetail', $inv -> pengajuanpetani->id) }}" class="card-link">Details</a>
                    </div>
                  </div>
                  @elseif($inv -> pengajuanpetani->check == 2)
                  <div class="card bg-success">
                    <div class="card-body text-white">
                      Proyek Telah Disetujui Oleh Surveyor.<br>
                      <a href="{{ route('proyeksayadetail', $inv -> pengajuanpetani->id) }}" class="card-link">Klik Detail</a>
                    </div>
                  </div>
                  @elseif($inv -> pengajuanpetani->check == 3)
                  <div class="card bg-success">
                    <div class="card-body text-white">
                      Proyek Telah Dibayar Oleh Investor.<br>
                      <a href="{{ route('detailtf', $inv -> id) }}" class="card-link">Klik Detail</a>
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
@endsection
