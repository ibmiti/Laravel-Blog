<!-- <div class="container"> -->
  <nav class="container container-fluid navbar sticky-top navbar-expand-lg justify-content-between navbar-light"  style="background-color: white;" role="navigation"> 
  <!-- <nav class="container container-fluid navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar justify-content-between" role="navigation">  -->
  
    <a id="logo" href="/">
        <img src="images/bbLogo.png" class="navbar-brand d-inline-block align-to waves-effect heartBeat" width="60" height="60" style="padding-top:15px"/>   
        <span style="color: #89cff0">BABY</span>BASSINET          
    </a>
    <button id="hamburger" class="navbar-toggler bg-light" 
            type="button" 
            data-toggle="collapse" 
            data-target="#navbarNavDropdown01"
            aria-controls="navbarNavDropdown01"
            aria-expanded="false" 
            aria-label="Toggle navigation"
            style="outline-color:pink"> 
        <span style="" class="navbar-toggler-icon"></span> 
    </button> 

    <div class="collapse navbar-collapse m-2 p-4"  id="navbarNavDropdown01">
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
  </nav>                             
<!-- </div> -->
