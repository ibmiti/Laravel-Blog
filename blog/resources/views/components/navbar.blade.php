<nav class="navbar navbar-light navbar">
<a id="logo" href="/">
        <img src="images/bbLogo.png" class="navbar-brand d-inline-block align-to waves-effect" width="60" height="80" style="padding-top:15px" />   
        <!-- <strong class="navbar-brand" href="#">BB</strong>    -->
</a>

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
                    echo ('<li class="nav-item"><a class="nav-link" href="/posts"><strong>BLOG</strong></a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
                    break;
                case ($uri == '/posts'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT </strong></a></li>');
                    echo ('<li class="nav-item active"><a class="nav-link" href="/posts"><strong>BLOG</strong></a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
                    break;
                case ($uri == '/about'):    
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');
                    echo ('<li class="nav-item active"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/posts"><strong>BLOG</strong></a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
                    break;
                case ($uri == '/contact'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/posts"><strong>BLOG</strong></a></li>');
                    echo ('<li class="nav-item active"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
                    break;
                }
        ?>
   </ul> 
  </div>
</nav>
