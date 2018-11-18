@extends('layouts.app')
@section('content')
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Light Theme</title>
<link href="{{ url('css/show.css') }}" rel="stylesheet" type="text/css" />
<!--<script type='text/javascript' src='/js/profile.js'></script>-->
</head>
<body>
  <div class="container">
  <div class="column padB20"><img src="{{ Auth::user()->avatar }}" alt="" class="profile"></div>
    <section class="profileHeader">
      <h1 class="uname" style="font-size: 32px; padding-bottom: 32px; padding-top: 32px;">{{ Auth::user()->name }}</h1>
      <section class="mainContent">
        <section class="section1">
          <div class="section1Content">
              <h3 align="left" class="uname"><span>Email:</span>  {{ Auth::user()->email }}</p>
              <h3 align="left" class="uname"><span>Desription:</span>  {{ Auth::user()->bio }}</p>
          </div>
        </section>
      </section>
    </section>
  </aside>
</div>
<hr>
<div class="gallery">
  <a href=""> <!--INSERT game LINK here -->
    <div class="thumbnail"><img src='/img/addGame.jpg' width="2000" class="cards-contain"/><!--INSERT game image here -->
      <h4>((Title of game))</h4>
      <p class="tag">Rating: ((Game's instance))</p>
      <li class="dropdown"> <a href="#" class="dropdown-toggle uname" style="font-size: 58px;" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><span class="caret"></span></a>
        <ul class="dropdown-menu ">
          <li ><a class="text-left" href="">Edit Game 2</a></li>
        </ul>
      </li>
    </div>
  </a>
  <a href=""> <!--INSERT game LINK here -->
    <div class="thumbnail"><img src='/img/addGame.jpg' width="2000" class="cards-contain"/><!--INSERT game image here -->
      <h4>((Title of game))</h4>
      <p class="tag">Rating: ((Game's instance))</p>
      <li class="dropdown"> <a href="#" class="dropdown-toggle uname" style="font-size: 58px;" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><span class="caret"></span></a>
        <ul class="dropdown-menu ">
          <li ><a class="text-left" href="">Edit Game 2</a></li>
        </ul>
      </li>
    </div>
  </a>
  <a href=""> <!--INSERT game LINK here -->
    <div class="thumbnail"><img src='/img/addGame.jpg' width="2000" class="cards-contain"/><!--INSERT game image here -->
      <h4>((Title of game))</h4>
      <p class="tag">Rating: ((Game's instance))</p>
      <li class="dropdown"> <a href="#" class="dropdown-toggle uname" style="font-size: 58px;" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><span class="caret"></span></a>
        <ul class="dropdown-menu ">
          <li ><a class="text-left" href="">Edit Game 3</a></li>
        </ul>
      </li>
    </div>
  </a>
  <a href=""> <!--INSERT game LINK here -->
    <div class="thumbnail"><img src='/img/addGame.jpg' width="2000" class="cards-contain"/><!--INSERT game image here -->
      <h4>((Title of game))</h4>
      <p class="tag">Rating: ((Game's instance))</p>
      <li class="dropdown"> <a href="#" class="dropdown-toggle uname" style="font-size: 58px;" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><span class="caret"></span></a>
        <ul class="dropdown-menu ">
          <li ><a class="text-left" href="">Edit Game 4</a></li>
        </ul>
      </li>
    </div>
  </a>
  <a href=""> <!--INSERT game LINK here -->
    <div class="thumbnail"><img src='/img/addGame.jpg' width="2000" class="cards-contain"/><!--INSERT game image here -->
      <h4>((Title of game))</h4>
      <p class="tag">Rating: ((Game's instance))</p>
      <li class="dropdown"> <a href="#" class="dropdown-toggle uname" style="font-size: 58px; text-align: left;" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><span class="caret"></span></a>
        <ul class="dropdown-menu ">
          <li ><a class="text-left" href="">Edit Game 5</a></li>
        </ul>
      </li>
    </div>
  </a>
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <p class="CDcopy"><strong>Game Ranker © 2018 - All rights reserved.</strong></p>
    </div>
  </div>
</div>
<!-- Main Container Ends -->
</body>
</html>
@endsection
