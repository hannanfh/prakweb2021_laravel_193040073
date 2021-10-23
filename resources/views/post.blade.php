@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>

   <p> By. Hannan Fakhrul Hakim in <a href="/categories/{{ $post->category->slug }}"> {{$post->category->name}}</p> </a>

    {!! $post->body !!}

    <a href="/posts">Back to Posts</a>
@endsection
