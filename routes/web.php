<?php

use App\Post;

Route::get('/posts', 'PostsController@index');

Route::get('/posts', function () {

  // $posts = DB::table('posts')->latest()->get();
  $posts = Post::all();

    return view('posts.index', compact('posts'));
});

Route::get('/posts/{post}', function($id){
  // $post = DB::table('posts')->find($id);
  $post = Post::find($id);
  return view('posts.show', compact('post'));
});

Route::get('/', function () {
  $posts = DB::table('posts')->latest()->get();

    return view('posts.index', compact('posts'));
});
