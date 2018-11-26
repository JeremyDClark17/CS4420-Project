@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{config('app.name', 'Game Ranker')}}</title>
<link href="{{ asset('css/application.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="content">
        <h1 style="font-size: 84px; text-align: center;">Game Ranker</h1>
        <hr class=" m-b-md">
        <div class="gallery">
              @if(count($games) >= 1)
                  @foreach($games as $game)
                    @if(($game->id) == 2) <!--whatever the null game is-->
                    @else
                      <div class="well">
                        <a href="aboutgame/{{ $game->id }}" title="aboutGame"> <!--INSERT game LINK here -->
                          <div class="thumbnail"><img src='{{$game->image}}' width="2000" class="cards-contain"/><!--INSERT game image here -->
                            <h4>{{ $game->title }}</h4>
                            <p class="tag">Popularity: {{$game->instances}}</p>
                          </div>
                        </a>
                      </div>
                    @endif
                  @endforeach
              @else
                  <p>No Games Found!</p>
              @endif
            </div>
        </div>
    </div>
</body>
</html>
@endsection
