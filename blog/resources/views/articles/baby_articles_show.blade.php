<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/main.scss') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/a7bffd41d3.js"></script>
    <title>BabyBassinet - Blog {{ $baby_articles->title ?? '' }} </title>
</head>
<style>
/* may use this later roboto */
/* @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,100&display=swap'); */
    @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap');
    .col-lg  {
        /* font-family: 'Raleway', 'Roboto'; */
        font-family: 'Big Shoulders Stencil Display', cursive;
        font-size: 40px;
    }

    nav ul li {
        /* font-family: 'Raleway', 'Roboto'; */
        font-family: 'Big Shoulders Stencil Display', cursive;
        font-size: 40px;
    }

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
      /* margin: 20px 20px 20px 20px;
      padding: 20px 100px 20px 100px; */
    }

    .col-sm {
      font-family: Verdana;
      font-size: 16px;
      color: #555555;
      line-height: 1.5;
      letter-spacing: .45px;
      /* margin: 20px 20px 20px 20px;
      padding: 20px 100px 20px 100px; */
    }

    ul {
      list-style-type: none;
    }

    a {
        text-decoration: none;
    }

    img {
    border-radius : 5%;
    /* -moz-border-radius:50%;
    -webkit-border-radius:50%; */
    }



    .image {
		border: 0;
		display: inline-block;
		position: relative;
	}

		.image img {
			display: block;
		}

		.image.left, .image.right {
			max-width: 40%;
		}

			.image.left img, .image.right img {
				width: 100%;
			}

		.image.left {
			float: left;
			padding: 0 1.5em 1em 0;
			top: 0.25em;
		}

		.image.right {
			float: right;
			padding: 0 0 1em 1.5em;
			top: 0.25em;
		}

		.image.fit {
			display: block;
			margin: 0 0 2em 0;
			width: 100%;
		}

			.image.fit img {
				width: 100%;
			}

		.image.featured {
			display: block;
			margin: 0 0 3em 0;
			width: 100%;
		}

			.image.featured img {
				width: 100%;
			}

			@media screen and (max-width: 736px) {

				.image.featured {
					margin: 0 0 1.5em 0;
				}

      }
      
		.image.main {
			display: block;
			margin: 0 0 3em 0;
			width: 100%;
		}

			.image.main img {
				width: 100%;
      }
      

a {
  color: white;
}
  a:hover {
   color: pink;
  }

  a:link {
    text-decoration: none;
  }


  a:visited {
   text-decoration: none;
  }

/* p{
  line-
} */

p {
  margin-left:  8%;
  margin-right: 8%;
  font-weight: lighter;
}

/* for image_credit */
  p a {
        color: black;
  }
</style>

<body>
<div class="container-fluid">

<nav class="navbar navbar-light navbar">
  <a id="logo" href="/">
    <img src="{{asset('images/bbLogo.png')}}" 
    class="navbar-brand d-inline-block align-to waves-effect" 
    width="60" height="80" 
    style="padding-top:15px"
    /> 
  </a>
<strong class="navbar-brand" 
    style="font-family: 'Big Shoulders Stencil Display', cursive; font-size: 40px; padding-top: 10px;"
    href="#">BB + BABY BLOG | ARTICLE {{ $baby_articles->id ?? '' }}
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
            $baby_articles_id = $baby_articles->id ?? '';
            
            switch ($uri) {
                case ($uri == '/articles'. '/'. $baby_articles_id):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT </strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item active"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE </strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
                    break;
                }
        ?>
   </ul> 
  </div>
</nav>
<!-- <hr class="my-5"> -->


<div class="container-fluid">
      <div class="mt-5 row">
        <h1 style="padding-bottom: 15px;" class="col-lg text-center">        
          {{ $baby_articles->title ?? ''}}
        </h1>
      </div> 
      
    <div class="row">
      <div class="col-12 text-center">
      <blockquote class="blockquote">{{ $baby_articles->quip ?? '' }}</blockquote>
      </div>
    </div>
  
    <div class="row">
       <div class="col-md text-center mt-5 mb-5">
          <img class="image featured" src="{{ $baby_articles->image }}" alt="article image" max-width="100%" max-height="100%">
          <p class="mt-1"> {!! $baby_articles->image_credit !!} </p>
       </div>         
    </div>
  
</div>
<!-- there should always be a p1 -->
<!-- TODO this may be throwing an error - it is not currently being displayed -->
@if ($baby_articles->p1 )
    <div class="row">
      <div class="col-md mb-3 text-center">
          <h2> {{ $baby_articles->heading1 }} </h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md text-center">
          <p> {{ $baby_articles->p1 }} </p>
      </div>
    </div>
@endif

@if ($baby_articles->p2 )
    <div class="row">
      <div class="col-md mb-3 text-center">
          <h2> {{ $baby_articles->heading2 }} </h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md text-center">
          <p> {{ $baby_articles->p2}} </p>
      </div>
    </div>
@endif

<!-- if there is a paragraph 3 then show it -->
@if ($baby_articles->p3)

    <div class="row">
      <div class="col-md mb-3 text-center">
          <h2> {{ $baby_articles->heading3 }} </h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md text-center">
          <p> {{ $baby_articles->p3}} </p>
      </div>
    </div>
@endif

    <div class="row justify-content-center mt-3">
      <div class="col-lg text-center">
          <button class="btn btn-lg btn-dark"><a href="/baby_articles">BACK TO BABY ARTICLES</a></button>
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

