<!-- | Imports  -->
@extends ('layouts.primary')
@section('title', 'Welcome Home')
@section('content')

<!-- | Styles for this file  -->
 <style>
 a {
   color: white;
 }

 p a {
   color: grey;
 }

 ul li a {
  color: black;
  font-weight: bold;
 }

 ul {
  list-style-type: none;
 }
</style>
<!--  | End of Styles for  file -->

<!-- <main class="mt-5 pt-5"> -->
<div class="container">

  <x-header-image/>
  <div class="row mt-5">
    <div class="col-12">
      <h1>Latest Article Categories</h1>
    </div>
    <div class="col-12">
      <h5 style="color:grey;">For the latest articles navigate here or 
          subscribe for future notifications.
      </h5>
    </div>
  </div>
  <hr style="border:red 2px solid; margin-top: 7px;">
  
 
  <!-- <hr class=" style-one">s -->
  <!-- <hr style="color:black"width="10px"> -->
  <section class="container">
    <div class="row">
      <div class="mt-4 col-sm-12">
      <h4><a style="color: black;" href="/babies">Baby</a></h4>
      <h6>All About Baby</h6>
      <a href="/babies">
        <img src="https://images.unsplash.com/photo-1588420343624-8b15ebd3573d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1300&q=80" height="350" width="100%"/>
        </a>
        <p><span>Photo by <a style="color:grey" href="https://unsplash.com/@sincerelymedia?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Sincerely Media</a> on <a href="https://unsplash.com/s/photos/blue?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span></p>
        <p class="mt-1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic architecto, cum aperiam laudantium quia nisi quod totam repellat eos, placeat neque facere quae earum aut pariatur laborum dignissimos debitis dolore.</p>
        <button class="btn btn-dark"><a href="/babies">More</a></button>
      </div>   
      <div class="mt-4 col-sm-12">
      <h4><a style="color:black;" href="/kids">The Kids</a></h4>
      <h6 class="mt-2">Navigating Early Years</h6>
      <a href="/kids">
        <img src="https://images.unsplash.com/photo-1503455637927-730bce8583c0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="kids article" height="350" width="100%"/>
        </a>
        <p><span>Photo by <a href="https://unsplash.com/@ewxy?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">W</a> on <a href="https://unsplash.com/s/photos/pink?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
        </p>
        <p class="mt-1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic architecto, cum aperiam laudantium quia nisi quod totam repellat eos, placeat neque facere quae earum aut pariatur laborum dignissimos debitis dolore.</p>
        
        <button class="mb-3 btn btn-dark"><a href="/kids">More</a></button>
      </div>
    </div> <!-- end of row -->
    <div class="row"> <!-- second row -->
      <div class="mt-4 col-sm-12">
        <h4><a style="color:black;" href="/guides">The Guides</a></h4>
        <h6 class="mt-2">Getting Thing's Done</h6>
        <a href="/guides">
            <img id="guides" src="https://images.unsplash.com/photo-1604079681864-c6fbd7eb109c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="crafts" height="350" width="100%"/>
        </a>
            <p><span>Photo by <a href="https://unsplash.com/@mymind?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">mymind</a> on <a href="https://unsplash.com/s/photos/red?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
            </p>
            <p class="mt-1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic architecto, cum aperiam laudantium quia nisi quod totam repellat eos, placeat neque facere quae earum aut pariatur laborum dignissimos debitis dolore.</p>
          <button class="mb-3 btn btn-dark"><a href="/guides">More</a></button>
      </div>
    </div>
    <div class="row">
      <div class="mt-4 col-sm-12">
        <h4><a style="color:black;" href="/health">Health latest</a></h4>
        <h6>Staying Healthy Is Hard</h6>
        <a href="/health">
          <img id="guides" src="https://images.unsplash.com/photo-1598940603846-a1edd0ef2574?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80" alt="health" height="350" width="100%"/>
          </a>
          <p>
          <span>Photo by <a href="https://unsplash.com/@rohitranwa?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Rohit Ranwa</a> on <a href="https://unsplash.com/s/photos/green?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
          </p>
          <p class="mt-1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic architecto, cum aperiam laudantium quia nisi quod totam repellat eos, placeat neque facere quae earum aut pariatur laborum dignissimos debitis dolore.</p>
        <button class="mb-3 btn btn-dark"><a href="/health">More</a></button> 
      </div>
    </div>
  </section>                
</div>

<div class="mt-4 container">
    <div class="row">
        <h1 class="col-lg text-center">The Latest Articles From The Bassinet</h1>
    </div>
    <hr style="border:red 2px solid; margin-top: 7px;">
  
  @if($articles)
    <div class="row">
      <div class="col-sm">
          <ul>
                <li><a href="/babyArticle/{{ $articles[0][0]->id ?? '' }}">{{ $articles[0][0]->title ?? ''  }}</a></li>
                <p class="paragraph">{{ $articles[0][0]->excerpt ?? '' }}</p>
                <hr>
                <li><a href="/kidArticle/{{ $articles[1][0]->id ?? '' }}">{{ $articles[1][0]->title ?? '' }}</a></li>
                <p class="paragraph">{{ $articles[1][0]->excerpt ?? ''  }}</p>
                <hr>
                <li><a href="/guideArticle/{{ $articles[2][0]->id ?? ''  }}">{{ $articles[2][0]->title ?? '' }}</a></li>
                <p class="paragraph">{{ $articles[2][0]->excerpt ?? '' }}</p>
                <hr>
                <li><a href="/healthArticle/{{ $articles[3][0]->id ?? ''  }}">{{ $articles[3][0]->title ?? '' }}</a></li>
                <p class="paragraph">{{ $articles[3][0]->excerpt ?? '' }}</p>
                <hr>
          </ul>
        </div>
    </div>
</div>      
@else 
<div class="row">
    <h1 class="col-lg text-center">No articles to show</h1>
 </div>
@endif

@endsection
