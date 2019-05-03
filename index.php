<!DOCTYPE html>
<html lang="fr">
		<head>
			<meta charset="utf-8" />
			<link rel="shortcut icon" href="images/logo_webagency.ico">
			<link rel="stylesheet" href="css/style.css" />
			<title> webagency </title>
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
			<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700,900"> 
			<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		</head>
	
		<body>
		
			<!-- Accueil -->
			
			<header id="accueil">
				<nav>
					<img src="images/logo.png" alt="Logo" id="logo" />
					<input type="checkbox" name="liste_menu" id="liste_menu_responsive" />
					<label for="liste_menu_responsive" id="icone_liste">
						<i class="fas fa-bars"></i>
					</label>
					<ul>
						<li> <a href="#accueil"> Accueil </a> </li>
						<li> <a href="#services"> Services </a> </li>
						<li> <a href="#portfolio"> Portfolio </a> </li>
						<li> <a href="#contact"> Contact  </a> </li>
					</ul>
				</nav>
				<div id="slider"> 
					<div id="slider_cadre">
					<label for="slide_gauche" id="fleche_gauche" class="fleche"> &lt; </label>
					<label for="slide_droit" id="fleche_droite" class="fleche"> &gt; </label>
						<input type="radio" name="bouton_slide" id="slide_gauche" />
						<input type="radio" name="bouton_slide" id="slide_droit" />
						<div id="slider_images">
							<img src="images/bg1.jpg" alt="bg1" id="bg1"/>
							<img src="images/bg2.jpg" alt="bg2" id="bg2" />
							<div id="fond_defilement">
								<div id="barre_defilement"> </div>
							</div>
						</div>
					</div>
					<div id="intro">
						<h1> <span id="webagency"> webagency </span> <span class="blanc"> : l'agence de tous vos projets ! </span> </h1>
						<p class="blanc"> Vous avez un projet web ? La WebAgency vous aide à le réaliser ! </p>
						<a href="#" id="info" class="blanc"> Plus d'infos </a>
					</div>
				</div>
			</header>
			
			<!-- Services -->
			
			<section id="services">
				<div id="services_haut">
					<h2> nos services </h2>
					<div id="barre_rond">
						<hr />
						<i class="fas fa-circle"></i>
					</div>
					<p> Nous mettons à disposition de nos clients nos meilleurs techniciens web afin de vous proposer les interfaces techniques et visuelles les plus souhaitables compte-tenu des tendances actuelles. </p>
				</div>
				<div id="services_centre">
					<img src="images/pc.png" alt="image_pc" id="pc"/>
					<div id="services_menu_droite">
						<div class="menu">
							<div class="sigles_menu">
								<i class="fas fa-chart-line"></i>
								<i class="fas fa-circle"></i>
							</div>
							<div class="texte_menu">
								<h3> UX design </h3>
								<p> Nous vous informons des tendances côté utilisateur et de quelle façon vous pourrez rendre votre site attractif. </p>
							</div>
						</div>
						<div class="menu">
							<div class="sigles_menu">
								<i class="fas fa-cubes"></i>
								<i class="fas fa-circle"></i>
							</div>
							<div class="texte_menu">
								<h3> UI design </h3>
								<p> Nos meilleurs concepteurs web travaillent sur l'ergonomie de vos pages web. </p>
							</div>
						</div>
						<div class="menu">
							<div class="sigles_menu">
								<i class="fas fa-chart-pie"></i>
								<i class="fas fa-circle"></i>
							</div>
							<div class="texte_menu">
								<h3> SEO </h3>
								<p> Nous vous proposons une expertise afin de vous faire état des statistiques des visites concernant votre page. </p>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<!-- Projets -->
			
			<section id="portfolio">
				<div id= "projets_haut">
					<h2> nos projets </h2>
					<div id="barre_rond2">
						<hr />
						<i class="fas fa-circle"></i>
					</div>
					<p> Vous trouverez dans cette section une liste des projets déjà réalisés avec nos partenaires. </p>
					<ul>
						<li> 
							<label for="All" id="All_Works" class="affichages"> All Works </label> 
							<span class="triangle_bleu_bas"> </span>
						</li>
						<li> 
							<label for="Creative_only" id="Creative" class="affichages"> Creative </label>
							<span class="triangle_bleu_bas"> </span>
						</li>
						<li>
							<label for="Corporate_only" id="Corporate" class="affichages"> Corporate </label>
							<span class="triangle_bleu_bas"> </span>
						</li>
						<li>
							<label for="Portfolio_only" id="Portfolio" class="affichages"> Portfolio </label>
							<span class="triangle_bleu_bas"> </span>
						</li>
					</ul>
				</div>
				<input type="radio" name="bouton_portfolio" id="All" />
				<input type="radio" name="bouton_portfolio" id="Creative_only" />
				<input type="radio" name="bouton_portfolio" id="Corporate_only" />
				<input type="radio" name="bouton_portfolio" id="Portfolio_only" />
				<div id="projet_images">
					<div class="Creative_images">
						<img src="portfolio/01.jpg" alt="lunettes">
						<div class="legende_images">
							<div class="texte_legende_images">
								<h4> L'homme-lunette </h4>
								<p> Un original homme-lunette </p>
							</div>
							<a href="portfolio/01.jpg"> <i class="far fa-eye"></i> </a>
						</div>
					</div>
					<div class="Creative_images">
						<img src="portfolio/02.jpg" alt="lapin bizarre">
						<div class="legende_images">
							<div class="texte_legende_images">
								<h4> Le lapin cubique </h4>
								<p> Oeuvre de Régonméciméron </p>
							</div>
							<a href="portfolio/02.jpg"> <i class="far fa-eye"></i> </a>
						</div>
					</div>
					<div class="Corporate_images">
						<img src="portfolio/03.jpg" alt="pompadour">
						<div class="legende_images">
							<div class="texte_legende_images">
								<h4> La marque Pompadour </h4>
								<p> Champagne ! </p>
							</div>
							<a href="portfolio/03.jpg"> <i class="far fa-eye"></i> </a>
						</div>
					</div>
					<div class="Portfolio_images">
						<img src="portfolio/04.jpg" alt="feuilles">
						<div class="legende_images">
							<div class="texte_legende_images">
								<h4> Les feuilles A4 </h4>
								<p> design des emballages </p>
							</div>
							<a href="portfolio/04.jpg"> <i class="far fa-eye"></i> </a>
						</div>
					</div>
					<div class="Corporate_images">
						<img src="portfolio/05.jpg" alt="shopping">
						<div class="legende_images">
							<div class="texte_legende_images">
								<h4> Sacs de shopping </h4>
								<p> Conception du logo mockup </p>
							</div>
							<a href="portfolio/05.jpg"> <i class="far fa-eye"></i> </a>
						</div>
					</div>
					<div class="Creative_images">
						<img src="portfolio/06.jpg" alt="Dali">
						<div class="legende_images">
							<div class="texte_legende_images">
								<h4> La vie sur Mars  </h4>
								<p> Oeuvre de Régonméciméron </p>
							</div>
							<a href="portfolio/06.jpg"> <i class="far fa-eye"></i> </a>
						</div>
					</div>
					<div class="Creative_images">
						<img src="portfolio/07.jpg" alt="fusée">
						<div class="legende_images">
							<div class="texte_legende_images">
								<h4> Une fusée à l'encre </h4>
								<p> Pour les besoins d'Ariane 29 </p>
							</div>
							<a href="portfolio/07.jpg"> <i class="far fa-eye"></i> </a>
						</div>
					</div>
					<div class="Portfolio_images">
						<img src="portfolio/08.jpg" alt="fournitures">
						<div class="legende_images">
							<div class="texte_legende_images">
								<h4> Be Theme </h4>
								<p> Réalisation du design Be Them </p>
							</div>
							<a href="portfolio/08.jpg"> <i class="far fa-eye"></i> </a>
						</div>
					</div>
					<div class="Corporate_images">
						<img src="portfolio/09.jpg" alt="burger">
						<div class="legende_images">
							<div class="texte_legende_images">
								<h4> Le burger de burger-king </h4>
								<p>  Réalisé en 1624 avant J-C </p>
							</div>
							<a href="portfolio/09.jpg"> <i class="far fa-eye"></i> </a>
						</div>
					</div>
				</div>
			</section>
			
			<!-- contact -->
			
			<footer id="contact">
				<iframe
				src="https://www.google.fr/maps/embed/v1/place?key=AIzaSyCrywN2x7Prk5UWF_bEYUYzpWCnu0H6Jl4&q=25+Rue+d'Hauteville,+75010+Paris" >						
				</iframe>
				<div id="fond_bleu_transparence">	
				</div>	
				<form method="post" action="traitement.php">
					<a href="https://www.google.com/maps/place/25+Rue+d'Hauteville,+75010+Paris/@48.8730518,2.3476369,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66e145ccb3091:0x9495beee8c96ec27!8m2!3d48.8730518!4d2.3498256" title="plan d'accès" target="_blank"> <i class="fas fa-map-marker-alt"> </i> </a>
					<h2> Contact Info </h2>
					<p id="adresse_formulaire"> 
						<strong> WebAgency SAS </strong> <br /> 
						<span id="adresse_agence"> 25 Rue d'Hauteville 75010 PARIS <br /> 
						<span id="tel_agence"> Tel: </span> 01 02 03 04 05 </span>
					</p>	
					<p>
						<input type="text" name="name" placeholder="Name" class="ligne_formulaire" required />
					</p>
					<p>
						<input type="text" name="email" placeholder="Email" class="ligne_formulaire" required />
					</p>
					<p>
							
						<input type="text" name="subject" placeholder="Subject" class="ligne_formulaire" required />
					</p>
					<p>
						<textarea name="message" placeholder="Message" id="message_formulaire" required></textarea>
					</p>
					<p>
						<input type="submit" value="Send Message" id="envoyez" />
					</p>
				</form>		
			</footer>
		</body>
</html>