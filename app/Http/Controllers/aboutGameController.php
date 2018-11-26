<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Game;

class aboutGameController extends Controller
{

    public function index($id)
    {

      $games = Game::all();

      foreach($games as $game){
        if(($game->id) == $id){

          $game->instances += 1;
          $game->save();

          $title = $game->title;
          $image =$game->image;
          $desc = $game->description;
          $comments = $game->comments;
          $instances = $game->instances;

          if($id == 1){
            $idPrev = count($games);
            $idNext = 3;
          }
          elseif($id == 3){
            $idPrev = 1;
            $idNext = 4;
          }
          elseif($id == count($games)){
            $idPrev = count($games) - 1;
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
