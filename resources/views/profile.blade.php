@extends('layouts.app')
@section('content')
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ Auth::user()->name }}</title>
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
              <h3 align="left" class="uname"><span>Email:</span>  {{ Auth::user()->email }}</h3>
              <h3 align="left" class="uname"><span>Desription:</span>  {{ Auth::user()->bio }}</h3>
              <a href="profile/edit"><button><h4 align="left" class="uname">Edit Profile</h4></button></a>
          </div>
        </section>
      </section>
    </section>
  </aside>
</div>
<br>
<hr>
<div class="gallery">
  <a href="profile/1"> <!--INSERT game LINK here -->
        @foreach ($games as $game)
          @if ($user->game1 == $game->id)
          <div class="thumbnail"><img src='{{$game->image}}' width="2000" class="cards-contain"/><!--INSERT game image here -->
          <h4>{{ $game->title }}</h4>
          <p class="tag">Popularity: {{$game->instances}}</p>
          @endif
        @endforeach
    </div>
  </a>
  <a href="profile/2"> <!--INSERT game LINK here -->
        @foreach ($games as $game)
          @if ($user->game2 == $game->id)
          <div class="thumbnail"><img src='{{$game->image}}' width="2000" class="cards-contain"/><!--INSERT game image here -->
          <h4>{{ $game->title }}</h4>
          <p class="tag">Popularity: {{$game->instances}}</p>
          @endif
        @endforeach
    </div>
  </a>
  <a href="profile/3"> <!--INSERT game LINK here -->
        @foreach ($games as $game)
          @if ($user->game3 == $game->id)
          <div class="thumbnail"><img src='{{$game->image}}' width="2000" class="cards-contain"/><!--INSERT game image here -->
          <h4>{{ $game->title }}</h4>
          <p class="tag">Popularity: {{$game->instances}}</p>
          @endif
        @endforeach
    </div>
  </a>
  <a href="profile/4"> <!--INSERT game LINK here -->
        @foreach ($games as $game)
          @if ($user->game4 == $game->id)
          <div class="thumbnail"><img src='{{$game->image}}' width="2000" class="cards-contain"/><!--INSERT game image here -->
          <h4>{{ $game->title }}</h4>
          <p class="tag">Popularity: {{$game->instances}}</p>
          @endif
        @endforeach
    </div>
  </a>
  <a href="profile/5"> <!--INSERT game LINK here -->
        @foreach ($games as $game)
          @if ($user->game5 == $game->id)
          <div class="thumbnail"><img src='{{$game->image}}' width="2000" class="cards-contain"/><!--INSERT game image here -->
          <h4>{{ $game->title }}</h4>
          <p class="tag">Popularity: {{$game->instances}}</p>
          @endif
        @endforeach
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
