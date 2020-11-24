

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
    });

    // window.addEventListener('scroll', () => {
    //     console.log('ello');
    //     const header = document.getElementsByTagName('Header');
    //     header.classList.toggle("sticky", window.scrollY > 0);
    // });

</script>

