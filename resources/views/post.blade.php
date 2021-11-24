@extends('layouts.main')

@section('container')

<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h2 class="mb-3">{{ $post->title }}</h2>
      <h5>{{ $post->autor }}</h5>

      <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>

    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

     <article class="my-3 fs-5">
      {!! $post->body !!} 
      </article>

    <a href="/posts" class="d-block mt-3"> Back to Posts</a>
    
    </div>
  </div>
</div>

@endsection