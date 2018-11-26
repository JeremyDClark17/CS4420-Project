<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Game;

class profileGameController extends Controller
{

    public function index($id)
    {

      $user = Auth::user();
      $games = Game::all();


      if($id == 1){
        $current = $user->game1;
      }
      elseif($id == 2){
        $current = $user->game2;
      }
      elseif($id == 3){
        $current = $user->game3;
      }
      elseif($id == 4){
        $current = $user->game4;
      }
      elseif($id == 5){
        $current = $user->game5;
      }

      foreach($games as $game){

        if(($game->id) == $current){

          $game->instances += 1;
          $game->save();

          $title = $game->title;
          $image =$game->image;
          $desc = $game->description;
          $comments = $game->comments;
          $instances = $game->instances;

          if($id == 1){
            $idPrev = 5;
            $idNext = 2;
          }
          elseif($id == 5){
            $idPrev = 4;
            $idNext = 1;
          }
          else{
            $idPrev = $id - 1;
            $idNext = $id + 1;
          }
        }
      }
      return view('aboutGame', compact(['title', 'image', 'desc', 'comments', 'instances', 'idPrev', 'idNext']));
    }
}
