@extends ('layouts.primary')

@section('title', 'Welcome Home')
@section('content')

<style>
 
 #color-overlay {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background-color: grey;
   opacity: 0.1;
}

/* Type */
body, input, select, textarea {
  color: #7f888f;
  font-family: "Open Sans", sans-serif;
  font-size: 13pt;
  font-weight: 400;
  line-height: 1.65; }
  @media screen and (max-width: 1680px) {
    body, input, select, textarea {
      font-size: 11pt; } }
  @media screen and (max-width: 1280px) {
    body, input, select, textarea {
      font-size: 10pt; } }
  @media screen and (max-width: 360px) {
    body, input, select, textarea {
      font-size: 9pt; } }

  img {
    border-radius : 2%;
    
  }

  hr.style-one {
    border: 0;
    height: 1px;
    background: #333;
    background-image: linear-gradient(to right, #ccc, #333, #ccc);
}

/* 
@media screen and (max-width:400px) {
  #row-1 {
  margin-bottom: -30px;
}

#row-1 {
  margin-bottom: -150px;
} */
}

</style>

<!-- <main class="mt-5 pt-5"> -->
<div class="container-fluid">

  <x-header-image/>
  <div class="row mt-5">
    <h1 class="mb-2">Good Reads</h1>
  </div>
 
  <!-- <hr class=" style-one">s -->
  <!-- <hr style="color:black"width="10px"> -->
  <section class="container">
    <div id="row-1" class="row">
      <div class="col-1"></div>
      
      <div class="col-5">
      <h5 class="mt-2">Baby latest</h5>
        <img src="https://images.unsplash.com/photo-1527620743113-fac8dd0f8d17?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80" alt="baby bassinet" height="350" width="100%"/>
        <p class="mt-1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic architecto, cum aperiam laudantium quia nisi quod totam repellat eos, placeat neque facere quae earum aut pariatur laborum dignissimos debitis dolore.</p>
        <button class="btn btn-dark"><a href="/baby_articles">More</a></button>
      </div>
      
      <div class="col-5">
      <h5 class="mt-2">Kids latest</h5>
        <img src="https://images.unsplash.com/photo-1607453998774-d533f65dac99?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTF8fGtpZHN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=90" alt="kids article" height="350" width="100%"/>
        <p class="mt-1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic architecto, cum aperiam laudantium quia nisi quod totam repellat eos, placeat neque facere quae earum aut pariatur laborum dignissimos debitis dolore.</p>
        <button class="btn btn-dark"><a href="/kids_articles">More</a></button>
      </div>
      <div class="col-1"></div>
    </div> <!-- end of row -->
    <div class="row mt-4"> <!-- second row -->
      <div class="col-1"></div>
      <div class="col-5">
      <h5 class="">Guides latest</h5>
          <img id="guides" src="https://images.unsplash.com/photo-1607211851821-8be3cd6146f0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="crafts" height="350" width="100%"/>
          <p class="mt-1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic architecto, cum aperiam laudantium quia nisi quod totam repellat eos, placeat neque facere quae earum aut pariatur laborum dignissimos debitis dolore.</p>
        <button class="btn btn-dark">More</button>
      </div>
      <div class="col-5">
        <h5 class="">Health latest</h5>
          <img id="guides" src="https://images.unsplash.com/photo-1511688878353-3a2f5be94cd7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80" alt="health" height="350" width="100%"/>
          <p class="mt-1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic architecto, cum aperiam laudantium quia nisi quod totam repellat eos, placeat neque facere quae earum aut pariatur laborum dignissimos debitis dolore.</p>
        <button class="btn btn-dark">More</button>
          
      </div>
    </div>
  </section>                
</div>

@endsection
