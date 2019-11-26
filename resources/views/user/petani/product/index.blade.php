@extends('user.petani.product.base')

@section('title', 'Product | GOPRO')

@section('product')
@if(Auth::user()->role == "petani")
<div style="margin-top: 50px;" class="container">
  <a class="btn btn-primary" href="{{ url('home/product/create') }}" role="button">Buat Proyek</a>
</div>
@endif
@endsection
