
@extends('layouts.main')

@section('container')


@foreach ($posts as $post)
<article>
<h2>
 <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
</h2>
<p>{{ $post->body }}</p>
</article>
@endforeach

@endsection

