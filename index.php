<?php 
$sent = 0;
if(isset($_POST['email'])){


	$url = 'https://sendgrid.com/';
	$user = '';
	$pass = ''; 
	 
	$params = array(
			'api_user'  => $user,
			'api_key'   => $pass,
			'to'        => 'coderfriends@gmail.com',
			'subject'   => 'Contacto desde el sitio WEB de '. $_POST['name'],
			'html'      => $_POST['message'],
			'text'      => $_POST['message'],
			'from'      =>  $_POST['email'],
		);
	//  print_r($params);
	 
	$request =  $url.'api/mail.send.json';
	 
	// Generate curl request
	$session = curl_init($request);
	// Tell curl to use HTTP POST
	curl_setopt ($session, CURLOPT_POST, true);
	// Tell curl that this is the body of the POST
	curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
	// Tell curl not to return headers, but do return the response
	curl_setopt($session, CURLOPT_HEADER, false);
	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
	 
	// obtain response
	$response = curl_exec($session);
	curl_close($session);
	 
	// print everything out
	// print_r($response);
	$sent = 1;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>CoderFriends | Desarrollo de Software y Mobile Apps</title>
	<meta name="description" content="Especialistas en desarrollo de software, Diseño, aplicaciones móviles y todo lo relacionado con TI"/>
	<meta property="og:locale" content="es_MX" />
	<meta property="og:locale:alternate" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content=" Desarrollo de Software y Mobile Apps - CoderFriends" />
	<meta property="og:description" content="Especialistas en desarrollo de software, Diseño, aplicaciones móviles y todo lo relacionado con TI" />
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/logos/favicon.ico" />	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="./img/logos/logoog.png">
	<meta property="og:type" content="article" />
	<meta property="og:locale" content="es_ES" />
	<meta property="og:locale:alternate" content="en_US" />

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Themify icons -->
	<link rel="stylesheet" type="text/css" href="css/themify-icons.css">
	
	<!-- Font-Awesome -->
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">  

	<!-- Icomoon -->
	<link rel="stylesheet" type="text/css" href="css/icomoon.css"> 	

	<!-- Plugins -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">	

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.css"> 

	<!-- Swiper Slider Styles -->
	<link rel="stylesheet" href="css/slider.css">        

	<!-- Navbar Styles -->
	<link rel="stylesheet" type="text/css" href="css/navigation-3.css" id="navigation_menu">
	
	<!-- Main Styles -->
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/styles-3.css" id="main_styles">

	<!-- Fonts Google -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

</head>
<body>



<!-- Preloader Start-->
<div id="preloader">
	<div class="row loader">
		<div class="loader-icon"></div>
	</div>
</div>
<!-- Preloader End -->



<!-- Navbar START -->
<header id="nav-transparent">
	<nav id="navigation4" class="container navigation">
		<div class="nav-header">
			<a class="nav-brand" href="index.php">
				<img src="img/logos/logo-light.png" alt="logo" id="light_logo" style="height: 50px;">
				<img src="img/logos/logo.png" alt="logo" id="main_logo" style="height: 50px;">
			</a>
			<div class="nav-toggle"></div>
		</div>
		<div class="nav-menus-wrapper">
			<ul class="nav-menu align-to-right">
				<li><a href="./">Inicio</a></li>
				<li><a data-scroll href="#servicios">Servicios</a></li>								
				<li><a data-scroll href="#portafolio">Portafolio</a></li>
				<li><a data-scroll href="#nosotros">Nosotros</a></li>								
				<li><a data-scroll href="#tuproyecto">Tu Proyecto</a></li>								
				<li><a data-scroll href="#tuproyecto">Contáctenos</a></li>								
			</ul>
		</div>					
	</nav>	
</header>	
<!-- Navbar END -->
  


<!-- Slider START -->
<div class="swiper-main-slider-fade swiper-container full-height">
	<div class="swiper-wrapper">
		<!-- Slide 1 Start -->
		<div class="swiper-slide black-overlay-50" style="background-image:url('./img/content/bgs/slide1.png');">
			<div class="container">
				<div class="slider-content center-holder mt-60-md">
					<h4 class="extra-light uppercase animated fadeInDown">Logra Realidad tu Idea</h4>
						<h2 class="extra-light uppercase animated fadeInDown">Agencia de Desarrollo WEB, Mobile APPS y Diseño</h2>
						<h5 class="light uppercase animated fadeInUp">Creando soluciones efectivas y garantizadas.</h5>	
						<div class="animated fadeInUp mt-30">
								<a data-scroll href="#tuproyecto" class="primary-button semi-rounded button-lg w-300">Empieza tu Proyecto</a>
						</div>
				</div>
			</div>
		</div>
		<!-- Slide 1 End -->
		
		<!-- Slide 2 Start -->	
		<div class="swiper-slide black-overlay-50" style="background-image:url('./img/content/bgs/slide3.png');">
			<div class="container">
				<div class="slider-content center-holder mt-60-md">
					<h4 class="extra-light uppercase animated fadeInDown">Lleva tu idea a otro nivel</h4>
						<h2 class="extra-light uppercase animated fadeInDown">Desarrollamos Software Personalizado</h2>
						<h5 class="light uppercase animated fadeInUp">Usamos las ultimas tendencias en desarrollo de software</h5>	
						<div class="animated fadeInUp mt-30">
								<a data-scroll href="#tuproyecto" class="white-button semi-rounded button-lg w-300">Descubre Más</a>
						</div>
				</div>
			</div>
		</div>
		<!-- Slide 2 End -->

		<!-- Slide 3 Start -->	
		<div class="swiper-slide black-overlay-70" style="background-image:url('./img/content/bgs/slide2.png');">
			<div class="container">
				<div class="slider-content center-holder mt-60-md">
					<h4 class="extra-light uppercase animated fadeInDown">Te asesoramos en el desarrollo de tu idea</h4>
						<h2 class="extra-light uppercase animated fadeInDown">Crea un MVP y sal al mercado</h2>
					
						<div class="animated fadeInUp mt-30">
								<a data-scroll href="#tuproyecto" class="primary-button semi-rounded button-lg w-300">Contáctanos</a>
						</div>
				</div>
			</div>
		</div>
		<!-- Slide 3 End -->			
	</div>
	<!-- Add Arrows -->
	<div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>	
</div>
<!-- Slider END -->



<!-- Features Section START -->
<div class="section-block" id="servicios">
	<div class="container">
		<div class="section-heading center-holder">
			<small>5 años ofreciendo lo mejor</small>
			<h2 class="bold">Ofrecemos toda la gama de servicios para la web y más</h2>
			<div class="section-heading-line"></div>
			<p>Nuestros servicios abarcan todo el ciclo de vida de una empresa digital, desde su creacion hasta su mantenimiento.</p>
		</div>				

		<div class="row mt-40">
			<div class="col-md-4 col-sm-6 col-12">
				<div class="feature-float clearfix">
					<div class="feature-float-icon">
						<i class="icon-computer"></i>
					</div>
					<div class="feature-float-content">
						<h4>Diseño & Desarrollo WEB </h4>
						<p>Asegúramos de que su empresa mantenga sus puertas abiertas y sirva a los clientes las 24 horas del día, los 365 días del año. Ofrecemos diseño y desarrollo de páginas web en HTML5, WordPress, plataformas de comercio electrónico y más.</p>
					</div>
				</div>			
			</div>

			<div class="col-md-4 col-sm-6 col-12">
				<div class="feature-float clearfix">
					<div class="feature-float-icon">
						<i class="icon-key"></i>
					</div>
					<div class="feature-float-content">
						<h4>Estrategia & Planeación</h4>
						<p>Detectamos el problema o la necesidad de marca, realizamos un análisis exhaustivo de las características del cliente, conceptualizamos, diseñamos y producimos una propuesta a la altura de las necesidades.</p>
					</div>
				</div>			
			</div>

			<div class="col-md-4 col-sm-6 col-12">
				<div class="feature-float clearfix">
					<div class="feature-float-icon">
						<i class="icon-school-material"></i>
					</div>
					<div class="feature-float-content">
						<h4>UI/UX Design</h4>
						<p>Nos enfocamos en diseñar productos útiles, usables y deseables, lo cual influye en que el usuario se sienta satisfecho, feliz y encantado.</p>
					</div>
				</div>			
			</div>

				

			<div class="col-md-4 col-sm-6 col-12">
				<div class="feature-float clearfix">
					<div class="feature-float-icon">
						<i class="icon-seo2"></i>
					</div>
					<div class="feature-float-content">
						<h4>SEO Optimization</h4>
						<p>Asegúramos de que su sitio web reciba tráfico relevante y necesario para promocionar su negocio, sus marcas, sus trabajos y sus ventas. Con un SEO sólido y el poder de Google AdWords.</p>
					</div>
				</div>			
			</div>

			<div class="col-md-4 col-sm-6 col-12">
				<div class="feature-float clearfix">
					<div class="feature-float-icon">
						<i class="icon-exchange3"></i>
					</div>
					<div class="feature-float-content">
						<h4>Mobile APPS</h4>
						<p>Desarrollamos aplicaciones Moviles nativas para IOS, Android o bien utilizando React Native.</p>
					</div>
				</div>			
			</div>

			<div class="col-md-4 col-sm-6 col-12">
				<div class="feature-float clearfix">
					<div class="feature-float-icon">
						<i class="icon-cloud-computing2"></i>
					</div>
					<div class="feature-float-content">
						<h4>Content Marketing</h4>
						<p>Construimos lazos más fuertes con los clientes actuales, demostramos los beneficios y contamos historias interesantes sobre su marca y productos.</p>
					</div>
				</div>			
			</div>	

			<div class="col-md-4 col-sm-6 col-12">
				<div class="feature-float clearfix">
					<div class="feature-float-icon">
						<i class="icon-aim"></i>
					</div>
					<div class="feature-float-content">
						<h4>Contrata un Profesional</h4>
						<p>Nos involucramos en tu proyecto y en tu negocio, brindando soluciones a tus necesidades.</p>
					</div>
				</div>			
			</div>	

		</div>

		<!-- <div class="center-holder mt-20">
			<a href="#" class="primary-button button-md">View All Services</a>
		</div> -->
	</div>	
</div>
<!-- Features Section END -->



				<?php 
					if($sent == 1){
						?>
						<!-- Modal Start -->
						<div class="izimodal" id="modal8" data-iziModal-width="500px" data-iziModal-fullscreen="true" data-iziModal-autoOpen="3">
							<!-- Close Button Start -->
							<div class="close-modal">
								<button class="close-modal" data-izimodal-close><i class="ti-close"></i></button>
							</div>
							<!-- Close Button Start -->
							<!-- Modal Body Start -->
							<div class="modal-inside inner-30 center-holder">
								<div class="modal-heading">
									<h4>Exitoso</h4>
								</div>
									<p>La gerente de proyectos ha recibido su peticion de contacto, se estará contactando con usted vía email en la mayor brevedad posible.</p>
									<p>Muchas Gracias.</p>
							</div>
							<!-- Modal Body End -->
						</div>	
						<?php	
					}

				?>




<!-- Portfolio Section START -->
<div class="section-block" id="portafolio"
	<div class="container">
		<div class="section-heading center-holder">
			<small>Tu partner Tecnologico</small>
			<h2 class="bold">Nuestros Proyectos</h2>
			<div class="section-heading-line"></div>
			<p>Nuestros proyectos no son un catálogo, son el resultado de nuestra dedicación y trabajo duro.</p>
		</div>			

		<div class="row no-gutters mt-50">
			<div class="col-md-4 col-sm-6 col-12">
				<a href="#">
					<div class="project-classic-3">
						<img src="./img/content/portfolio/tutorez.png" alt="tutorez">
						<div class="project-classic-overlay">
							<div class="project-classic-content">
								<div class="project-classic-content-inner">
									<h3>Tutorez - Startup Panameña</h3>
									<h4>https://tutorez.com/</h4>
								</div>
							</div>
						</div>					
					</div>				
				</a>					
			</div>
			<div class="col-md-4 col-sm-6 col-12">
				<a href="https://getliv.com/" rel="nofollow" target="_blank">
					<div class="project-classic-3">
						<img src="./img/content/portfolio/bellezpa.png" alt="bellezpa">
						<div class="project-classic-overlay">
							<div class="project-classic-content">
								<div class="project-classic-content-inner">
									<h3>Liv - Startup Panameña</h3>
									<h4>https://getliv.com/</h4>
								</div>
							</div>
						</div>					
					</div>				
				</a>					
			</div>
			<div class="col-md-4 col-sm-6 col-12">
				<a href="https://chefsadomicilio.com/" rel="nofollow" target="_blank">
					<div class="project-classic-3">
						<img src="./img/content/portfolio/chefsadomicilio.png" alt="chefsadomicilio">
						<div class="project-classic-overlay">
							<div class="project-classic-content">
								<div class="project-classic-content-inner">
									<h3>Chefs a domicilio - Startup Panameña</h3>
									<h4>https://chefsadomicilio.com/</h4>
								</div>
							</div>
						</div>					
					</div>				
				</a>					
			</div>	
			<div class="col-md-4 col-sm-6 col-12">
				<a href="#">
					<div class="project-classic-3">
						<img src="./img/content/portfolio/purple.png" alt="img">
						<div class="project-classic-overlay">
							<div class="project-classic-content">
								<div class="project-classic-content-inner">
									<h3>Sun Company Design</h3>
								</div>
							</div>
						</div>					
					</div>				
				</a>					
			</div>
			<div class="col-md-4 col-sm-6 col-12">
				<a href="#">
					<div class="project-classic-3">
						<img src="./img/content/portfolio/green.png" alt="img">
						<div class="project-classic-overlay">
							<div class="project-classic-content">
								<div class="project-classic-content-inner">
									<h3>Mark Ocean Design</h3>
								</div>
							</div>
						</div>					
					</div>				
				</a>					
			</div>
			<div class="col-md-4 col-sm-6 col-12">
				<a href="#">
					<div class="project-classic-3">
						<img src="./img/content/portfolio/masajeador.png" alt="img">
						<div class="project-classic-overlay">
							<div class="project-classic-content">
								<div class="project-classic-content-inner">
									<h3>Masajeador Plus App</h3>
								</div>
							</div>
						</div>					
					</div>				
				</a>					
			</div>	

			<div class="col-md-4 col-sm-6 col-12">
				<a href="https://www.librotheke.com/" rel="nofollow" target="_blank">
					<div class="project-classic-3">
						<img src="./img/content/portfolio/tjpresentacion.jpg" alt="presentation">
						<div class="project-classic-overlay">
							<div class="project-classic-content">
								<div class="project-classic-content-inner">
									<h3>Librotheke - Startup Panameña</h3>
									<h4>https://www.librotheke.com/</h4>
								</div>
							</div>
						</div>					
					</div>				
				</a>					
			</div>
			<div class="col-md-4 col-sm-6 col-12">
				<a href="https://fortesza.com/" rel="nofollow" target="_blank">
					<div class="project-classic-3">
						<img src="./img/content/portfolio/fortesza.png" alt="presentation">
						<div class="project-classic-overlay">
							<div class="project-classic-content">
								<div class="project-classic-content-inner">
									<h3>Fortesza - Startup Panameña</h3>
									<h4>https://fortesza.com/</h4>
								</div>
							</div>
						</div>					
					</div>				
				</a>					
			</div>
														
		</div>	

		<div class="center-holder mt-60">
			<a href="#" class="primary-button-bordered button-md">Ver todos los Proyectos</a>
		</div>		
	</div>	
</div>
<!-- Portfolio Section END -->







<!-- Team Section START -->
<div class="section-block" id="nosotros">
	<div class="container">
		<div class="section-heading center-holder">
			<small>Conoce nuestro Equipo</small>
			<h2 class="bold">Grupo de Profesionales apasionados por la Tecnología</h2>
			<div class="section-heading-line"></div>
		</div>			
		<div class="row mt-50">
	 		<div class="col-md-3 col-sm-6 col-12">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
	 					<img src="./img/profiles/karla.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4><a href="#">Karla L.</a></h4>
	 					<h5 class="italic libre-baskerville">CEO, Founder.</h5>
		 				<ul class="team-circle-social">
		 					<li> <a href="https://www.linkedin.com/in/karlalopezbello/" target="_blank" rel="nofollow"><i class="fab fa-linkedin-in"></i></a></li>

		 				</ul>
	 				</div>
	 			</div>
	 		</div>

	 		<div class="col-md-3 col-sm-6 col-12">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
	 					<img src="http://via.placeholder.com/157x157" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4><a href="#">Adalberto F.</a></h4>
	 					<h5 class="italic libre-baskerville">Senior developer</h5>
		 				<ul class="team-circle-social">
							<li> <a href="https://www.linkedin.com/in/karlalopezbello/" target="_blank" rel="nofollow"><i class="fab fa-linkedin-in"></i></a></li>

		 				</ul>
	 				</div>
	 			</div>
			 </div>
	 		<div class="col-md-3 col-sm-6 col-12">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
	 					<img src="./img/profiles/paty.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4><a href="#">Patty P.</a></h4>
	 					<h5 class="italic libre-baskerville">UI/UX Designer</h5>
		 				<ul class="team-circle-social">
							<li> <a href="https://www.linkedin.com/in/karlalopezbello/" target="_blank" rel="nofollow"><i class="fab fa-linkedin-in"></i></a></li>

		 				</ul>
	 				</div>
	 			</div>
	 		</div>

	 		<div class="col-md-3 col-sm-6 col-12">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
	 					<img src="./img/profiles/andres.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4><a href="#">Andres M.</a></h4>
	 					<h5 class="italic libre-baskerville">Marketing Expert</h5>
		 				<ul class="team-circle-social">
              <li> <a href="https://www.linkedin.com/in/andres-eloy-monagas-medina-2a6789143/" target="_blank" rel="nofollow"><i class="fab fa-linkedin-in"></i></a></li>

               
            </ul>
	 				</div>
	 			</div>
	 		</div>




		</div>			
	</div>
</div>
<!-- Team Section END -->



<!-- Contact Form Section START -->
<div class="section-block-grey" id="tuproyecto">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6 col-12">
				<div class="contact-form-md white-background shadow-primary">
					<h5 class="center-holder">Explicanos tu Proyecto.</h5>
					<!-- Form Start -->
					<form method="post" action="" class="mt-30">
						<input type="text" name="name" placeholder="Nombre">
						<input type="email" name="email" placeholder="Correo">
						<textarea name="message" placeholder="Mensaje"></textarea>
						<button type="submit" class="primary-button button-sm full-width">Enviar</button>						
					</form>
					<!-- Form End -->
				</div>
			</div>

			<div class="col-md-7 col-sm-6 col-12">
				<div class="pl-45-md">
					<div class="section-heading left-holder mt-25">
						<h3 class="bold">Cumpliremos tus expectativas! Somos Professional web design experts.</h3>
						<div class="section-heading-line"></div>
					</div>

					<div class="text-content-big">
						<p>Explicanos tu Proyecto, en lo más breve te contactaremos.</p>					
					</div>

					<!-- Contact icons Start -->
					<div class="row mt-20">
						<div class="col-md-6 col-sm-12 col-12">
							<div class="contact-icon-box-dark-color">
								<div class="contact-icon-box-sm">
									<i class="icon-mail"></i>
									<h4>Dirección de correo</h4>
									<h5>coderfriends@gmail.com</h5>
								</div>									
							</div>						
						</div>
						<div class="col-md-6 col-sm-12 col-12">
							<div class="contact-icon-box-dark-color">
								<div class="contact-icon-box-sm">
									<i class="icon-map"></i>
									<h4>Nuestro Mercado</h4>
									<h5>Panama, Venezuela, Colombia, Chile, Mexico, España</h5>
								</div>									
							</div>						
						</div>						
					</div>	
					<!-- Contact icons End -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Contact Form Section END -->


<!-- Footer START -->
<footer class="footer-style-1" id="contactus">
	<div class="container">
		<div class="row">
			<!-- Column 1 Start -->
			<div class="col-md-4 col-sm-6 col-12">
				<h3>Más de Nosotros</h3>
				<a href="#"><img src="img/logos/coder_logo2.png" alt="img"></a>
				

				<div class="mt-20">
					<p>Tus Desarrolladores confiables</p>	
				</div>
				
				<ul class="footer-style-1-social-links">
					<!-- <li><a href="https://www.facebook.com/search/str/coderfriend/keywords_search"><i class="fab fa-facebook-square"></i></a></li> -->
					<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
				</ul>
			</div>
			<!-- Column 1 End -->

			

			<!-- Column 3 Start -->
			<div class="col-md-3 col-sm-6 col-12">
				<h3>Información de contacto</h3>
				<ul class="footer-style-1-contact-info">
					<li><i class="fa fa-phone"></i> <span>+58 416-6926107</span></li>
					<li><i class="fa fa-envelope-open"></i> <span>coderfriends@gmail.com</span></li>

				</ul>
			</div>
			<!-- Column 3 End -->

								
		</div>
	</div>

	<div class="footer-style-1-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-12">
					<h5>CoderFriends © 2018. All Rights Reserved.</h5>
				</div>

			</div>
		</div>
	</div>
</footer>
<!-- Footer END -->




<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a>	
<!-- Scroll to top button End -->



<!-- Jquery -->
<script src="js/jquery.min.js"></script>

<!-- Plugins JS-->
<script src="js/plugins.js"></script>	

<!-- Navbar JS -->
<script src="js/navigation.js"></script>
<script src="js/navigation.fixed.js"></script>

<!-- Google Map -->
<script src="js/map.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>


<script src="./js/smooth-scroll-master/dist/smooth-scroll.polyfills.min.js"></script>


<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>
</html>
