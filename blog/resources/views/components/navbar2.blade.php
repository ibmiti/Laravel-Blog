<div class="container container-fluid">
<!-- find new color -->
  <!-- <nav class="navbar sticky-top navbar-expand-lg justify-content-between navbar-light bg-light" role="navigation">  -->
  <nav class="navbar sticky-top navbar-expand-lg justify-content-between navbar-light "  style="background-color: #EFFDFA;" role="navigation"> 
    <a class="navbar-brand" href="/">
    <!-- <img src="https://www.geeksforgeeks.org/wp-content/uploads/gfg_transparent_white_small.png" 
                         width="30" height="30"
                         class="d-inline-block align-top" alt="">    will use own image -->
    <span style="color:blue;">BABY</span>BASSINET
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
    <ul class="navbar-nav text-right mr-4"> 
        <?php     


            $uris = [];
            $uri = Request::getRequestUri();
            // if ($uri ==) {

            // }
            
            switch ($uri) {
                case ($uri === '/'):


                    break;
                case 20:
                    echo "Age is 20";
                    break;
                case 21:
                    echo "Age is 21";
                    break;

            dd($uri);


            // if ($uri === '/' && )
            // {
            //        echo ('<li class="nav-item active">
            //             <a class="nav-link" href="/">HOME</a>
            //         </li>');
            // } 
            
            if (!Request::is('about'))
            {
                   echo ('<li class="nav-item active">
                        <a class="nav-link" href="/about">ABOUT</a>
                    </li>');
            }   

            if (Request::is('posts'))
            {
                echo ('<li class="nav-item active">
                        <a class="nav-link" href="/posts">BLOG</a>
                    </li>');
            }
            if (Request::is('contact'))
            {
                echo ('<li class="nav-item active">
                        <a class="nav-link" href="/contact">CONTACT</a>
                    </li>');
            }
        ?>
   </ul> 
  </nav>                             
</div>
