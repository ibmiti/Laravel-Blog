@extends ('layouts.primary)


@section('content')
<h1>Blog</h1>

<p>{{ $post->body }}</p>
@endsection
