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

.card-articles {
    -moz-box-shadow: 0 0 3px grey !important;
    -webkit-box-shadow: 0 0 3px grey !important ;
    box-shadow: 0 0 20px grey !important;
}

.add-whitespace {
    padding : auto;
    margin : auto;
}

</style>

<div class="container">
    <x-header-image/>
    <div class="row">
        <h1 class="col-lg text-center mt-5">Keeping up with the Bassinet</h1>
    </div>
    
    <div class="row">
        <div class="col-lg text-center mb-5" 
             style="padding-bottom: 40px;"
        >
            <h2>The Latest Articles From The Bassinet</h2>
        </div>
    </div>

<!-- buttons  -->
    <div class="row add-whitespace">
        <div class="text-center col-sm-12 add-whitespace">
            <button id="popular" type="button" class="btn btn-outline-primary">Popular</button>
            <button id="recent"  type="button" class="btn btn-outline-secondary">Recent</button>
            <button id="guides"  type="button" class="btn btn-outline-success">Guides</button>
            <button id="baby"    type="button" class="btn btn-outline-danger">Baby</button>
            <button id="kids"    type="button" class="btn btn-outline-warning">Kids</button>
            <button id="health"  type="button" class="btn btn-outline-info">Health</button>
        </div>
    </div>

<!-- card which buttons interact with -->
    <div class="mt-4 row card card-articles add-whitespace">
        <div class="col-lg-12 mt-2 container add-whitespace">
            <div class="container"> 
        <!-- | This data to be swapped out based on button push -->
                <h2 id="article-type" class="col-lg mt-3">
                    <!-- this h2 filled with script on button click -->
                </h2>
                <p style="color: grey;" id="discription-type">
                    <!-- this p filled with data based off button click -->
                </p>
                <hr style="border: 2px solid red;">
                <div id="po"><x-most-popular/></div>
                <div id="re"><x-most-recent/></div>
                <div id="gu"><x-guides/></div>
                <div id="ba"><x-baby/></div>
                <div id="ki"><x-kids/></div>
                <div id="he"><x-health/></div>
            </div>
        </div>
    </div>

<!-- | etc...as above e.g shows -->

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
    //  - this will hide all divs onload
    hdwa(po);
    hdwa(re);
    hdwa(gu);
    hdwa(ba);
    hdwa(ki);
    hdwa(he);
let count = 0;
// - add active class to buttons on click
    function aac(x){
        //  reload dom - to keep card carrying articles fresh.
        count++;
        console.log(count);
        if(count>10){
            window.location.reload();
        }
//  - so that we can refresh document to be able to refresh card on click
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
// - on click run func.
    p.onclick = () => {
// - write to element popular articles
        document.getElementById('article-type').innerHTML = 'Popular articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest Popular articles from Baby Bassinet';
// - add active class 
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
// - when button with class r is clicked
    r.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Recent articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest articles from Baby Bassinet';
// - add active class r
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
// - when btn#g clicked run func.
    g.onclick = () => {
        
        document.getElementById('article-type').innerHTML = 'Guide articles';
        document.getElementById('discription-type').innerHTML = 'Read the latest Guide articles';
// - add .active onclick func.
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
</script>

 

@endsection