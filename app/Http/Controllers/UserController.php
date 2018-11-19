<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Game;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $user = Auth::user();
        $games = Game::all();
        return view('profile', compact('user', 'games'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('edit_profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $user->avatar = $request->avatar;
        $user->bio    = $request->bio;
        $user->game1  = $request->game1;
        $user->game2  = $request->game2;
        $user->game3  = $request->game3;
        $user->game4  = $request->game4;
        $user->game5  = $request->game5;

        $user->save();

        return redirect('/profile');
    }

}
