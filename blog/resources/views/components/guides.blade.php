@foreach($guideArticles as $a)
<div class="row">
    <div class="col-lg">
        <h2 id="title">
        <a href="/guideArticle/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a>
        </h2>    
        <p style="color: grey; font-size: 15px;">
            {{ $a->excerpt }}
        </p>             
    </div>
</div>
@endforeach