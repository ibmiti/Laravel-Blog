<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/main.scss') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/a7bffd41d3.js"></script>
    <title>BabyBassinet - Blog {{ $guideArticle->title ?? '' }} </title>
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
    href="#">BB + BABY BLOG | ARTICLE {{ $guideArticle->id ?? '' }}
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
            $guideArticleId = $guideArticle->id ?? '';
            
            switch ($uri) {
                case ($uri == '/articles'. '/'. $guideArticleId):
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

@if($guideArticle)
<div class="container-fluid">
      <div class="mt-5 row">
        <h1 style="padding-bottom: 15px;" class="col-lg text-center">        
          {{ $guideArticle->title ?? ''}}
        </h1>
      </div> 
      
    <!-- <div class="row">
      <div class="col-12 text-center">
        <img src="{{ $guideArticle->image_name ?? '' }}"></img>
      </div>
    </div> -->

    <div class="mt-5 row">
        <h1 style="padding-bottom: 15px;" class="col-lg text-center">        
          {{ $guideArticle->heading1 ?? ''}}
        </h1>
      </div> 

    <div class="row">
      <div class="col-12 text-center">
        <img src="{{ $guideArticle->image_name ?? '' }}"></img>
      </div>
    </div>
    
      <div class="mt-5 row">
        <p>        
          {{ $guideArticle->paragraph1 ?? ''}}
        </p>
      </div>
      <!-- start of next -->

      <div class="mt-5 row">
        <h1 style="padding-bottom: 15px;" class="col-lg text-center">        
          {{ $guideArticle->heading2 ?? ''}}
        </h1>
      </div> 

    <div class="row">
      <div class="col-12 text-center">
        <img src="{{ $guideArticle->image2_name ?? '' }}"></img>
      </div>
    </div>
    
      <div class="mt-5 row">
        <p>        
          {{ $guideArticle->paragraph2 ?? ''}}
        </p>
      </div>
      <!-- start of next -->

      <div class="mt-5 row">
        <h1 style="padding-bottom: 15px;" class="col-lg text-center">        
          {{ $guideArticle->heading3 ?? ''}}
        </h1>
      </div> 

    <div class="row">
      <div class="col-12 text-center">
        <img src="{{ $guideArticle->image3_name ?? '' }}"></img>
      </div>
    </div>
    
    <div class="mt-5 row">
      <p>        
        {{ $guideArticle->paragraph3 ?? ''}}
      </p>
    </div>
      <!-- start of next -->

    <div class="mt-5 row">
      <h1 style="padding-bottom: 15px;" class="col-lg text-center">        
        {{ $guideArticle->heading4 ?? ''}}
      </h1>
    </div> 

  <div class="row">
    <div class="col-12 text-center">
      <img src="{{ $guideArticle->image4_name ?? '' }}"></img>
    </div>
  </div>
  
      <div class="mt-5 row">
        <p>        
          {{ $guideArticle->paragraph4 ?? ''}}
        </p>
      </div>
      <!-- start of next -->

      <div class="mt-5 row">
        <h1 style="padding-bottom: 15px;" class="col-lg text-center">        
          {{ $guideArticle->heading5 ?? ''}}
        </h1>
      </div> 

      <div class="row">
      <div class="col-12 text-center">
      <img src="{{ $guideArticle->image5_name ?? '' }}"></img>
      </div>
    </div>
    
      <div class="mt-5 row">
        <p>        
          {{ $guideArticle->paragraph5 ?? ''}}
        </p>
      </div>
      <!-- start of next -->

      <div class="mt-5 row">
        <h1 style="padding-bottom: 15px;" class="col-lg text-center">        
          {{ $guideArticle->heading6 ?? ''}}
        </h1>
      </div> 

      <div class="row">
      <div class="col-12 text-center">
      <img src="{{ $guideArticle->image6_name ?? '' }}"></img>
      </div>
    </div>
    
      <div class="mt-5 row">
        <p>        
          {{ $guideArticle->paragraph6 ?? ''}}
        </p>
      </div>
      <!-- start of next -->

      <div class="mt-5 row">
        <h1 style="padding-bottom: 15px;" class="col-lg text-center">        
          {{ $guideArticle->heading7 ?? ''}}
        </h1>
      </div> 

      <div class="row">
      <div class="col-12 text-center">
      <img src="{{ $guideArticle->image7_name ?? '' }}"></img>
      </div>
    </div>
    
      <div class="mt-5 row">
        <p>        
          {{ $guideArticle->paragraph7 ?? ''}}
        </p>
      </div>
      <!-- start of next -->

      <div class="mt-5 row">
        <h1 style="padding-bottom: 15px;" class="col-lg text-center">        
          {{ $guideArticle->heading8 ?? ''}}
        </h1>
      </div> 

      <div class="row">
      <div class="col-12 text-center">
      <img src="{{ $guideArticle->image8_name ?? '' }}"></img>
      </div>
    </div>
    
      <div class="mt-5 row">
        <p>        
          {{ $guideArticle->paragraph8 ?? ''}}
        </p>
      </div>
      <!-- start of next -->

      <div class="mt-5 row">
        <h1 style="padding-bottom: 15px;" class="col-lg text-center">        
          {{ $guideArticle->heading9 ?? ''}}
        </h1>
      </div> 

      <div class="row">
      <div class="col-12 text-center">
      <img src="{{ $guideArticle->image9_name ?? '' }}"></img>
      </div>
    </div>
    
      <div class="mt-5 row">
        <p>        
          {{ $guideArticle->paragraph9 ?? ''}}
        </p>
      </div>
      <!-- start of next -->

      <div class="mt-5 row">
        <h1 style="padding-bottom: 15px;" class="col-lg text-center">        
          {{ $guideArticle->heading10 ?? ''}}
        </h1>
      </div> 

      <div class="row">
      <div class="col-12 text-center">
      <img src="{{ $guideArticle->image10_name ?? '' }}"></img>
      </div>
    </div>
    
      <div class="mt-5 row">
        <p>        
          {{ $guideArticle->paragraph10 ?? ''}}
        </p>
      </div>
      
  
    <!-- <div class="row"> add this
       <div class="col-md text-center mt-5 mb-5">
          <img class="image featured" src="{{ $guideArticle->image }}" alt="article image" max-width="100%" max-height="100%">
          <p class="mt-1"> {!! $guideArticle->image_credit !!} </p>
       </div>         
    </div> -->
  
</div>
<!-- there should always be a p1 -->
<!-- TODO this may be throwing an error - it is not currently being displayed -->

<hr>
<div class="container mt-1">
<form method="POST" action="{{ route('updateGuideArticle', $guideArticle->id) }}">
    @csrf

<div class="row">
        <!-- <label for="title" class="control-label">Article Image</label> -->
        <input type="text" name="image" class="form-control form-control-lg" placeholder="A cool image here">
</div>

<!-- | update this later so that this functionality is available -->
<!-- <div  class="row mt-3">
    <input type="text" name="image_credit" class="form-control form-control-lg mt-3" placeholder="Give credit for image">
</div> -->

<div class="row mt-4">
    <!-- <label for="title" class="control-label">Article Title</label> -->
    <input type="text" name="title" class="form-control form-control-lg" placeholder="Something Spookey scary or exciting for the Title">
</div>

<!-- | TODO - add this later -->
<!-- <div class="row mt-4">
    <input type="text" name="quip" class="form-control form-control-lg" placeholder="Something short and interesting maybe even a quote for the quip field?">
</div> -->

<div class="row mt-3">
    <!-- <label for="excerpt" class="control-label">Article Excerpt</label> -->
    <input type="textarea" name="excerpt" class="form-control form-control-lg mt-3" placeholder="A short snippet from the article for the excerpt">
</div>

<div class="row mt-3">
    <!-- <label for="header 1" class="control-label">Header 1</label> -->
    <input type="textarea" name="h1" class="form-control form-control-lg mt-3" placeholder="Header 1">
</div>

<div class="row mt-3">
    <!-- <label for="paragraph 1" class="control-label">Paragraph 1</label> -->
    <input type="textarea" name="paragraph1" class="form-control form-control-lg mt-3" placeholder="First Paragraph Here">
</div>

<div class="row mt-3">
    <!-- <label for="header 2" class="control-label">Header 2</label> -->
    <input type="textarea" name="h2" class="form-control form-control-lg mt-3" placeholder="Header 2">
</div>

<div class="row mt-3">
    <!-- <label for="paragraph 2" class="control-label">Paragraph 2</label> -->
    <input type="textarea" name="paragraph2" class="form-control form-control-lg mt-3" placeholder="Second Paragraph Here">
</div>

<div class="row mt-3">
    <!-- <label for="heading 3" class="control-label">Header 3</label> -->
    <input type="textarea" name="h3" class="form-control form-control-lg mt-3" placeholder="Header 3">
</div>

<div class="row mt-3">
    <!-- <label for="paragraph 3" class="control-label">Paragraph 3</label> -->
    <input type="textarea" name="paragraph3" class="form-control form-control-lg mt-3" placeholder="Third Paragraph Here">
</div>

<div class="row mt-3">
    <!-- <label for="paragraph 3" class="control-label">Paragraph 3</label> -->
    <input type="textarea" name="paragraph3" class="form-control form-control-lg mt-3" placeholder="Third Paragraph Here">
</div>

<div class="row justify-content-center mt-3">
  <div class="col-sm-3">
      <button class="btn btn-block btn-primary" type="submit">Edit</button>
  </div>
  <div class="col-sm-3">
    <button id="delete-btn" class="btn btn-block btn-primary">
    <a href="/deleteGuideArticle/{{$guideArticle->id}}/delete">Delete</a>
    </button>
  </div>
  <div class="col-sm-3">
    <button id="return-btn" class="btn btn-block btn-dark"><a href="/guides">Go Back</a></button>
  </div>   
</div>

</form>
@endif
@if(!$guideArticle)
<div class="row">
  <div class="col-sm-12 text-center">
    <p style="font-weight: bold;">{{ $messages['success'] ?? '' }}</p>
  </div>

  <div class="col-sm-3">
    <button id="return-btn" class="btn btn-dark"><a href="/guides">Go Back</a></button>
  </div>   
</div>
</div>
@endif

<script type="text/javascript">
// | Prevent form from submitting to edit method, instead send id to 
// | ... destroy method within BabyArticles controller
    let delete_btn = document.getElementById('delete-btn');
    delete_btn.onclick(function(event) {
      event.preventDefault();
    });
    
    //  | prevent from from submitting - allow button to function
    let return_btn = document.getElementById('return-btn');
    return_btn.onclick(function(event) {
      event.preventDefault();
    });

</script>
<!-- <script src="{{ asset('js/main.js') }}"></script> -->

<!-- bootstrap related scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<x-footer />
</body>
</html>

