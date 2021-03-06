<html>
<head>
	<title> Smart School</title>
    <link rel="icon" href="favicon.ico">
	<link href="/css/moonbase.css" rel="stylesheet">
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
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="/">HOME</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/services">SERVICES</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about-us">ABOUT US</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#review">REVIEWS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/login">LOGIN</a>
				</li>
			</ul>
		</div>
		<div>
        <span id="personID"></span>
        <a id="log" class="login" title="Log in" class="Iclink" href="login.html"><i id="logIn" class="fas fa-user"></i></a>
        <a id="out" class="login" title="Log in" class="Iclink" href="#"  onclick="removeCurrentLocalStore()" style="display: none"><img id="logOut" class="login"
             style="width: 28px"></a>
      </div>
    </nav>
</section>

<section id="banner">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<p class="promo-title">Best preparatory center</p>
			<p> Subscribe Easy tutorials Youtube Channel to watch more videos on different subjects</p>
			<a href="https://www.youtube.com/watch?v=J_M2KaVdQdI"><img src="images/play.png" class="play-btn" >Watch know!</a>
		</div>
		<div class="col-md-6" text-center>
			<img src="images/home2.png" class="img-fluid">
		</div>
	</div>
</div>
<img src="images/wave1.png" class="bottom-img">
</section>

<section id="services">
	<div class="container text-center">
	<h1 class="title">OUR SERVICES</h1>
	<div class="row text-center">
		<div class= "col-md-4" services>
			<img src="images/service1.png" class="service-img">
			<h4>Efficiency</h4>
			<p>Education in small groups, the student is given increased attention and there is constant monitoring of the level of income.</p>
		</div>
		<div class= "col-md-4" services>
			<img src="images/service2.png" class="service-img">
			<h4>Unique programs</h4>
			<p>In our center there are author's developments of the teachers themselves, as well as modern technologies and forms of education.</p>
		</div><div class= "col-md-4" services>
			<img src="images/service3.png" class="service-img">
			<h4>Experienced teachers</h4>
			<p>Professional teachers become real friends for their wards, they show a special activity that is interesting and informative.</p>
		</div>
	</div>
	<a href="/services"><button type="button" class="btn btn-primary" onclick="audio.play();">All services </button></a>
	</div>
</section>

<section id="about-us">
	<div class="container">
		<h1 class="title text-center">WHY CHOOSE US?</h1>
		<div class="row">
		<div class="col-md-6" about-us>
			<p class="about-title">Why we are different?</p>
			<ul id="test">
				<li>Believe in doing business with honesty </li>
				<li>Understand our clients goal </li>
				<li>We create a winning content strategy </li>
				<li>We guarantee the highest quality </li>
				<li>Believe in doing business with honesty </li>
				<li>We protect your child </li>
			</ul>
		</div>

		<div class="col-md-6">
			<img src="images/network.png" class="img-fluid">
		</div>
	</div>
	</div>
</section>

<section id="review">
	<div class="container">
		<h1 class="title text-center">WHAT CLIENTS SAY?</h1>
		<div class="row offcet-1">
			<div class="col-md-5 review">
				<p>The teachers of the center are professional practitioners who have not only theoretical, but most importantly, excellent practical knowledge.</p>
				<img src="images/user1.jpg">
				<p class="user-details"><b>Olga</b><br>Parent</p>
			</div>
			<div class="col-md-5 review">
				<p>A high-class team of teachers who love their job and pass on the craving for the subject to the students.</p>
				<img src="images/user2.jpg">
				<p class="user-details"><b><br><br><br>Arman</b><br>Professor</p>
			</div>
		</div>
	</div>
</section>

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
				<input id="demo" type="email" class="form-control" placeholder="Your Email" onkeypress="myFunction()">


				<a href="login.html">
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
<script src="main/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*='#']');
</script>
<script src="main/tests.js"></script>
<script src="main/click.js"></script>
<script src="main/keypress.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</body>
</html>
