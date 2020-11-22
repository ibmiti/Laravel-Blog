<style>

@import url('https://fonts.googleapis.com/css2?family=Pangolin&family=Raleway:wght@600&family=Roboto&display=swap');


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
    margin-top: 15px;
}

nav ul {
    margin : 0;
    padding: 0;
    list-style: none;
}

nav li {
    display: inline-block;
    /* margin: 0 35px; */
    margin-left: 70px;
    padding-top: 25px;
}

nav a {
    text-decoration: none;
    color: black;
}

footer a {
    text-decoration: none;
    color: black;
}

.logo {
    float: left;
    border-radius: 25px 25px 25px 25px;
    padding-top: 25px;
}

#bb {
    display: inline-block;
    margin-left: 10px;
    font-weight: 800;
    padding-top: 25px;
}

/* body  */

body {
  background: #fffdfd;
  /* height: 100vh; */
  font-weight: 600;
  font-family: 'Raleway', 'Roboto';
}

</style>
<header>
<div class="container">
    <?php 
        // i like this image - I will create one similar using photo shop - and make a png
        $image = "https://images.unsplash.com/photo-1515871204537-49a5fe66a31f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1574&q=80";

    ?>
    <img src="{{ $image }}" alt="logo image" height="60px" width="60px" class="logo">
    <h3 id='bb'>BB</h3>
    

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
