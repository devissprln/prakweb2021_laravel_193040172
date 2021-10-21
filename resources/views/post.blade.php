@extends('layouts.main')

@section('container')
<article>
 <h2>{{ $post->title }}</h2>

 <h5>{{ $post->autor }}</h5>

 <p>By. Devis  Suparlan in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

{!! $post->body !!} 
</article> 

<a href="/posts"> Back to Posts</a>
@endsection