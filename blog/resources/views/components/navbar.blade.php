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
    padding-top: 23px;

    position: relative;
}

nav a {
    text-decoration: none;
    color: black;
    text-transform: uppercase;
    font-size: 14px;
}

nav a:hover {
    color: teal;
}

nav a:before {
    content: '';
    display: block;
    height: 5px;
    
    background-color: #444;
    top: 0;
    width: 0%;
    position: absolute;

    transition: all ease-in-out 250ms;
}

nav a:hover::before {
    width : 100%;
}

.logo {
    float: left;
    border-radius: 25px 25px 25px 25px;
    padding: 25px 0;
    /* padding-top: 25px; */
}

#bb {
    display: inline-block;
    margin-left: 10px;
    font-weight: 800;
    padding: 25px 0;
    /* padding-top: 25px; */
}



</style>
<header>
<div class="container">
    
    <h3 id='bb'>BABYBASSINET</h3>
    

 <nav>
    <ul>
    <?php
        if (!Request::is('/'))
        {
            echo '<li><a href="">Home</a></li>';
        }
        if (!Request::is('about'))
        {
            echo '<li><a href="/about">About</a></li>'; 
        }    
        if (!Request::is('blog'))
        {
            echo '<li><a href="">Blog</a></li>';
        }
        if (!Request::is('contact'))
        {
            echo '<li><a href="">Contact</a></li>';
        }
    ?>
    </ul>
 </nav>
</div>

</header>
