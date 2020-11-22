<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <!-- <link href="{{ asset('css/main.scss') }}" rel="stylesheet"> -->
    <title>Babi Bassinet</title>

<style>
/* navbar stylings */


/* media stylings */
/* @media screen and (max-width: 1680px) {

body, input, select, textarea {
    font-size: 12pt;
}

}

@media screen and (max-width: 1280px) {

body, input, select, textarea {
    font-size: 12pt;
}

}

@media screen and (max-width: 980px) {

body, input, select, textarea {
    font-size: 12pt;
}

}

@media screen and (max-width: 736px) {

body, input, select, textarea {
    font-size: 12pt;
}

}

@media screen and (max-width: 480px) {

body, input, select, textarea {
    font-size: 12pt;
}

}

@media screen and (max-width: 736px) {

#menu > * {
    padding: 1.5em;
}

} */


</style>    
</head>

<style>

/* nav ul {
    @media (min-width: 600px){
    padding: 20px;
} */


header {
    background: eggshell;
}

header::after {
    content: '';
    display: table;
    clear: both;
}

.container {
    width: 80%;
    margin: 0 auto;
}

nav {
    float: right;
}

nav ul {
    margin : 0;
    padding: 0;
    list-style: none;
}

nav li {
    display: inline-block;
}
.logo {
    float: left;
}

/* body  */

body {
  background: #fffdfd;
  /* height: 100vh; */
  font-weight: 300;
}

</style>
<!--  needs separating from header content -->
<body>


<header>
<div class="container">
    <?php 
        // i like this image - I will create one similar using photo shop - and make a png
        $image = "https://images.unsplash.com/photo-1550439694-0cc5e82d1179?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80";

    ?>
    <img src="{{ $image }}" alt="logo image" height="40px" width="40px" class="logo">
    

<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>
</div>
</header>





<div>
    @yield ('content')
</div>
    <script src="{{ asset('js/main.js') }}"></script>
<footer>
  <div class="footer__inner">
    <div class="logo">BabiBassinet</div>
      <a href="">© Babi Bassinet</a>
      <div class="social">
        <a href="">Facebook</a>
        <a href="">Twitter</a>
        <a href="">LinkedIn</a>
        <a href="">Instagram</a>
      </div>
  </div>
</footer>
</body>
</html>