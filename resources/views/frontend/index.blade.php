<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title> Sya Tour</title>
	<link rel="icon" href="./img/j.jpg" type="image/jpg">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--CSS============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<div class="protfolio-wrap">

		<!-- Start Header Area -->
		<header class="default-header">
			<nav class="navbar navbar-expand-lg  navbar-light">
				<div class="container">
					<a class="navbar-brand" href="index.html">
						<img src="image/logo1.png" alt="" style="width: 40px;">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="text-white lnr lnr-menu"></span>
					</button>

					<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<!-- <li><a href="#">Accueil</a></li> -->
							<li><a href="#portfolio">Places</a></li>
							<li><a href="#service">Services</a></li>
							<li><a href="reservation">Reservation</a></li>
							<li><a href="{{url('contact')}}">Contact</a></li>
							<li><a href="{{route('chatify')}}">Chat</a></li>
							@guest
							<li>
								<a href="/login">
									<button type="submit" class="btn btn-outline-primary"><span class="text-white">Se connecter</span></button>
								</a>
							</li>
							@endguest
							@auth
							<li>
								<a href="/lo">
									{{ Auth::user()->nom }}
							</li>
							<li>
								<a href="/deconnection">
									<button class="btn btn-outline-primary"><span class="text-white">Se deconnecter</span></button>
								</a>
							</li>
							@endauth
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- End Header Area -->
		<!-- start banner Area -->
		<section class="banner-area relative" id="home">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner-content col-lg-10">
						<h5 class="text-uppercase">pour des moments inoubliables</h5><br><br>
						<h1>
							ALLEZ A LA
							DECOUVERTE DE SYA!
						</h1>
						<!-- <a href="#" class="primary-btn text-uppercase">Explorez maintenant</a> -->
					</div>
				</div>
			</div>
		</section>
		<!-- End banner Area -->

		<!-- Start portfolio-area Area -->
		<section class="portfolio-area section-gap" id="portfolio">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content col-lg-10">

						<div class="row"> 
						<!-- <h1>HISTORIQUE ET LIEUX A VISITER</h1> -->
							<img class="col-6" src="{{asset('/image/AC.jpeg')}}" alt="" style="right: 105px;">
							 <span class="col-6">
								<h1>HISTORIQUE  DE LA VILLE BOBO</h1><br>
								<h5>Bobo-Dioulasso, deuxième ville et pôle économique du Burkina Faso, 
									est aussi un centre culturel dynamique. Avec plus de 1,2 million d'habitants 
									en 2017, elle est la capitale des Hauts-Bassins, célèbre pour la Semaine nationale de 
									la culture. La ville est un vivier artistique, célébrant l'artisanat, la musique, et les 
									cérémonies traditionnelles, attirant des artistes du Burkina Faso et de l'Afrique de l'Ouest. 
									Malgré son activité économique, Bobo-Dioulasso offre une atmosphère paisible, 
									séduisant les voyageurs plus que Ouagadougou. Les Bobolais accueillants partagent
									 les charmes de leur ville, connue pour sa vie nocturne animée. La ville est une base 
									 idéale pour explorer la région ouest du Burkina Faso, avec des sites naturels à découvrir</h5>
							</span> 
						</div>
					</div>
				</div>

				<div class="filters">
					<ul>
						<h1 class="mb-10">LIEUX A VISITER</h1><br>

						<!-- <li class="active" data-filter="*">ALL</li> -->
						<!-- <li data-filter=".corporate">North</li>
				        <li data-filter=".personal">Central</li>
				        <li data-filter=".agency">North-Eastern</li>
				        <li data-filter=".portal">South</li> -->
					</ul>
				</div>

				<div class="filters-content">
					<div class="row grid">
						<div class="single-portfolio col-sm-4 all corporate">
							<div class="item">
								<img src="image/bobo.jpg" alt="Work 1">
								<div class="p-inner">
									<h4>MAIRIE CENTRALE </h4>
									<div class="cat">situé au plein coeur de la ville <br>
										elle est la plus belle mairie du BURKINA <br>
										Localisation:secteur 01 </div>
								</div>
							</div>
						</div>
						<div class="single-portfolio col-sm-4 all corporate">
							<div class="item">
								<img src="image/Catédrale.jpg" alt="Work 1">
								<div class="p-inner">
									<h4>CATHEDRALE NOTRE DAME DE LOURDE DE BOBO</h4>
									<div class="cat">Punjab</div>
								</div>
							</div>
						</div>
						<div class="single-portfolio col-sm-4 all corporate">
							<div class="item">
								<img src="image/Mosque.jpg" alt="Work 1">
								<div class="p-inner">
									<h4>LA VIEILLE MOSQUEE DE DIOULASSOBA</h4>
									<div class="cat">Punjab</div>
								</div>
							</div>
						</div>
					</div>
					<!-- deuxieme section d'image -->


					<div class="row grid">
						<div class="single-portfolio col-sm-4 all corporate">
							<div class="item">
								<img src="image/musee.png" alt="Work 1">
								<div class="p-inner">
									<h4>MUSEE COMMUNAL</h4>
									<div class="cat">Punjab</div>
								</div>
							</div>
						</div>
						<div class="single-portfolio col-sm-4 all corporate">
							<div class="item">
								<img src="image/silure.jpeg" alt="Work 1">
								<div class="p-inner">
									<h4>SILURE SACRE</h4>
									<div class="cat">les silures sacrés de bobo sont important pour les bobo,aussi il protege la villa</div>
								</div>
							</div>
						</div>
						<div class="single-portfolio col-sm-4 all corporate">
							<div class="item">
								<img src="image/masques.jpeg" alt="Work 1">
								<div class="p-inner">
									<h4>LES MASQUES</h4>
									<div class="cat">Punjab</div>
								</div>
							</div>
						</div>
					</div>



					<div class="row grid">
						<div class="single-portfolio col-sm-4 all corporate">
							<div class="item">
								<img src="image/hypopotame).jpeg" alt="Work 1">
								<div class="p-inner">
									<h4>LA MARRE D'HYPOPOTAMA DE BANA</h4>
									<div class="cat">Punjab</div>
								</div>
							</div>
						</div>
						<div class="single-portfolio col-sm-4 all corporate">
							<div class="item">
								<img src="image/pot.jpg" alt="Work 1">
								<div class="p-inner">
									<h4>La POTERIE</h4>
									<div class="cat">Punjab</div>
								</div>
							</div>
						</div>
						<div class="single-portfolio col-sm-4 all corporate">
							<div class="item">
								<img src="image/Guimbi.jpg" alt="Work 1">
								<div class="p-inner">
									<h4>MAUSOLE GUIMBI OUATTARA</h4>
									<div class="cat">Punjab</div>
								</div>
							</div>
						</div>
					</div>



				</div>
			</div>





	</div>
	</section>
	<!-- End portfolio-area Area -->


	<!-- Start service Area -->
	<section class="service-area section-gap relative" id="service">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10 text-white">Nos services</h1>
						<p>Nous mettons a votre disposition des hotels et des restaurants</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End service Area -->

	<!-- Start services Area -->
	<section class="services-area pb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-service">
						<img class="img-fluid" src="image/hotel2.jpg" alt="">
						<h4>hotel</h4>
						<p>
							passez d'agreable sejour.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-service">
						<img class="img-fluid" src="image/hotel1.jpg" alt="">
						<h4>Restaurant</h4>
						<p>
							Reagalez vous après une visite
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-service">
						<img class="img-fluid" src="image/cinema.jpg" alt="">
						<h4>Boite de nuit</h4>
						<p>
							se divertir un peu
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End services Area -->

	<!-- Start review Area -->
	<!-- <section class="review-area section-gap" id="testimonial">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="menu-content pb-60 col-lg-10">
								<div class="title text-center">
									<h1 class="mb-10">How Our Customers felt for Us</h1>
									<p>Who are in extreme love with friendly &amp; inviting people</p>
								</div>
							</div>
						</div>							
						<div class="row">
							<div class="col-lg-6">
								<div class="single-review">
									<img src="img/c1.png" alt="">
									<div class="title d-flex flex-row">
										<a href="#"><h4>Fannie Rowe</h4></a>									
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									</div>
									<p>
										It was a life Experience to visit such a beautiful cultural country.
									</p>
								</div>	
								<div class="single-review">
									<img src="img/c3.png" alt="">
									<div class="title d-flex flex-row">
										<a href="#"><h4>Lillie Summers</h4></a>									
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									</div>
									<p>
										Just one Word - Incredible!
									</p>
								</div>															
							</div>
							<div class="col-lg-6">
								<div class="single-review">
									<img src="img/c2.png" alt="">
									<div class="title d-flex flex-row">
										<a href="#"><h4>Bob Marley</h4></a>									
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-starchecked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									</div>
									<p>
										Damm! I'm thinking of staying here in this World.
									</p>
								</div>	
								<div class="single-review">
									<img src="img/c4.png" alt="">
									<div class="title d-flex flex-row">
										<a href="#"><h4>Jackie Chan</h4></a>									
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									</div>
									<p>
										Now, I am big fan of Power Yoga. Thanks for such a gift to this world.
									</p>
								</div>															
							</div>							
						</div>
                    </div>	
				</section> -->
	<!-- End review Area -->


	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-footer-widget">

						<h6>A propos <img src="image/logo1.png" alt="" style="width: 40px;">
						</h6>
						<p>
							Notre plateforme offre un guide touristique mobile complet de Bobo-Dioulasso. Nous avons rassemblé les informations essentielles sur les attractions, les restaurants, les hébergements et bien plus encore, le tout dans une application facile à utiliser.

						</p>
						<p class="footer-text">
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This Website is created with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://github.com/mrjatinchauhan" target="_blank">Jatin Chauhan</a>
						</p>
					</div>
				</div>
				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" action="" method="get" class="form-inline">
								<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Email Here '" required="" type="email">
								<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>

								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-snapchat"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
	</div>
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>