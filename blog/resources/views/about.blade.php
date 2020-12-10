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
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus libero qui et ullam accusantium inventore nisi facilis quia, exercitationem minus sed dolor aliquid ex, maiores aperiam amet repudiandae possimus odit!
      </p>
    </div>
  </div>
</div>   

<div class="container container-fluid">
    <div class="row">
        <h1 class="col-lg text-center">The Latest Articles From The Bassinet</h1>
    </div>
  
    <div class="row">
      <div class="col-sm">
          <ul>
              @foreach($articles as $article)
                <li>{{ $article->title }}</li>
                <p class="paragraph">{{ $article->excerpt }}</p>
                <hr>
              @endforeach
          </ul>
        </div>
    </div>
</div>      
    

@endsection