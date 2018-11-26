@extends('layouts.app')
@section('content')
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BlogPost template by Adobe Dreamweaver CC</title>
<link href="{{ asset('css/clip.css') }}" rel="stylesheet">
<script type='text/javascript' src='/js/clip.js'></script>
</head>


<!--  -->


<body>
<div id="mainwrapper">
  <div id="content">
    <section id="mainContent">
      <div id="carousel-299058" class="carousel slide">
        <a href="#openModal"><img href="#" src="{{$image}}" class="cards"/></a> <!-- put game's image in for src -->

        <a href="#close">
          <div id="openModal" class="modalDialog">
            <div>
              <div>
                <img href="#" src="{{$image}}" class="modalWidth"/> <!-- put game's image in for src -->
                <a class="left carousel-control" href="{{ $idPrev }}#openModal" data-slide="prev"><span class="icon-prev"></span></a>  <!--href is for link to previous game -->
                <a class="right carousel-control" href="{{ $idNext }}#openModal" data-slide="next"><span class="icon-next"></span></a> <!--href is for link to next game -->
              </div>
              <h2 class="enlarge">{{$title}}</h2>
            </div>
          </div>
        </a>

        <a class="left carousel-control" href="{{ $idPrev }}" data-slide="prev"><span class="icon-prev"></span></a>   <!--href is for link to previous game -->
        <a class="right carousel-control" href="{{ $idNext }}" data-slide="next"><span class="icon-next"></span></a>  <!--href is for link to next game -->
      </div>
      <aside id="authorInfo">
        <!-- The author information is contained here -->
        <h2 style="color: #505050; font-size: 32px;">{{$title}}</h2>
        <h4 style="color: #505050; font-size: 25px;">Popularity: {{$instances}}</h4>
        <p style="color: #505050; font-size: 22px; margin-top: 20px;">{{$desc}}</p>
      </aside>
    </section>
  </div>
</div>
</body>
</html>
@endsection
