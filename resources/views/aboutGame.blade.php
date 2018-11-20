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
        <a href="#openModal"><img href="#" src="img/addGame.png" class="cards"/></a> <!-- put game's image in for src -->

        <a href="#close">
          <div id="openModal" class="modalDialog">
            <div>
              <div>
                <img href="#" src="img/addGame.png" class="modalWidth"/> <!-- put game's image in for src -->
                <a class="left carousel-control" href="" data-slide="prev"><span class="icon-prev"></span></a>  <!--href is for link to previous game -->
                <a class="right carousel-control" href="" data-slide="next"><span class="icon-next"></span></a> <!--href is for link to next game -->
              </div>
              <h2 class="enlarge">Title of game here</h2>
            </div>
          </div>
        </a>

        <a class="left carousel-control" href="" data-slide="prev"><span class="icon-prev"></span></a>   <!--href is for link to previous game -->
        <a class="right carousel-control" href="" data-slide="next"><span class="icon-next"></span></a>  <!--href is for link to next game -->
      </div>
      <aside id="authorInfo">
        <!-- The author information is contained here -->
        <h2 style="color: #505050; font-size: 32px;">Title of game here</h2>
        <h4 style="color: #505050; font-size: 25px;">Popularity here</h4>
        <p style="color: #505050; font-size: 22px; margin-top: 20px;">Description here</p>
      </aside>
    </section>
  </div>
</div>
</body>
</html>
@endsection
