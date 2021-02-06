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
        <button id="popular" onclick="aac()" type="button" class="btn btn-outline-primary">Popular</button>
        <button id="recent" onclick="aac(r)" type="button" class="btn btn-outline-secondary">Recent</button>
        <button id="guides" type="button" class="btn btn-outline-success">Guides</button>
        <button id="baby" type="button" class="btn btn-outline-danger">Baby</button>
        <button id="kids" type="button" class="btn btn-outline-warning">Kids</button>
        <button id="health" type="button" class="btn btn-outline-info">Health</button>
    </div>
</div>

<div class="mt-3 row">
    <div class="col-lg-12 mt-2 card container-fluid;">
        <div class="container"> 
    <!-- | This data to be swapped out based on button push -->
            <h2 id="article-type" class="mt-3">
                <!-- this h2 filled with script on button click -->
            </h2>
            <p id="discription-type">
                <!-- this p filled with data based off button click -->
            </p>
            <hr style="border: 2px solid red;">
            <?php 

            ?>
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

<script type="text/javascript">
    let p = document.getElementById('popular');
    let r = document.getElementById('recent');
    let g = document.getElementById('guides');
    let b = document.getElementById('baby');
    let k = document.getElementById('kids');
    let h = document.getElementById('health');
 

    // - add active class 
    function aac(x){
        x.className += " active";
        // - remove active class
        setTimeout(()=>{
            console.log(x);
            x.classList.remove("active");
        }, 1500);
    }
   
    //  | default article selection
    window.onload = () =>  {   
        p.click();
        aac(p);
     }

// - on click write to element popular articles
    p.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Popular articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest Popular articles from Baby Bassinet';
        aac(p);  
    }

    r.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Recent articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest articles from Baby Bassinet';
       return aac(r);
    }

    g.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Guide articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest Guide articles';
        aac(g);
        rmvac(p);
    }

    b.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Baby articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest Baby articles';
        aac(b);
        rmvac(b);
    }

    k.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Kids articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest Kids articles';
        aac(k);
        rmvac(k);
    }
    h.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Health articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest Health articles';
        aac(h);
        rmvac(h);
    }


// - work on adding more ids for the buttons 

</script>

 

@endsection



   
       
    