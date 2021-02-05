<style>
    @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap');
    nav ul li {
        font-family: 'Big Shoulders Stencil Display', cursive;
        font-size: 40px;
    }
</style>

<nav id="navbar" class="navbar navbar-light navbar">
<a id="logo" href="/">
        <img src="images/bbLogo.png" class="navbar-brand d-inline-block align-to waves-effect" width="60" height="80" style="padding-top:15px" /> 
</a>
<strong class="navbar-brand" 
                style="font-family: 'Big Shoulders Stencil Display', cursive; font-size: 40px; padding-top: 10px;"
                href="#">
                <?php 
                switch($uri = Request::getRequestUri()) {
                    case ($uri == '/'):
                        echo ('BB + HOME | For The Love Of Baby');
                    break;
                    case ($uri == '/articles'):
                        echo ('BB + BLOG | ARTICLES');
                    break;
                    case($uri == '/about'):
                        echo ('BB + ABOUT US');
                    break;
                    case ($uri == '/contact'):
                        echo ('BB + CONTACT US');
                    break;
                }
                ?>
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
                case ($uri == '/'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE</strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
                    break;
                case ($uri == '/articles'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT </strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item active"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE</strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
                    break;
                case ($uri == '/articles'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT </strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item active"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE</strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
                    break;
                case ($uri == '/about'):    
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item active"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE</strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
                    break;
                case ($uri == '/contact'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE</strong></a></li>');
                    echo ('_____________');
                    echo ('<li class="nav-item active"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
                    break;
                }
        ?>
   </ul> 
  </div>
</nav>
