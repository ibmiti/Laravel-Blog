<style>
    .navbar.navbar-1 .navbar-toggler-icon {
background-image: url('https://mdbootstrap.com/img/svg/hamburger6.svg?color=000');
}
.navbar.navbar-2 .navbar-toggler-icon {
background-image: url('https://mdbootstrap.com/img/svg/hamburger2.svg?color=fff');
}
.navbar.navbar-3 .navbar-toggler-icon {
background-image: url('https://mdbootstrap.com/img/svg/hamburger1.svg?color=6a1b9a');
}
.navbar.navbar-4 .navbar-toggler-icon {
background-image: url('https://mdbootstrap.com/img/svg/hamburger7.svg?color=BFE100');
}
.navbar.navbar-5 .navbar-toggler-icon {
background-image: url('https://mdbootstrap.com/img/svg/hamburger5.svg?color=f3e5f5');
}
.navbar.navbar-6 .navbar-toggler-icon {
background-image: url('https://mdbootstrap.com/img/svg/hamburger8.svg?color=E3005C');
}
.navbar.navbar-7 .navbar-toggler-icon {
background-image: url('https://mdbootstrap.com/img/svg/hamburger9.svg?color=FF2C00');
}
.navbar.navbar-8 .navbar-toggler-icon {
background-image: url('https://mdbootstrap.com/img/svg/hamburger4.svg?color=1729B0');
}
.navbar.navbar-9 .navbar-toggler-icon {
background-image: url('https://mdbootstrap.com/img/svg/hamburger3.svg?color=00FBD8');
}

</style>




<!--Navbar-->

<nav class="navbar navbar-light navbar-4 white">
<a id="logo" href="/">
        <img src="images/bbLogo.png" class="navbar-brand d-inline-block align-to waves-effect" width="60" height="60" style="padding-top:15px"/>   
        <strong class="navbar-brand" href="#">BABY BASSINET</strong>   
</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
    aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

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
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->

<!--Navbar-->
