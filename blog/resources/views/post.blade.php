@extends ('layout')


@section('content')
<h1>Blog</h1>

<p>{{ $post->body }}</p>
@endsection
@section('footer')
<x-footer />
@endsection
