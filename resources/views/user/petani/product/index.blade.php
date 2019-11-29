@extends('user.petani.product.base')

@section('title', 'Product | GOPRO')

@section('product')
<head>
  <!-- <link rel="stylesheet" href="{{ asset('css/petani/index.css') }}"> -->
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

@if (session('status'))
<div style="margin-top: 10px;" class="container">
  <div class="alert alert-primary" role="alert">
    {{ session('status') }}
  </div>
</div>
@endif

@if(Auth::user()->role == "petani")
<div style="margin-top: 50px;" class="container">
  <a class="btn btn-primary" href="{{ url('home/product/create') }}">Buat Proyek</a>
  <a class="btn btn-primary" href="{{ route('proyeksaya') }}">Lihat Proyek Saya</a>
</div>
@endif


@endsection
