<?php

class PostsController extends \BaseController
{

  public function getIndex() {
    $posts = Post::with('User')->get();

    return View::make('posts.index', compact('posts'));
  }

  public function getPost($id) {
    $post = Post::with('user')->find($id);

    return View::make('posts.show', compact('post'));
  }
}
