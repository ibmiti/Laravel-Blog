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

  .card {
    -moz-box-shadow: 0 0 3px #ccc;
    -webkit-box-shadow: 0 0 3px #ccc;
    box-shadow: 0 0 20px #ccc;
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
        <button id="popular" type="button" class="btn btn-outline-primary">Popular</button>
        <button id="recent" type="button" class="btn btn-outline-secondary">Recent</button>
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
            <h2 id="article-type" class="col-lg mt-3">
                <!-- this h2 filled with script on button click -->
            </h2>
            <p style="color: grey;" id="discription-type">
                <!-- this p filled with data based off button click -->
            </p>
            <hr style="border: 2px solid red;">
            <div id="po">
            @foreach($mostPopular as $a)
                <div class="row">
                    <div class="col-lg">
                        <h2 style="padding-bottom: 15px;" id="title">
                        <?php 
                            //  - article type(s)
                            //  - baby,kids,guides,health,
                            //  - there will be 2 articles within each index
                            // $b  = $a[0];
                            // $b1 = $a[1];

                            // dd($b,$b1);
                            
                        ?>
                            <a href="/articles/{{ $a[0]->id ?? '' }}">
                                {{ $a[0]->title ?? ''}}
                            </a>
                        </h2>  
                        <p style="color: grey; font-size: 15px;">{{ $a[0]->excerpt }}</p>              
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg">
                        <h2 style="padding-bottom: 15px;" id="title"><a href="/articles/{{ $a[1]->id ?? '' }}">{{ $a[1]->title ?? ''}}</a></h2>  
                        <p style="color: grey; font-size: 15px;">{{ $a[1]->excerpt }}</p>              
                    </div>
                </div>
                <hr>
            @endforeach
            </div>
            <div id="re">
            @foreach($mostRecent as $a)
                <div class="row">
                    <div class="col-lg">
                        <h2 style="padding-bottom: 15px;" id="title"><a href="/babyArticle/{{ $a[0]->id ?? '' }}">{{ $a[0]->title ?? ''}}</a></h2>                
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg">
                        <h2 style="padding-bottom: 15px;" id="title"><a href="/babyArticle/{{ $a[1]->id ?? '' }}">{{ $a[1]->title ?? ''}}</a></h2>                
                    </div>
                </div>
                <hr>
            @endforeach
            </div>
            <div id="gu">
            @foreach($guideArticles as $a)
                <div class="row">
                    <div class="col-lg">
                        <h2 style="padding-bottom: 15px;" id="title"><a href="/babyArticle/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a></h2>                
                    </div>
                </div>
                <hr>
            @endforeach
            </div>
            <div id="ba">
            @foreach($babyArticles as $a)
                <div class="row">
                    <div class="col-lg">
                        <h2 style="padding-bottom: 15px;" id="title"><a href="/babyArticle/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a></h2>                
                    </div>
                </div>
                <hr>
            @endforeach
            </div>
            <div id="ki">
            @foreach($kidsArticles as $a)
                <div class="row">
                    <div class="col-lg">
                        <h2 style="padding-bottom: 15px;" id="title"><a href="/babyArticle/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a></h2>                
                    </div>
                </div>
                <hr>
            @endforeach
            </div>
            <div id="he">
            @foreach($healthArticles as $a)
                <div class="row">
                    <div class="col-lg">
                        <h2 style="padding-bottom: 15px;" id="title"><a href="/babyArticle/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a></h2>                
                    </div>
                </div>
                <hr>
            @endforeach
            </div>


 
        </div>
    </div>
  </div>
</div>

<script type="text/javascript">
 

    // - Use these to target elements to place title for articles tab
    let p = document.getElementById('popular');
    let r = document.getElementById('recent');
    let g = document.getElementById('guides');
    let b = document.getElementById('baby');
    let k = document.getElementById('kids');
    let h = document.getElementById('health');
    // - will use these in the hiding of divs 
    let po = document.getElementById('po');
    let re = document.getElementById('re');
    let gu = document.getElementById('gu');
    let ba = document.getElementById('ba');
    let ki = document.getElementById('ki');
    let he = document.getElementById('he');
    //  | default article selection
    window.onload = () =>  {   
        p.click();
        aac(p);
     }
    // - hide div with articles
    function hdwa(x) {
        x.style.display = "none";
    }
    hdwa(po);
    hdwa(re);
    hdwa(gu);
    hdwa(ba);
    hdwa(ki);
    hdwa(he);

    // - add active class to buttons on click
    function aac(x){
        x.className += " active";
    // - remove active class
         setTimeout(()=>{
            x.classList.remove("active");
        }, 1500);
    }   

    // - show div with articles on click
   function sdwa(x){
         x.style.display = 'inline';
    }


// - on click write to element popular articles
    p.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Popular articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest Popular articles from Baby Bassinet';
        aac(p);  
        // - show div with articles
        sdwa(po);

        // - add active class to div 
        po.className += " active";
        if (po.className == " active"){
            // - hide all other articles if this po is active
            hdwa(re);
            hdwa(gu);
            hdwa(ba);
            hdwa(ki);
            hdwa(he);
        }
    }

    r.onclick = () => {

        document.getElementById('article-type').innerHTML = 'Recent articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest articles from Baby Bassinet';
        aac(r);
        // - show div with articles
        sdwa(re);
        
        // - add active class to div 
        re.className += " active";
        if (re.className == " active"){
            // - hide all other articles if this po is active
            hdwa(po);
            hdwa(gu);
            hdwa(ba);
            hdwa(ki);
            hdwa(he);
        }
    }

    g.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Guide articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest Guide articles';
        aac(g);
        // - show div with articles
        sdwa(gu);

        // - add active class to div 
        gu.className += " active";
        if (gu.className == " active"){
            // - hide all other articles if this po is active
            hdwa(po);
            hdwa(re);
            hdwa(ba);
            hdwa(ki);
            hdwa(he);
        }
    }

    b.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Baby articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest Baby articles';
        aac(b);
        // - show div with articles
        sdwa(ba);
        // - add active class to div 
        ba.className += " active";
        if (ba.className == " active"){
            // - hide all other articles if this po is active
            hdwa(po);
            hdwa(gu);
            hdwa(re);
            hdwa(ki);
            hdwa(he);
        }
    }

    k.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Kids articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest Kids articles';
        aac(k);
        // - show div with articles
        sdwa(ki);
        // - add active class to div 
        ki.className += " active";
        if (ki.className == " active"){
            // - hide all other articles if this po is active
            hdwa(po);
            hdwa(gu);
            hdwa(ba);
            hdwa(re);
            hdwa(he);
        }
    }
    h.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Health articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest Health articles';
        aac(h);
        // - show div with articles
        sdwa(he);
        // - add active class to div 
        he.className += " active";
        if (he.className == " active"){
            // - hide all other articles if this po is active
            hdwa(po);
            hdwa(gu);
            hdwa(ba);
            hdwa(ki);
            hdwa(re);
        }
    }









// - work on adding more ids for the buttons 

</script>

 

@endsection



   
       
    