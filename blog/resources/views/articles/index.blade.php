@extends ('layout')
<!-- make title unqique to article -->
<!--  TODO: this view needs to be styled for all view sizes -->
@section('title', 'Blog')
@section ('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap');
    .col-lg  {
        /* font-family: 'Raleway', 'Roboto'; */
        font-family: 'Big Shoulders Stencil Display', cursive;
        font-size: 40px;
    }

    .col-md {
      font-family: Verdana;
      font-size: 16px;
      color: #555555;
      line-height: 1.5;
      letter-spacing: .45px;
      margin: 20px 20px 20px 20px;
      padding: 20px 100px 20px 100px;
    }

    #title {
      line-height: 1.5;
      letter-spacing: .45px;
      font-family: 'Big Shoulders Stencil Display', cursive;
    }

    a {
        text-decoration: none;
    }

</style>
<x-header-image/>

<div class="container container-fluid">
    <div class="row">
        <h1 class="col-lg text-center">Keeping up with the Bassinet</h1>
    </div>

    <div class="row">
        <h2 class="col-lg text-center">The Latest Articles From The Bassinet</h2>
    </div>
    
    @foreach ($articles as $article)
    <div class="row container container-fluid">
      <div class="col-md col-sm">
            <h2 id="title">
                <a href="/articles/{{ $article->id }}">
                    {{ $article->title }} 
                </a>
            </h2>
            <div class="container container-fluid">
                <img src="images/pic01.jpg"
                     alt=""
                     class="image image-full"
                />
            </div>

            <p>{!! $article->excerpt !!}</p>
      </div>
    </div>
    @endforeach
@endsection
</div>

