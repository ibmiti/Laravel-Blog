@extends ('layouts.primary')
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

</style>
<div class="container container-fluid">
    <x-header-image/>

    <div class="row">
        <h1 class="col-lg text-center">Keeping up with the Bassinet</h1>
    </div>
    
    <div class="row">
        <div class="col-lg text-center" style="padding-bottom: 40px;">
            <h2>The Latest Articles From The Bassinet</h2>
        </div>
    </div>
<style>
img {
    border-radius : 7%;
    -moz-border-radius: 7%;
    -webkit-border-radius:7%;
  }
</style>

<div class="row">
<div class="col-lg-2"></div>
    <div class="col-lg-3 mt-2">
        <h2>Regular Articles</h2>
        @foreach ($articles as $article)
        <div class="row">
            <div class="col-lg">
                <h2 style="padding-bottom: 15px;" id="title"><a href="/articles/{{ $article->id }}">{{ $article->title ?? ''}}</a></h2>
                    <img src="{{ $article->image }}"
                        alt=""
                        id ="imgPost"
                        class=""
                        />                    
                <p style="font-size: 20px;">{!! $article->excerpt !!}</p>
            </div>
        </div>
        @endforeach

        <!-- <div class="row">
            <div class="col-lg">
                <button class="btn btn-dark mt-2 mb-3"><a href="/articles/show_all_article">More Articles</button>        
            </div>
        </div> -->
    </div>
    
    <div class="col-lg-2"></div>
    <div class="col-lg-3 mt-2">
        <h2>List articles</h2>
        @foreach ($list_articles as $list_article)
        <div class="row">
                <div class="col-lg">
                    <h2 style="padding-bottom: 15px;" id="title"><a href="/articles/list_article/{{ $list_article->id }}">{{ $list_article->title ?? ''}}</a></h2>
                        <img src="{{ $list_article->image_name}}"
                            alt=""
                            id ="imgPost"
                            class=""
                            />                
                    <p style="font-size: 20px;">{!! $list_article->excerpt !!}</p>
                </div>
            </div>
        @endforeach

        <!-- <div class="row">
            <div class="col-lg">
                <button class="btn btn-dark mt-3">More List Articles</button>        
            </div>
        </div>
    </div>  -->


   
</div>
   

   

@endsection



   
       
    