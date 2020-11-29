<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/main.scss') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/a7bffd41d3.js"></script>
    <title>BabyBassinet - @yield('title') </title>
</head>

<body>


<div class="container container-fluid">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap');
    .col-lg  {
        /* font-family: 'Raleway', 'Roboto'; */
        font-family: 'Big Shoulders Stencil Display', cursive;
        font-size: 40px;
    }
</style>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap');
    nav ul li {
        /* font-family: 'Raleway', 'Roboto'; */
        font-family: 'Big Shoulders Stencil Display', cursive;
        font-size: 40px;
    }
</style>

<nav class="navbar navbar-light navbar">
<a id="logo" href="/">
        <img src="{{asset('images/bbLogo.png')}}" class="navbar-brand d-inline-block align-to waves-effect" width="60" height="80" style="padding-top:15px" /> 
</a>
<strong class="navbar-brand" 
                style="font-family: 'Big Shoulders Stencil Display', cursive; font-size: 40px; padding-top: 10px;"
                href="#">
                BB + BLOG + ARTICLE {{ $article->id }}
                </strong>   

  <button class="navbar-toggler" 
          type="button" 
          data-toggle="collapse"
          data-target="#navbarSupportedContent15"
          aria-controls="navbarSupportedContent15"
          aria-expanded="false" 
          aria-label="Toggle navigation"
          style="border: none;outline: none;"
          >
    <span class="navbar-toggler-icon"></span></button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent15">
    <ul class="navbar-nav ml-auto"> 
        <?php     
            $uri = Request::getRequestUri();
            switch ($uri) {
                case ($uri == '/articles'. '/'. $article->id):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT </strong></a></li>');
                    echo ('<li class="nav-item active"><a class="nav-link" href="/articles"><strong>BLOG</strong></a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
                    break;
                }
        ?>
   </ul> 
  </div>
</nav>

<div class="container container-fluid">
    <div class="row">
        <h1 class="col-lg text-center">{{ $article->title }}</h1>
    </div>

    <div class="row">
        <div class="col-md">
            <p>{{ $article->body }}</p>
        </div>
    </div>
</div>
</div>
<!-- <script src="{{ asset('js/main.js') }}"></script> -->

<!-- bootstrap related scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<x-footer />
</body>
</html>

