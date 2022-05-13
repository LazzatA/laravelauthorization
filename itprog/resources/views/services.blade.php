<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping cart </title>
	<link href="/css/moonbase.css" rel="stylesheet">

	 <link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section id="nav-bar">

        <nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#"><img src="images/logo.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls = "navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul
			 class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="/">HOME</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/services">SERVICES</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/aaaaaa/index.html #about-us">ABOUT US</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/aaaaaa/index.html #review">REVIEWS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href=" #footer">CONTACT</a>
				</li>
			</ul>
		</div>
    </nav>
</section>






	<h1 id="Shopping-cart"><a href="/dashboard" target="_blank"><i class=" fa fa-shopping-cart"></i></a></h1>
	<section id="cart">
		<div class="cart-item">
			<img src="images/unity.png" class="course">
			<p class="textt">Программа рассчитана на новичков, которые хотят войти в сферу построения игр. За программу вы изучите разработку как 2D, так и 3D игр при помощи движка Unity и языка C#. </p>
			<span></span>
			<button class="cart-btn">Add-cart</button>

		</div>
		<div class="cart-item">
			<img src="images/bak-end.png" class="course">
			<p class="textt">Программа Back-end разработчик рассчитана на новичков, которые хотят изучить язык PHP, а также построение веб сайтов на стороне сервера. За время программы вы изучите язык PHP, научитесь работать с его библиотеками.</p>
			<span></span>
			<button class="cart-btn">Add-cart</button>
		</div>
		<div class="cart-item">
			<img src="images/front-end.png" class="course">
			<p class="textt">Программа рассчитана на новичков, которые хотят изучить веб программирование и за короткий промежуток времени начать создавать веб сайты. За время программы вы узнаете множество новых понятий.</p>
			<span></span>
			<button class="cart-btn">Add-cart</button>
		</div>
		<div class="cart-item">
			<img src="images/fullstack.png" class="course">
			<p class="textt">Программа рассчитана на новичков, которые хотят изучить веб программирование и за короткий промежуток времени начать создавать веб сайты. За время программы вы научитесь верстать веб сайты, создавать серверные решения.</p>
			<span></span>
			<button class="cart-btn">Add-cart</button>
		</div>
	</section>
	<div class="select">

	</div>




	<section id="social-media">
	<div class="container text-center">
	<p>FIND US ON SOCIAL MEDIA</p>
	<div class="social-icons">
		<a href="#" target= "_blank" ><img src="images/facebook-icon.png"></a>
		<a href="#" ><img src="images/instagram-icon.png"></a>
		<a href="#" ><img src="images/twitter-icon.png"></a>
		<a href="#" ><img src="images/whatsapp-icon.png"></a>
		<a href="#" ><img src="images/snapchat-icon.png"></a>
	</div>
</div>
</section>

<section id="footer">
	<img src="images/wave2.png" class="footer-img">
	<div class="container">
		<div class="row">
			<div class="col-md-4 footer-box">
				<img src="images/demo-logo.png">
				<p>Subscribe Easy tutorials Youtube Channel to watch more videos on different subjects</p>
			</div>
			<div class="col-md-4 footer-box">
				<img src="images/demo-logo.png">
				<p><b>CONTACT US</b></p>
				<p><i class="fa fa-map-marker"></i>
				Preparatory center</p>
				<p><i class="fa fa-phone"></i>+7 747 412 61 28</p>
				<p><i class="fa fa-envelope-o"></i>anaokmd@gmail.coms</p>
			</div>
			<div class="col-md-4 footer-box">
				<p><b>SUBSCRIBE NEWSLETTER</b></p>
				<input id="demo" onkeypress="myFunction()" type="email" class="form-control" placeholder="Your Email">
				<a href="/aaaaaa/login.html">
					<button id="myBtn" type="button" class="btn btn-primary" onclick="audio.play();">Login/Sign up</button>
				</a>
			</div>
		</div>
		<hr>
		<p class="copyright"> Welcome to our course!</p>
	</div>
</section>

<script type="text/javascript">
					const audio = new Audio();
					audio.src = "audio/notification.wav"
				</script>
<script src="main/carusel.js"></script>
<script src="main/click.js"></script>
<script src="main/keypress.js"></script>
</body>
</html>
<script type="text/javascript" src="Servscript.js"></script>
