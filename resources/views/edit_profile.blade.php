@extends('layouts.app')
@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['UserController@update'], 'method' => 'PATCH', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('avatar', 'Avatar')}}
            {{Form::file('avatar')}}
        </div>
        <div class="form-group">
            {{Form::label('bio', 'Bio')}}
            {{Form::text('bio', $user->bio, ['class' => 'form-control', 'placeholder' => 'Tell us about yourself'])}}
        </div>
        <div class="form-group">
            {{Form::label('game1', 'Game 1')}}
            {{Form::text('game1', $user->game1, ['class' => 'form-control', 'placeholder' => 'Game 1'])}}
        </div>
        <div class="form-group">
            {{Form::label('game2', 'Game 2')}}
            {{Form::text('game2', $user->game2, ['class' => 'form-control', 'placeholder' => 'Game 2'])}}
        </div>
        <div class="form-group">
            {{Form::label('game3', 'Game 3')}}
            {{Form::text('game3', $user->game3, ['class' => 'form-control', 'placeholder' => 'Game 3'])}}
        </div>
        <div class="form-group">
            {{Form::label('game4', 'Game 4')}}
            {{Form::text('game4', $user->game4, ['class' => 'form-control', 'placeholder' => 'Game 4'])}}
        </div>
        <div class="form-group">
            {{Form::label('game5', 'Game 5')}}
            {{Form::text('game5', $user->game5, ['class' => 'form-control', 'placeholder' => 'Game 5'])}}
        </div>
        {{Form::hidden('_method','PATCH')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection