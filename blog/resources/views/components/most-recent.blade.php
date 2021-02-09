<!--  | In this file : 
        will include the rows, col's for each type of article - 2 each
 -->

<!--  | first 2 rows for baby article -->
<div class="row">
    <div class="col-lg">
        <h2 style="padding-bottom: 15px;" id="title">
            <a href="/babyArticle/{{ $mostRecent[0][0]->id ?? '' }}">
                {{ $mostRecent[0][0]->title ?? ''}}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">{{ $mostRecent[0][0]->excerpt ?? ''  }}</p>              
    </div>
</div>
<!--  | separator  -->
<hr>
<!-- | row for second most-popular baby article -->
<div class="row">
    <div class="col-lg">
        <h2 style="padding-bottom: 15px;" id="title">
            <a href="/babyArticle/{{ $mostRecent[0][1]->id ?? '' }}">
            {{ $mostRecent[0][1]->title ?? ''}}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">
            {{ $mostRecent[0][1]->excerpt ?? '' }}
        </p>              
    </div>
</div>

<!-- | Second set of articles | Kids articles -->
<hr> 
<div class="row">
    <div class="col-lg">
        <h2 style="padding-bottom: 15px;" id="title">
            <a href="/kidArticle/{{ $mostRecent[1][0]->id ?? '' }}">
            {{ $mostRecent[1][0]->title ?? '' }}
            </a>
        </h2>                
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg">
        <h2 style="padding-bottom: 15px;" id="title">
            <a href="/kidArticle/{{ $mostRecent[1][1]->id ?? '' }}">
              {{ $mostRecent[1][1]->title ?? '' }}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">{{ $mostRecent[1][1]->excerpt ?? '' }}</p>              
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg">
        <h2 style="padding-bottom: 15px;" id="title">
            <a href="/guideArticle/{{ $mostRecent[2][0]->id ?? '' }}">
              {{ $mostRecent[2][0]->title ?? '' }}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">{{ $mostRecent[2][0]->excerpt ?? '' }}</p>              
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg">
        <h2 style="padding-bottom: 15px;" id="title">
            <a href="/guideArticle/{{ $mostRecent[2][1]->id ?? '' }}">
              {{ $mostRecent[2][1]->title ?? ''}}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">{{ $mostRecent[2][1]->excerpt ?? '' }}</p>              
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg">
        <h2 style="padding-bottom: 15px;" id="title">
            <a href="/healthArticle/{{ $mostRecent[3][0]->id ?? '' }}">
              {{ $mostRecent[3][0]->title ?? '' }}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">{{ $mostRecent[3][0]->excerpt ?? '' }}</p>              
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg">
        <h2 style="padding-bottom: 15px;" id="title">
            <a href="/healthArticle/{{ $mostRecent[3][1]->id ?? '' }}">
              {{ $mostRecent[3][1]->title ?? ''}}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">{{ $mostRecent[3][1]->excerpt ?? '' }}</p>              
    </div>
</div>