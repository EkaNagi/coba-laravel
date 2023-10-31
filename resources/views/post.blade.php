
@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>By. Tresna Eka Widiana in <a href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a></p>
   {!! $post->body !!}
</article>
<a href="/posts">Back To Post</a>
@endsection