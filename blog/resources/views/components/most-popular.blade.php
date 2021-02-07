<div class="mt-3 row">
    <div class="col-lg-12 mt-2 card container-fluids">
    <!-- <div class="col-lg-12 mt-2 card card-small container-fluid;"> -->
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
            <?php 
            //  - article type(s)
            //  - baby,kids,guides,health,
            //  - there will be 2 articles within each index
            //  - use these to 
            $mplr = $mostPopular ?? '';
            $b  = $mplr[0][0];
            // $b1 = $mplr[0][1];
            $k  = $mplr[1][0];
            // $k1 = $mplr[1][1];
            $g  = $mplr[2][0];
            // $g1 = $mplr[2][1];
            $h  = $mplr[3][0];
            // $h1 = $mplr[3][1];      

            ?>
            @foreach($mostPopular as $a)
                <div class="row">
                    <div class="col-lg">
                        <h2 style="padding-bottom: 15px;" id="title">

                            <a href="/babyArticle/{{ $a[0]->id ?? '' }}">
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
                        <h2 style="padding-bottom: 15px;" id="title"><a href="/kidsArticle/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a></h2>                
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