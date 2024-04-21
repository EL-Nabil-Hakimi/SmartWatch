<!-- /*
* Bootstrap 5
* Template Name: Montre Intelligente
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>ISTYLE</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		@include('layout.nav')
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
		
			<!-- Contrôles du carrousel -->
			<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" style="max-height: 89vh !important;">
				<div class="carousel-inner" style="max-height: 89vh !important;">
					<div class="carousel-item active" style="max-height: 89vh !important;">
						<!-- Contenu de la première diapositive -->
						<div class="hero">
							<div class="container">
								<div class="row justify-content-between">
									<div class="col-lg-5">
										<div class="intro-excerpt">
											<h1>Assistant Personnel <span class="d-block">Montre Intelligente</span></h1>
											<p class="mb-4">Votre assistant personnel directement à votre poignet. Discutez avec votre montre intelligente pour obtenir des informations, envoyer des messages, et bien plus encore.</p>
											<p><a href="" class="btn btn-secondary me-2">Achetez Maintenant</a><a href="#" class="btn btn-white-outline">Explorez</a></p>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="hero-img-wrap">
											<img src="https://www.cnet.com/a/img/resize/eb540f54cc8aa1f1c10b44641c9afd9ae82abec2/hub/2023/09/12/03b6c65a-7130-430d-92b0-7d054f560912/apple-watches-pink.png?auto=webp&width=1200" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Deuxième diapositive -->
					<div class="carousel-item">
						<!-- Contenu de la deuxième diapositive -->
						<div class="hero">
							<div class="container">
								<div class="row justify-content-between">
									<div class="col-lg-5">
										<div class="intro-excerpt">
											<h1>Assistant Personnel <span class="d-block">Montre Intelligente</span></h1>
											<p class="mb-4">Votre assistant personnel directement à votre poignet. Discutez avec votre montre intelligente pour obtenir des informations, envoyer des messages, et bien plus encore.</p>
											<p><a href="" class="btn btn-secondary me-2">Achetez Maintenant</a><a href="#" class="btn btn-white-outline">Explorez</a></p>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="hero-img-wrap">
											<img src="https://www.apple.com/newsroom/images/2023/09/apple-introduces-the-advanced-new-apple-watch-series-9/article/Apple-Watch-S9-hero-230912_Full-Bleed-Image.jpg.large.jpg" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Contrôles du carrousel -->
				
				
				<!-- Indicateurs du carrousel -->
				<ol class="carousel-indicators">
					<li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#heroCarousel" data-bs-slide-to="1"></li>
				</ol>
			</div>
			
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Fabriqué avec des matériaux de qualité.</h2>
						<p class="mb-4">Votre montre intelligente est conçue avec les meilleurs matériaux pour une durabilité et un confort exceptionnels.</p>
						<p><a href="shop" class="btn">Explorez</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					@include('layout.products')

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Pourquoi Nous Choisir</h2>
						<p>Votre satisfaction est notre priorité. Découvrez pourquoi tant de clients choisissent notre gamme de montres intelligentes :</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Livraison Rapide et Gratuite</h3>
									<p>Recevez votre montre intelligente rapidement et sans frais supplémentaires.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Facilité d'Achat</h3>
									<p>Commandez votre montre intelligente en quelques clics et profitez d'une expérience d'achat sans tracas.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Support 24/7</h3>
									<p>Notre équipe est disponible 24 heures sur 24, 7 jours sur 7, pour répondre à toutes vos questions et vous aider.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Retours Faciles</h3>
									<p>Si vous n'êtes pas entièrement satisfait de votre achat, retournez-le sans tracas.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="https://i.etsystatic.com/27840545/r/il/07fbcf/3076477431/il_570xN.3076477431_b8xe.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="https://currenwatches.com.pk/cdn/shop/products/S7d2e9b2df5eb48be959dad1f4655b5e5S_1445x.jpg?v=1713332874" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="https://img.fruugo.com/product/2/37/247489372_max.jpg" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="https://www.dhresource.com/webp/m/0x0/f2/albu/g20/M01/ED/85/rBNaOGCuGcaAFvAkAAKanLXOv4w415.jpg" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">Nous Vous Aidons à Concevoir Votre Intérieur Moderne</h2>
						<p>Profitez de l'expertise de nos designers pour créer un espace intérieur qui reflète votre style et vos besoins.</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Conseils Personnalisés</li>
							<li>Design Sur Mesure</li>
							<li>Service Après-Vente de Qualité</li>
							<li>Garantie Satisfaction Client</li>
						</ul>
						<p><a href="#" class="btn">Explorez</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product">
			<div class="container">
				<div class="row">
					@for ($i = 0; $i < 3; $i++)
						
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="https://www.dhresou	rce.com/webp/m/0x0/f2/albu/g20/M01/ED/85/rBNaOGCuGcaAFvAkAAKanLXOv4w415.jpg" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Montre Intelligente pour Homme</h3>
								<p>Reste connecté avec la dernière technologie à votre poignet. La montre intelligente pour homme est conçue pour améliorer votre vie quotidienne avec ses fonctionnalités avancées et son design élégant.</p>
								<p><a href="#">En savoir plus</a></p>
							</div>
						</div>
					</div>
					@endfor
			

				</div>
			</div>
		</div>
		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Témoignages</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								@for ($i = 0; $i < 3; $i++)
								
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

												
											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;La montre intelligente a révolutionné ma façon de gérer mon quotidien. Elle me permet de rester organisé et connecté où que je sois.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person_1.jpg" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Jean Dupont</h3>
													<span class="position d-block mb-3">Directeur Marketing, ABC Company</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								@endfor

								<!-- END item -->

								<!-- Ajoutez d'autres témoignages ici -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Dernières Nouvelles sur les Apple Watch</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="#" class="more">Voir Toutes les Nouvelles</a>
					</div>
				</div>
		
				<div class="row">
					
					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/apple-watch-1.jpeg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Les Nouvelles Fonctionnalités de la Dernière Apple Watch</a></h3>
								<div class="meta">
									<span>par <a href="#">John Doe</a></span> <span>le <a href="#">10 avril 2024</a></span>
								</div>
							</div>
						</div>
					</div>
		
					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/apple-watch-2.jpeg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Comparaison des Modèles d'Apple Watch</a></h3>
								<div class="meta">
									<span>par <a href="#">Jane Smith</a></span> <span>le <a href="#">5 avril 2024</a></span>
								</div>
							</div>
						</div>
					</div>
		
					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/apple-watch-3.jpeg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Conseils pour Entretenir votre Apple Watch</a></h3>
								<div class="meta">
									<span>par <a href="#">Alexandre Tremblay</a></span> <span>le <a href="#">1er avril 2024</a></span>
								</div>
							</div>
						</div>
					</div>
		
				</div>
			</div>
		</div>
		
		<!-- End Blog Section -->	

		<!-- Start Footer Section -->
		@include('layout.footer')

		<!-- End Footer Section -->	
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<!-- Script pour le carrousel -->
<script>
  $(document).ready(function(){
    // Initialisation du carrousel
    $('#heroCarousel').carousel({ interval: 10000, ride: "carousel" });
    
    // Faire défiler vers la gauche lorsque le bouton "Prev" est cliqué
    $('#prevBtn').click(function(){
      $('#heroCarousel').carousel('prev');
    });
    
    // Navigation vers la diapositive correspondante lorsque le titre est cliqué
    $('.btn-dark').click(function(){
      var slideIndex = $(this).data('bs-slide-to');
      $('#heroCarousel').carousel(slideIndex);
    });
  });
</script>

		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		@include('layout.scripts')
		
	</body>

	

</html>

