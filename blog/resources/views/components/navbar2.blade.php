<div class="container container-fluid">
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">BabyBassinet</a>
    <ul class="navbar-nav ml-auto"> 
<?php     
    if (!Request::is('/'))
    {
        echo '<li class="nav-item"><a class="nav-link" href="/">Home</a></li>';
    }
    if (!Request::is('about'))
      {
        echo '<li class="nav-item"> <a class="nav-link" href="/about">About</a></li>'; 
      }    
    if (!Request::is('posts'))
    {
        echo '<li class="nav-item">  <a class="nav-link" href="/posts">Blog</a></li>';
    }
    if (!Request::is('contact'))
    {
        echo '<li class="nav-item"> <a class="nav-link" href="/contact">Contact</a></li>';
    }
?>
   </ul> 
  </nav>                             
</div>


