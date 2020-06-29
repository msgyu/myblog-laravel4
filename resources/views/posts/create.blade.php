@extends('layouts.default')
@section('title', 'New Post')
@section('content')
<h1>
    <a href="{{url('/'}}" class="header-menu">BACK</a>
    {{ $post->title }}
</h1>
<form  method='post' action="{{ url('/posts')}}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="title" placeholder="タイトルを入力" value="{{ old('title') }}">
    @if ($errors->has('title'))
    <span class="error">{{ $errros->first('title')}}</span>
    @endif
  </p>
  <p>
    <textarea name="body" placeholder="bodyを入力" cols="30" rows="10" value="{{ old('body')></textarea>
    @if ($errors->has('body'))
    <span class="error">{{ $errros->first('body')}}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Add">
  </p>
</form>
@endsection