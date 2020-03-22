@extends('layouts.default')
@section('title', $post->title)
@section('content')
<body>
  <div class="container">
    <h1>
      <a href="{{url('/'}}">BACK</a>
      {{ $post->title }}</h1>
    <p>{!! nl2br(e($post->body)) !!}</p>
  </div>
</body>
@endsection