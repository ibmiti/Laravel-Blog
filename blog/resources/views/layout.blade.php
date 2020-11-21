<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link href="{{ asset('css/main.scss') }}" rel="stylesheet">
    <title>Babi Bassinet</title>
</head>
<body>
<header id="header">
	<h1><a href="index.html">Babi Bassinet</a></h1>
	<nav id="nav" class="links">
		<ul >
			<li><a href="#">Lorem</a></li>
			<li><a href="#">Ipsum</a></li>
			<li><a href="#">Feugiat</a></li>
			<li><a href="#">Tempus</a></li>
			<li><a href="#">Adipiscing</a></li>
		</ul>
	</nav>
	</header>
    @yield ('content')
    
    <script src="{{ asset('js/main.js') }}"></script>
<footer>
  <div class="footer__inner">
    <div class="logo">BabiBassinet</div>
    <nav>
      <a href="">© Babi Bassinet</a>
      <div class="social">
        <a href="">Facebook</a>
        <a href="">Twitter</a>
        <a href="">LinkedIn</a>
        <a href="">Instagram</a>
      </div>
    </nav>
  </div>
</footer>
</body>
</html>