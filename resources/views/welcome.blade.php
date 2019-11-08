@extends('base.materialize')

@section('title', "GoPro")

@section('materialize')
<head>
  <link rel="stylesheet" href="{{ url('css/landingpage.css') }}">
</head>
<!-- Navbar -->
<div class="navbar-fixed">
  <nav class="transparent z-depth-0">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo right">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
</div>
<!-- End Navbar -->

<!-- Slider -->
<div class="slider">
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



<script>
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
</script>
@endsection
