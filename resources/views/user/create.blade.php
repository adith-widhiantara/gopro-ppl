@extends('base.materialize')

@section('title', 'Daftar')

@section('materialize')
<head>
  <link rel="stylesheet" href="{{ asset('css/createuser.css') }}">
</head>

<div class="container daftar">
  <div class="card">
    <div class="card-content black-text">
      <span class="card-title gopro"><a href="{{ url('/') }}">GOPRO</a></span>
      <div class="row">
        <div class="col s6">
          <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="{{ asset('img/bglanding.jpg') }}"></a>
            <a class="carousel-item" href="#two!"><img src="{{ asset('img/bglanding2.jpg') }}"></a>
            <a class="carousel-item" href="#three!"><img src="{{ asset('img/bglanding3.jpg') }}"></a>
            <a class="carousel-item" href="#four!"><img src="{{ asset('img/bglanding4.jpg') }}"></a>
          </div>
        </div>
        <div class="col s6">
          <div class="card daftarsekarang">
            <div class="card-content black-text">
              <span class="card-title">Daftar Sekarang</span>
              <p>Sudah punya akun? <a href="{{ url('/') }}">Masuk</a></p>
              <form method="POST" action="{{ route('register') }}">
                  @csrf

                <div class="input-field">
                  <select name="role">
                    <option value="" disabled selected></option>
                    <option value="petani">Petani</option>
                    <option value="sdm">SDM / Investor</option>
                  </select>
                  <label>Anda sebagai apa?</label>
                </div>

                <div class="input-field">
                  <input placeholder="e.g : mail@example.com" id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email">
                  <label for="email">Email</label>
                @error('email')
                  <label for="email">Email  {{ $message }}</label>
                @enderror
                </div>

                <div class="input-field">
                  <input placeholder="Password" id="password" type="password" class="validate" name="password">
                  <label for="password">Password</label>
                </div>

                <div class="input-field">
                  <input placeholder="Password Confirmation" id="password_confirmation" type="password" class="validate" name="password_confirmation">
                  <label for="password_confirmation">Password Confirmation</label>
                </div>

                <button class="btn waves-effect waves-light" type="submit">Daftar
                  <i class="fa fa-sign-in" aria-hidden="true"></i>
                </button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.carousel');
  var instances = M.Carousel.init(elems,{

  });
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
</script>

@endsection
