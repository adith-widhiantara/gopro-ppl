@extends('base.materialize')

@section('title', "GoPro")

@section('materialize')
<head>
  <link rel="stylesheet" href="{{ url('css/landingpage.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
</head>
<!-- Navbar -->
<div class="navbar-fixed">
  <nav class="navnav">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">GOPRO</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        @guest
          <li><a onclick="M.toast({html: 'Anda harus masuk terlebih dahulu!'})">Proyek Pendanaan</a></li>
          <li><a onclick="M.toast({html: 'Anda harus masuk terlebih dahulu!'})">Jadi Mitra</a></li>
          <li><a onclick="M.toast({html: 'Anda harus masuk terlebih dahulu!'})">Tentang Kami</a></li>
          <li><a class="modal-trigger" href="#masuk">Masuk</a></li>
        @else
          @if(Auth::user()->role == "sdm")
            <li><a href="#">Cari Kerja</a></li>
          @else
            <li><a href="{{ url('home/product') }}">Proyek Pendanaan</a></li>
            <li><a href="#">Jadi Mitra</a></li>
          @endif
          <li><a href="#">Tentang Kami</a></li>
          <li><a class='dropdown-trigger' href='#' data-target='dropdown1'>
            @if ( Auth::user()->nama == "" )
              {{ Auth::user()->role }}
            @else
              {{ Auth::user()->nama }}
            @endif
          </a></li>
        @endguest
      </ul>
    </div>
  </nav>
</div>

<div id="masuk" class="modal">
  <div class="modal-content">
    <div class="card">
        <div class="card-content black-text">
          <span class="card-title">Masuk</span>
          <p>Belum punya akun? <a href="{{ url('daftar') }}">Daftar</a></p>
          <form method="POST" action="postlogin">
              @csrf
          <div class="input-field">
            <input placeholder="e.g: mail@example.com" id="username" type="text" class="validate" name="email">
            <label for="username">Email</label>
          </div>
          <div class="input-field">
            <input placeholder="Password" id="password" type="password" class="validate" name="password">
            <label for="password">Password</label>
          </div>
        </div>
      </div>
  </div>
  <div class="modal-footer">
    <button class="btn waves-effect waves-light" type="submit">Masuk
      <i class="material-icons right">send</i>
    </button>
  </div>
  </form>
</div>

<ul id='dropdown1' class='dropdown-content'>
  @guest
  @else
    @if(Auth::user()->nama == "")
      <li><a href="{{ url('home/bio') }}">Lengkapi Biodata</a></li>
    @else
      <li><a href="{{ url('home/read') }}">Lihat Biodata</a></li>
    @endif

  @endguest
  <li><a href="{{url('logout')}}">Keluar</a></li>
</ul>
<!-- End Navbar -->

<!-- Slider -->
<div style="z-index: -1" class="slider">
    <ul class="slides">
      <li>
        <img src="{{ asset('img/bglanding.jpg') }}"> <!-- random image -->
        <div class="caption center-align">
          <h3>Bantu produktivitas perkebunan di Indonesia bersama GoPro</h3>
          <h5 class="light grey-text text-lighten-3">GoPro</h5>
        </div>
      </li>
      <li>
        <img src="{{ asset('img/bglanding2.jpg') }}"> <!-- random image -->
        <div class="caption right-align">
          <h3>Bantu produktivitas perkebunan<br>di Indonesia bersama GoPro</h3>
          <h5 class="light grey-text text-lighten-3">GoPro</h5>
        </div>
      </li>
      <li>
        <img src="{{ asset('img/bglanding3.jpg') }}"> <!-- random image -->
        <div class="caption left-align">
          <h3>Bantu produktivitas perkebunan di<br>Indonesia bersama GoPro</h3>
          <h5 class="light grey-text text-lighten-3">GoPro</h5>
        </div>
      </li>
      <li>
        <img src="{{ asset('img/bglanding4.jpg') }}"> <!-- random image -->
        <div class="caption center-align">
          <h3>Bantu produktivitas perkebunan di Indonesia bersama GoPro</h3>
          <h5 class="light grey-text text-lighten-3">GoPro</h5>
        </div>
      </li>
    </ul>
  </div>
<!-- End Slider -->

<!-- Rectangle -->
<div style="z-index: 5" class="container middle">
  <div class="counting-sec">
    <div class="inner-width">

      <div class="col coll">
        <div class="num">
          60
        </div>
        Petani Terdanai
      </div>

      <div class="hr"></div>

      <div class="col coll">
        <div class="num">
          120
        </div>
        Jumlah Investor
      </div>

      <div class="hr"></div>

      <div class="col coll">
        <div class="inlin">
          <div class="numm">
            Rp
          </div>
          <div class="num">
            180
          </div>
          <div class="numm">
            JT
          </div>
        </div>
        Dana Tersalurkan
      </div>

    </div>
  </div>
</div>
<!-- End Rectangle -->

<!-- Mulai Investasi -->
<div style="z-index: -1" class="row bantupetani">
    <div class="col s4 offset-s2">
      <p>Bantu Petani perkebunan di Indonesia<br>untuk lebih produktif dalam menghasilkan<br>panen yang berkualitas.</p>
      <a href="{{ url('home/product') }}" class="waves-effect waves-light btn green">Mulai Investasi</a>
    </div>
    <div class="col s4">
      <img src="{{ asset('img/mulaiinvestasi.jpg') }}" alt="">
    </div>
</div>
<!-- End Mulai Investasi -->

<!-- Kisah Sukses -->
<div class="kisahsukses">
  <div class="container">
    <div class="row">
      <div class="col s4 offset-s2">
        <img src="{{ asset('img/petani.jpg') }}" alt="">
      </div>
      <div class="col s6">
        <div class="card warnacard">
          <div class="card-content">
            <span class="card-title">Kisah Sukses</span>
            <div class="row">
              <div class="col s2">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              </div>
              <div class="col s5 review">
                <p class="a">Pak Baskara</p>
                <p>Petani Buah Naga</p>
                <br>
                <p class="c">Mendengar kata "Raja Buah Naga" mungkin yang terlintas dipikiran teman GoPro adalah petani buah naga yang sukses.<br></p>
                <a class="waves-effect waves-light btn green">Lanjutkan Membaca</a>
              </div>
            </div>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- End Kisah Sukses -->

<!-- Mengapa gopro -->
<footer class="container mengapagopro">
  <div class="row">
    <div class="col s6">
      <p class="a">Mengapa GOPRO?</p>
      <p class="b">Aman dan Transparan</p>
      <p class="b">Berinvestasi dapat dilakukan kapanpun dan dimanapun</p>
      <p class="b">Pantau proyek lahan secara berkala</p>
    </div>
    <div class="col s6">
      <img src="{{ asset('img/hp.PNG') }}" alt="">
    </div>
  </div>
</footer>
<!-- End Mengapa gopro -->

<!-- footer -->
<footer class="page-footer green lighten-1">
  <div class="footer-copyright green">
    <div class="container">
    © GOPRO 2019 Copyright
    </div>
  </div>
</footer>
<!-- end footer -->


<script>
$(document).ready(function() {
        $(window).scroll(function() {
          if($(this).scrollTop() > 50) {
              $('.navnav').addClass('solid');
          } else {
              $('.navnav').removeClass('solid');
          }
        });
});

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.slider');
  var instances = M.Slider.init(elems, {
    indicators: false,
    height: 600
  });
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems);
  });

$(".num").counterUp({
  delay:10,
  time:1000
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems,{
    hover: true,
    coverTrigger: false
  });
});
</script>
@endsection
