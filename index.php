<!DOCTYPE html>
<html>
	<head>
		<!-- METADATA. -->
		<meta charset="utf-8">  <meta charset="UTF-8">
		<meta name="description" content="Do you need an attractive and mobile friendly website? If so, contact me!">
		<meta name="keywords" content="html5, css3, scss, sass, javascript, jquery, bootstrap, web developer, front-end developer,
		front-end web developer, portfolio">
		<meta name="author" content="Brent Pfefferle">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- TITLE OF PAGE. -->
	  	<title>Front-End Web Developer Portfolio | Brent Pfefferle</title>
	  	<!-- BOOTSTRAP 4 CDN. -->
	  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	  	<!-- MAIN CSS. -->
	  	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	  	<link rel="stylesheet" type="text/css" href="css/main.css">
	  	<!-- GOOGLE FONT. -->
	  	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono" rel="stylesheet"> 
	  	<!-- FONT AWESOME CDN. -->
	  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	</head>

	<body>
		<!--  TOP HEADER BAR. -->
		<header class="top-header">
			<!-- BRAND LOGO. -->
			<a class="brand" href="index.html">BP</a>

			<!-- HAMBURGER ICON. -->
			<div>
				<img id="hamburger" class="hamburger" src="img/hamburger.png" alt="Mobile nav icon.">	
			</div>

			<!-- SOCIAL MEDIA ICONS. -->
			<div class="top-header-social-media">
				<a href="#"><i class="fab fa-github-square"></i></a>
				<a href="#"><i class="fab fa-linkedin"></i></a>
			</div>
		</header>

		<!-- NAVBAR. -->
		<nav class="top-nav">
			<ul class="nav-ul">
				<li><a class="active-link" href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#contact">Contact</a></li>
				<!-- MOBILE SOCIAL MEDIA ICONS. -->
				<a class="top-nav-social-media" href="#">Github <i class="fab fa-github-square"></i></a>
				<a class="top-nav-social-media" href="#">Linkedin <i class="fab fa-linkedin"></i></a>
			</ul>
		</nav>

		<!-- PARTICLE JS. -->
		<div id="particles-js"></div>

		<!-- CALL TO ACTION BUTTON. -->
		<div class="landing-page-card">
			<h1>Hi, my name is Brent and I do <span class="typed-js"></span>.</h1>
			<a href="#"><button>Let's Create Your Website</button></a>
		</div>

		<!-- DOWN ARROW.  -->
		<div class="circle-down">
			<a href="#about"><i class="fas fa-arrow-circle-down"></i></a>
		</div>

		<!-- MAIN CONTENT. -->
		<main class="main-content">
			<!-- ABOUT ME. -->
			<div class="container">
				<div class="row">
					<div class="col-12">
						<a name="about"></a>
							<h2 class="h2-main">About</h2>
								<h2 class="h2-main-black">My Interests</h2>

								<!-- ABOUT ME SLIDESHOW. -->
								<div class="bd-example">
								  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

								    <ol class="carousel-indicators">
								      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
								      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
								      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
								      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
								    </ol>

								    <div class="carousel-inner" role="listbox">
								      <div class="carousel-item active">
								        <img class="d-block w-100" data-src="holder.js/900x300?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [900x300]" src="img/carousel-computers.jpg" data-holder-rendered="true">
								        <div class="carousel-caption d-none d-md-block">
								          <h3>I Love Computers</h3>
								          <p>I am computer literate, I play games and develop cool stuff!</p>
								        </div>
								     </div>

								      <div class="carousel-item">
								        <img class="d-block w-100" data-src="holder.js/900x300?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [900x300]" src="img/carousel-degree.jpg" data-holder-rendered="true">
								        <div class="carousel-caption d-none d-md-block">
								          <h3>I Love Programming</h3>
								          <p>I have an associates in programming and I major in computer science!</p>
								        </div>
								      </div>

								      <div class="carousel-item">
								        <img class="d-block w-100" data-src="holder.js/900x300?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [900x300]" src="img/carousel-bearded-dragons.jpg" data-holder-rendered="true">
								        <div class="carousel-caption d-none d-md-block">
								          <h3>I Love Bearded Dragons</h3>
								          <p>I have my own community, <a href="https://www.facebook.com/BeardedDragonOwners/" target="_blank">@BeardedDragonOwners</a> on Facebook!</p>
								        </div>
								      </div>

								      <div class="carousel-item">
								        <img class="d-block w-100" data-src="holder.js/900x300?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [900x300]" src="img/carousel-desert.jpg" data-holder-rendered="true">
								        <div class="carousel-caption d-none d-md-block">
								          <h3>I Love the Desert</h3>
								          <p>I grew up in Yucca Valley, CA.</p>
								        </div>
								      </div>

								    </div>

								    <!-- SLIDESHOW LEFT ARROW. -->
								    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
								      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
								      <span class="sr-only">Previous</span>
								    </a>

								    <!-- SLIDESHOW RIGHT ARROW. -->
								    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
								      <span class="carousel-control-next-icon" aria-hidden="true"></span>
								      <span class="sr-only">Next</span>
								    </a>

								  </div>
								</div>
					</div>
				</div>
			</div>

			<!-- SERVICES. -->
			<div class="container">
				<a name="services"></a>
				<h2 class="h2-main">Services</h2>
				<div class="row">
					<div class="col-sm-12  col-md-6">
						<h2 class="h2-main-black">Web Development</h2>	
							<img class="img-center" src="img/web-development.jpg" alt="Web development.">
								<div class="services-paragraph col-container">
									<p class="col">I write out all the "code" from scratch while also using the latest frameworks 
									to bring your website to life. At the moment, I am comfortable with the following languages: HTML5, CSS3, 
									JavaScript, jQuery, Bootstrap 4, and SASS.</p>	
								</div>
					</div>
					<div class="col-sm-12  col-md-6">
						<h2 class="h2-main-black">Responsive Design</h2>	
							<img class="img-center" src="img/responsive-design.jpg" alt="Responsive web design.">
								<div class="services-paragraph">
									<p>When I develop your website, I make it my priority to develop for mobile first and 
									then I work my way towards desktop. In other words, I will make certain that your website 
									looks good and functions properly on all devices.</p>		
								</div>	
					</div>
				</div>
			</div>

			<!-- PORTFOLIO. -->
			<div class="container">
				<a name="portfolio"></a>
				<h2 class="h2-main">Portfolio</h2>
					<h2 class="h2-main-black">Website and Hybrid Apps</h2>
					<div class="row">
						<div class="col-sm-12 col-md-3">
							<a href="http://www.beardeddragonowners.com/" target="_blank"><img class="w-100" src="img/bearded-dragon-owners.jpg" alt="Bearded Dragon Owners website."></a>
						</div>
						<div class="col-sm-12 col-md-3">
							<a href="https://play.google.com/store/apps/details?id=com.syntaxlogic.brickdestroyer" target="_blank"><img class="w-100" src="img/brick-destroyer.jpg" alt="Brick Destroyer game."></a>
						</div>	
						<div class="col-sm-12 col-md-3">
							<a href="https://play.google.com/store/apps/details?id=simplestopwatch.syntaxlogic" target="_blank"><img class="w-100" src="img/simple-stopwatch.jpg" alt="Simple Stopwatch hybrid app."></a>
						</div>	
						<div class="col-sm-12 col-md-3">
							<a href="https://play.google.com/store/apps/details?id=com.syntaxlogic.namegenerator" target="_blank"><img class="w-100" src="img/name-generator.jpg" alt="Name Generator hybrid app."></a>
						</div>	
					</div>
			</div>

			<!-- CONTACT ME. -->
			<div class="container">
				<div class="row">
					<div class="col-12">
						<a name="contact"></a>
							<h2 class="h2-main">Contact</h2>
								<h2 class="h2-main-black">Ask a question or work together</h2>
									<form>
										<div class="form-group">
									    	<input type="text" class="form-control" id="frmNameInput" name="name" placeholder="Your full name">
									  	</div>
										<div class="form-group">
											<input type="text" class="form-control" id="frmEmailInput" name="mail" placeholder="Your email">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="frmSubjectInput" name="subject" placeholder="The subject">
										</div>
										<div class="form-group">
											<textarea class="form-control" id="frmMessageInput" rows="3" name="message" placeholder="Your message"></textarea>
										</div>
									</form>
									<!-- SEND MESSAGE BUTTON. -->
									<div class="btn-div">
										<button type="submit" class="btn-send-message" name="btnSubmit">Send Message</button>	
									</div>
					</div>
				</div>
			</div>

		</main>
		<!-- Bootstrap 4 required scripts (CDN). -->
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
		<!-- Particle JS. -->
		<script type="text/javascript" src="js/particles.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
		<!-- Typed.js -->
		<script type="text/javascript" src="js/typed.js"></script>
		<!-- Main JavaScript/jQuery. -->
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>
