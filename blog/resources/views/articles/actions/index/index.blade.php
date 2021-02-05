@extends ('layouts.primary')
<!-- make title unqique to article -->
<!--  TODO: this view needs to be styled for all view sizes -->
@section('title', 'Blog')
@section ('content')

<!-- | Styles for this file -->
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

    #imgPost {
        /* padding-right: 20px; */
        width: 75%;
    }
    a:hover {
  color: grey;
}

a:link {
  text-decoration: none;
}


a:visited {
  text-decoration: none;
}

img {
    border-radius : 7%;
    -moz-border-radius: 7%;
    -webkit-border-radius:7%;
  }

  p {
      color: grey;
  }
</style>
<!-- | end of style for this file -->

<div class="container">
    <x-header-image/>

    <div class="row">
        <h1 class="col-lg text-center">Keeping up with the Bassinet</h1>
    </div>
    
    <div class="row">
        <div class="col-lg text-center" style="padding-bottom: 40px;">
            <h2>The Latest Articles From The Bassinet</h2>
        </div>
    </div>

<div class="row">
    <div class="text-center col-sm-12">
        <button type="button" class="btn btn-outline-primary">Popular</button>
        <button type="button" class="btn btn-outline-secondary">Recent</button>
        <button type="button" class="btn btn-outline-success">Guides</button>
        <button type="button" class="btn btn-outline-danger">Baby</button>
        <button type="button" class="btn btn-outline-warning">Kids</button>
        <button type="button" class="btn btn-outline-info">Health</button>
    </div>
</div>

<div class="mt-3 row">
    <div class="col-lg-12 mt-2 card container-fluid;">
        <div class="container"> 
    <!-- | This data to be swapped out based on button push -->
            <h2 class="mt-3">BABY</h2>
            <p>Find the latest articles written by BabyBassinet</p>
            <hr style="border: 2px solid red;">
            @foreach($babyArticles as $babyArticle)
                <div class="row">
                    <div class="col-lg">
                        <h2 style="padding-bottom: 15px;" id="title"><a href="/babyArticle/{{ $babyArticle->id ?? '' }}">{{ $babyArticle->title ?? ''}}</a></h2>                
                    </div>
                </div>
                <hr>
        @endforeach
        </div>
    </div>
  </div>
</div>
   

   

@endsection



   
       
    