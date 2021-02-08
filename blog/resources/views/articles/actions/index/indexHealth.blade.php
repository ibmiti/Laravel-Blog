@extends ('layouts.primary')
<!-- make title unqique to article -->
<!--  TODO: this view needs to be styled for all view sizes -->
@section('title', 'Be Healthy')
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

img {
    border-radius : 7%;
    -moz-border-radius: 7%;
    -webkit-border-radius:7%;
  }

</style>
<div class="container container-fluid">
    <x-header-image/>

    <div class="row">
        <h1 class="col-lg text-center">Keeping up with the Bassinet</h1>
    </div>
    
    <div class="row">
        <div class="col-lg text-center" style="padding-bottom: 40px;">
            <h2>The Latest Health Articles From The Bassinet</h2>
        </div>
    </div>

<!-- IF Article deleted from admin display div -->
@if(session()->has('message'))
<div class="row">
    <div id="success-div"
        class="col-lg text-center alert alert-success"
        style="padding-bottom: 40px; padding-top: 40px; background-color: red; color: white;">
        <h2>{{ session()->get('message') }}</h2>
    </div>
</div>

<div id="post-success-div" class="row">
    <div class="col-lg text-center" style="padding-bottom: 40px; color: red;">
        <h4>Make More Changes?</h4>
            <button class="btn btn-lg btn-block"><a href="/admin">yes </a></button>
            <button id="reject" class="btn btn-lg btn-block">no</button>
    </div>
</div>

<!-- Remove above div after 3 seconds -->
<script type="text/javascript">
          let ad = document.getElementById('success-div');
        setTimeout(()=> {
            ad.style.display = 'none';
        }, 2000);
        let psd = document.getElementById('post-success-div');
        window.onload = psd.style.display = 'none';
        setTimeout(() => {
            psd.style.display = 'block';
        },2200);
         // - reject further changes
         let reject = document.getElementById('reject');
        reject.onclick = function(event){
            psd.remove();
        };
    </script>
@endif

<div class="row">
    <div class="col-sm-12 col-lg-12 mt-2">
        @if(isset($healthArticles))
         @foreach ($healthArticles as $healthArticle)
        <div class="row">
            <div class="col-lg text-center">
                <h2 style="padding-bottom: 15px;" id="title"><a href="/healthArticle/{{ $healthArticle->id }}">{{ $healthArticle->title ?? ''}}</a></h2>
                    <img src="{{ $healthArticle->image }}"
                        alt=""
                        id ="imgPost"
                        class=""
                        />                    
                <p style="font-size: 20px;">{!! $healthArticle->excerpt !!}</p>
            </div>
        </div>
        @endforeach
        @endif

        <!-- <div class="row">
            <div class="col-lg">
                <button class="btn btn-dark mt-2 mb-3"><a href="/articles/show_all_article">More Articles</button>        
            </div>
        </div> -->
    </div>
</div>
   



   
</div>
   

   

@endsection



   
       
    