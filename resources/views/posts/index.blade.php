@extends('layout')
 
@section('content')
  @foreach ($posts as $post)
    <div class="card mb-2">
      <div class="card-body">
        <h4 class="card-title">{{ $post->title }}</h4>
        <p>{{ $post->body }}</p>
        <img src="{{ $post->path }}">
        <a href="/edit/{{ $post->id }}" class="card-link">修正</a>
        <a href="/delete/{{ $post->id }}" class="card-link">削除</a>
      </div>
    </div>
  @endforeach
@endsection