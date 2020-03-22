@extends('layouts.default')

@section('title', 'Blog Posts')
@section('content')
<h1>Blog Posts</h1>
  <ul>
    {{--
    @foreach ($posts as $post)
    <li><a href="{{'PostsController@show', $post->id}}">{{ $post->title }}</a></li>
    @endforeach
    --}}
    @forelse ($posts as $post)
    <!-- <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li> -->
    <!-- <li><a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a></li> -->
    <!-- <li><a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></li> -->
    <li><a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a></li>
    @empty
    <li>No posts yet</li>
    @endforelse
  </ul>
@endsection
