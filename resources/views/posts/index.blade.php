@extends('layouts.default')

@section('title', 'Blog Posts')
@section('content')
<h1>
  <a href="{{url('/posts/create'}}" class="header-menu">new-post</a>
  Blog Posts
</h1>
<ul>
  {{--
  @foreach ($posts as $post)
  <li><a href="{{'PostsController@show', $post}}">{{ $post->title }}</a></li>
  <li><a href="{{'PostsController@edit', $post}}" class="edit">[Edit]</a></li>
  <li>
    <a href="{{'PostsController@edit', $post}}" data-id="{{ $comment->id }} class="del">[x]</a>
    <form method="post" action="{{ url('/posts',$post)}}" id="form_{{ $post->id }}">
      {{ csrf_field() }}
      {{ method_field('delete')}}
    </form>
  </li>
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
