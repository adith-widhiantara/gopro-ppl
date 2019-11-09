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
        <li><a href="#">Proyek Pendanaan</a></li>
        <li><a href="#">Jadi Mitra</a></li>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Masuk</a></li>
      </ul>
    </div>
  </nav>
</div>
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
      <a class="waves-effect waves-light btn green">Mulai Investasi</a>
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
      <div class="col s4">
        <div class="card warnacard">
          <div class="card-content white-text">
            <span class="card-title">Kisah Sukses</span>
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- End Kisah Sukses -->



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
</script>
@endsection
