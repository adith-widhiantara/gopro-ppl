@extends('user.surveyor.base')

@section('title', 'Detail Petani | GOPRO')

@section('titlepageheader', 'Detail Petani')

@section('surveyor')
<div class="container">
  <div class="row">
    <div class="col-3">
      <div class="card">
        <img class="card-img-top img-fluid p-2" src="{{ asset('imgupl/photoprofile/'.$user->photo) }}" alt="Card image cap">
      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">{{ $user->nama }}</h3>
          <p class="card-text">Faucibus orci luctus et ultrices lorem posuere cubilia Cuquis ipsum in augue posuere congue.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
