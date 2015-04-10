@extends('admin._layouts.admin')

@section('content')

  <h1>Edit post</h1>

  {{ Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'PUT']) }}

    @include('admin.posts._partials.form')

  {{ Form::close() }}

@stop
