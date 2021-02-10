@foreach($babyArticles as $a)
<div class="row">
    <div class="col-lg">
        <h2 style="padding-bottom: 15px;" id="title"><a href="/babyArticle/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a></h2> 
        <p style="color: grey; font-size: 15px;">
            {{ $a->excerpt }}
        </p>                
    </div>
</div>
@endforeach