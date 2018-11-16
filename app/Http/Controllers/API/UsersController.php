<?php

/*
|-------------------------------------------------------------------------------
| Updates a User's Profile
|-------------------------------------------------------------------------------
| URL:            /api/v1/user
| Method:         PUT
| Description:    Updates the authenticated user's profile
*/
public function putUpdateUser( EditUserRequest $request ){
  $user = Auth::user();

  $avatar               = $request->get('avatar');
  $game1                = $request->get('game1');
  $game2                = $request->get('game2');
  $game3                = $request->get('game3');
  $game4                = $request->get('game4');
  $game5                = $request->get('game5');
  $bio                = $request->get('bio');

  /*
    Ensure the user has entered a favorite coffee
  */
  if( $avatar != '' ){
    $user->avatar = $avatar;
  }

  if( $game1 != '' ){
    $user->game1 = $game1;
  }

  if( $game2 != '' ){
    $user->game2 = $game2;
  }

  if( $game3 != '' ){
    $user->game3 = $game3;
  }

  if( $game4 != '' ){
    $user->game4 = $game4;
  }

  if( $game5 != '' ){
    $user->game5 = $game5;
  }

  if( $bio != '' ){
    $user->bio = $bio;
  }

  $user->save();

  /*
    Return a response that the user was updated successfully.
  */
  return response()->json( ['user_updated' => true], 201 );
}
