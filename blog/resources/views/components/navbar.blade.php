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
    display: flex;
    flex-wrap: wrap;
    /* align-items : center; */
    margin-top: 15px;
    justify-content: space-between;
    padding-top: 9px;

}

nav ul {
    /* display: flex;  I may or may not keep this nav styling  */
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
    color: #F4C2C2;

    transition: all ease-in-out 300ms;
}

nav a:before {
    content: '';
    display: block;
    height: 5px;
    
    background-color: #B9DEED;
    top: 0;
    width: 0%;
    position: absolute;

    transition: all ease-in-out 300ms;
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

#b {
    color : #B9DEED;
}

.hamburger-menu {
    background-color: transparent;
    display: none;
    border: 0;
    color: #B9DEED;
    cursor: pointer;
    font-size: 20px;
}

.hamburger-menu:focus {
    outline:none;
    color: #F4C2C2;

    transition: all ease-in-out 230ms;
}

@media screen and (max-width: 767px){
        
        /* nav ul li {
            display: none;
            width: 100%;
        } */

        .nav-ul {
            display: none;
            flex-direction: column;
            width: 100%;
        }

        /* .nav-ul {
            display: none;
            width: 100%;
        } */

        .nav-ul.show {
            display: flex;
        }

        .hamburger-menu {
            display: inline-block;
            padding-top: 20px;
        }

		.btn {
			width: 100%;
        }
        
        #bb {
            width: 80px;
        }

		nav ul li a {
			padding: 10px;
		} 

		header {
			/* background-image: url('') */
			padding-bottom: 0;
		} 
	}


</style>

<header>
    <div class="container">
        <h3 id='bb'><span id='b'>BABY</span>BASSINET</h3>
    <nav >
        <button class="hamburger-menu btn" id="hamburger-menu">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-ul" id="nav-ul" >
            <?php
                if (!Request::is('/'))
                {
                    echo '<li><a href="/">Home</a></li>';
                }
                // this nav will go to the about section of this web page - 
                // there will be a button below within the about section that links to the actual about page 
                if (!Request::is('about'))
                {
                    echo '<li><a href="/about">About</a></li>'; 
                }    
                if (!Request::is('posts'))
                {
                    echo '<li><a href="/posts">Blog</a></li>';
                }
                if (!Request::is('contact'))
                {
                    echo '<li><a href="/contact">Contact</a></li>';
                }
            ?>
        </ul>
    </nav>
    </div>
</header>
<script type="text/javascript">
    
    const hamburger_menu = document.getElementById('hamburger-menu');
    const navUL = document.getElementById('nav-ul');

    hamburger_menu.addEventListener('click', () => {
        navUL.classList.toggle('show');
        console.log('fire');
    });

</script>

