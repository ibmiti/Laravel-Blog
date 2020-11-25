<nav class="navbar navbar-light navbar white">
<a id="logo" href="/">
        <img src="images/bbLogo.png" class="navbar-brand d-inline-block align-to waves-effect" width="60" height="80" style="padding-top:15px"/>   
        <strong class="navbar-brand" href="#">BABY BASSINET</strong>   
</a>

  <!-- Collapse button -->
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

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent15">

    <!-- Links -->
    <ul class="navbar-nav ml-auto"> 
        <?php     
            $uri = Request::getRequestUri();
            switch ($uri) {
                case ($uri == '/'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/about">ABOUT</a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/posts">BLOG</a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/contact">CONTACT</a></li>');
                    break;
                case ($uri == '/posts'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/">HOME</a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/about">ABOUT</a></li>');
                    echo ('<li class="nav-item active"><a class="nav-link" href="/posts">BLOG</a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/contact">CONTACT</a></li>');
                    break;
                case ($uri == '/about'):    
                    echo ('<li class="nav-item"><a class="nav-link" href="/">HOME</a></li>');
                    echo ('<li class="nav-item active"><a class="nav-link" href="/about">ABOUT</a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/posts">BLOG</a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/contact">CONTACT</a></li>');
                    break;
                case ($uri == '/contact'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/">HOME</a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/about">ABOUT</a></li>');
                    echo ('<li class="nav-item"><a class="nav-link" href="/posts">BLOG</a></li>');
                    echo ('<li class="nav-item active"><a class="nav-link" href="/contact">CONTACT</a></li>');
                    break;
                }
        ?>
   </ul> 
  </div>
</nav>
