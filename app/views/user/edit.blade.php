@extends('layouts.default')

@section('content')

  {{ Form::model($user,['route' => ['user.update', $user->id]]) }}

    <li>
      {{ Form::label('email', 'Your email') }}
      {{ Form::email('email') }}
    </li>
    <li>
      {{ Form::label('password', 'Your password') }}
      {{ Form::password('password') }}
    </li>
    <li>
      {{ Form::label('permission', 'Your permission') }}
      {{ Form::select('permission', ['1' => 'Webmaster', '2' => 'Editor', '3' => 'Member']) }}
    </li>

  {{ Form::close() }}

@stop
