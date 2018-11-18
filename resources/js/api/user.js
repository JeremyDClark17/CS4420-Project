putUpdateUser: function( public_visibility, 'avatar', 'game1', 'game2', 'game3', 'game4', 'game5', 'bio',){
  return axios.put( ROAST_CONFIG.API_URL + '/user',
    {
      public_visibility: public_visibility,
      avatar: favorite_coffee,
      game1: game1,
      game2: game2,
      game3 : game3,
      game4 : game4,
      game5 : game5,
      bio : bio;
    }
  );
}

/*
  Edits a user
*/
editUser( { commit, state, dispatch }, data ){
  commit( 'setUserUpdateStatus', 1 );

  UserAPI.putUpdateUser( data.public_visibility, data.avatar, data.game1, data.game2, data.game3, data.game4, data.game5, data.bio )
    .then( function( response ){
      commit( 'setUserUpdateStatus', 2 );
      dispatch( 'loadUser' );
    })
    .catch( function(){
      commit( 'setUserUpdateStatus', 3 );
    });
},

/*
  Sets the user update status
*/
setUserUpdateStatus( state, status ){
  state.userUpdateStatus = status;
}

/*
  Gets the user update status
*/
getUserUpdateStatus( state, status ){
  return state.userUpdateStatus;
}
