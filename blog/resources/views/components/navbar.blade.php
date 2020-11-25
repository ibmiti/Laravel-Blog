<style>
    @media screen and (max-width: 767px){
 
        #logo {
            width : 300px;
            height :250px;
        }
	}   
</style>
<div class="container container-fluid">
<!-- find new color -->
  <!-- <nav class="navbar sticky-top navbar-expand-lg justify-content-between navbar-light bg-light" role="navigation">  -->
  <nav class="navbar sticky-top navbar-expand-lg justify-content-between navbar-light"  style="background-color: #EFFDFA;" role="navigation"> 
    <a id="logo" class="navbar-brand" href="/">

    <img  id="logo" src="images/logo_babybassinet.png" class="d-inline-block align-to"/> 
                         
    </a>


    <button class="navbar-toggler bg-light" 
            type="button" 
            data-toggle="collapse" 
            data-target="#navbarNavDropdown01"
            aria-controls="navbarNavDropdown01"
            aria-expanded="false" 
            aria-label="Toggle navigation"
            style="outline-color:pink"> 
        <span class="navbar-toggler-icon"></span> 
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
</div>
