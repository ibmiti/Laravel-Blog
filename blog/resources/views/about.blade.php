@extends ('layouts.primary')
@section ('title', 'get to know us')
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

    .col-sm {
      font-family: Verdana;
      font-size: 16px;
      color: #555555;
      line-height: 1.5;
      letter-spacing: .45px;
      margin: 20px 20px 20px 20px;
      padding: 20px 100px 20px 100px;
    }

    ul {
      list-style-type: none;
    }
</style>

<x-header-image/>

<div class="container">
    <div class="row">
        <h1 class="col-lg text-center">Get to know the Bassinet</h1>
    </div>
</div>

<div class="container container-fluid">
  <div class="row">
    <div class="col-md">
    <!-- TODO  will add a way to change the information here via admin  -->
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus libero qui et ullam accusantium inventore nisi facilis quia, exercitationem minus sed dolor aliquid ex, maiores aperiam amet repudiandae possimus odit!
      </p>
    </div>
  </div>
</div>   
<h2 class="text-center">What We're Writing About</h2>
<hr style="border: 2px solid red;">
<div class="row">
  <div class="col-sm-12">
      <ul>
            <li><a href="/babyArticle/{{ $articles[0][0]->id ?? '' }}">{{ $articles[0][0]->title ?? '' }}</a></li>
            <p class="paragraph">{{ $articles[0][0]->excerpt ?? '' }}</p>
            <hr>
            <li><a href="/babyArticle/{{ $articles[0][1]->id ?? '' }}">{{ $articles[0][1]->title ?? '' }}</a></li>
            <p class="paragraph">{{ $articles[0][1]->excerpt ?? '' }}</p>
            <hr>
            <li><a href="/kidArticle/{{ $articles[1][0]->id ?? '' }}">{{ $articles[1][0]->title ?? '' }}</a></li>
            <p class="paragraph">{{ $articles[1][0]->excerpt ?? '' }}</p>
            <hr>
            <li><a href="/kidArticle/{{ $articles[1][1]->id ?? '' }}">{{ $articles[1][1]->title ?? '' }}</a></li>
            <p class="paragraph">{{ $articles[1][1]->excerpt ?? '' }}</p>
            <hr>
            <li><a href="/guideArticle/{{ $articles[2][0]->id ?? '' }}">{{ $articles[2][0]->title ?? '' }}</a></li>
            <p class="paragraph">{{ $articles[2][0]->excerpt ?? '' }}</p>
            <hr>
            <li><a href="/guideArticle/{{ $articles[2][1]->id ?? '' }}">{{ $articles[2][1]->title ?? '' }}</a></li>
            <p class="paragraph">{{ $articles[2][1]->excerpt ?? '' }}</p>
            <hr>
            <li><a href="/healthArticle/{{ $articles[3][0]->id ?? '' }}">{{ $articles[3][0]->title ?? '' }}</a></li>
            <p class="paragraph">{{ $articles[3][0]->excerpt ?? '' }}</p>
            <hr>
            <li><a href="/healthArticle/{{ $articles[3][1]->id ?? '' }}">{{ $articles[3][1]->title ?? '' }}</a></li>
            <p class="paragraph">{{ $articles[3][1]->excerpt ?? '' }}</p>
            <hr>
      </ul>
    </div>
</div>   
    

@endsection