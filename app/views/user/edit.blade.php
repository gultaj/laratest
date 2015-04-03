@extends('layouts.default')

@section('content')

  {{ Form::model($user,['route' => ['user.update', $user->id], 'method' => 'PUT']) }}

    <li>
      {{ Form::label('email', 'Your email') }}
      {{ Form::email('email') }}
      {{ $errors->first('email') }}
    </li>
    <li>
      {{ Form::label('password', 'Your password') }}
      {{ Form::password('password') }}
      {{ $errors->first('password') }}
    </li>
    <li>
      {{ Form::label('permission', 'Your permission') }}
      {{ Form::select('permission', ['1' => 'Webmaster', '2' => 'Editor', '3' => 'Member']) }}
    </li>
    {{ Form::submit('Save') }}

  {{ Form::close() }}

@stop
