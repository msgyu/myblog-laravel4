@extends('layouts.default')
@section('title', $post->title)
@section('content')
<h1>
  <a href="{{url('/'}}" class="header-menu">BACK</a>
  {{ $post->title }}
</h1>
<p>{!! nl2br(e($post->body)) !!}</p>

<h2>Comment</h2>
<ul>
  @foreach ($post->comments as $comment)
  <li>
    {{ $post->body }}
    <a href="{{'PostsController@edit', $post}} data-id="{{ $comment->id }}" class="del">[x]</a>
    <form method="post" action="{{ action('CommentsControler@destroy', [$post, $comment]) }}" id="form_{{ $comment->id }} ">
      {{ csrf_field() }}
      {{ method_field('delete')}}
  </li>
  
  @empty
  <li>No Comment yet</li>
  @endforeach
</ul>
<form  method='post' action="{{ action(CommentController@store, $post}}">
  {{ csrf_field() }}
  <p>
    <input type="body" name="body" placeholder="コメントを入力" value="{{ old('body') }}">
    @if ($errors->has('title'))
    <span class="error">{{ $errros->first('title')}}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Add">
  </p>
</form>
@endsection