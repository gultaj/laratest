@extends('admin._layouts.admin')

@section('content')

  <h1>Posts</h1>
  {{ link_to_route('admin.posts.create', 'Create new post') }}

  @if(count($posts))
    <ul>
    @foreach ($posts as $post)
      <li>
        {{ link_to_route('admin.posts.edit', $post->title, [$post->id]) }}
        {{ Form::open(['route' => ['admin.posts.destroy', $post->id], 'method' => 'DELETE', 'class' => 'destroy']) }}
          {{ Form::submit('Delete') }}
        {{ Form::close() }}
      </li>

    @endforeach
    </ul>
  @endif

@stop
