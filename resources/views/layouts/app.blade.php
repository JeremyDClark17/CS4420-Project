<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/application.css') }}" rel="stylesheet">

<html>
</div>
  <head>

    <script type='text/javascript' src='/javascripts/application.js'></script>

    <div class="navbar-padding">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myInverseNavbar2" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="/home" ><a class="navbar-brand CyperLogo2" href="/home" >Game Ranker</a></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="myInverseNavbar2">
          <ul class="nav navbar-nav navbar-right">
            <li>
              @guest
                <li class="nav-item">
                    <a class="topdown navbar-brand right-pad" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="topdown navbar-brand right-pad" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
              @else
                  <a href="profile"><img src= "{{ Auth::user()->avatar }}" class= 'avatarThumbnail hidden-sm hidden-xs' href="profile"></a>
                <li>
                  <a class="topdown navbar-brand right-pad" href="profile">&nbsp{{ Auth::user()->name }}</a>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Account<span class="caret"></span></a>
                  <ul class="dropdown-menu ">
                    <li ><a class="text-left" href="/home">Settings[HOME {Coming Soon}]</a></li><!--<li><%= link_to 'Settings', edit_user_registration_path %></li>-->
                    <li role="separator" class="divider"></li>
                    <li><a class="text-left" href="logout">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </ul>
                </li>
              @endguest
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="py-4" style="padding-top: 75px;">
        @yield('content')
    </main>
    </div>
  </head>
</html>
