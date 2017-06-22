<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Home - Full Screen Image | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="inicio" class="standard-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark.png"><img src="<?php echo assets_url(); ?>images/logo.png" alt="Canvas Logo"></a>
						<a href="inicio" class="retina-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark@2x.png"><img src="<?php echo assets_url(); ?>images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

						<ul>
							<li><a href="inicio"><div>PROIT</div><span>Sobre Nosotros</span></a>
								<ul>
									<li><a href="nosotros"><div>Sobre Nosotros</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Mercados</div><span>Buy Now</span></a>
								<ul>
									<li><a href="admin_p"><div>Administración Pública</div></a></li>
									<li><a href="ambiente"><div>Ambiente</div></a></li>
									<li><a href="agricultura"><div>Agricultura</div></a></li>
									<li><a href="energia"><div>Energía</div></a></li>
									<li><a href="industria"><div>Industria 4.0</div></a></li>
									<li><a href="mar"><div>Mar y Crecimiento Azul</div></a></li>
									<li><a href="salud"><div>Salud</div></a></li>
									<li><a href="servicios_f"><div>Servicios Financieros</div></a></li>
									<li><a href="telecomunicaciones"><div>Telecomunicaciones</div></a></li>
									<li><a href="transporte"><div>Transporte</div></a></li>
									<li><a href="ciudades_i"><div>Ciudades inteligentes y IOT</div></a></li>
								</ul>
							</li>
							<li class="current"><a href="#"><div>Soluciones</div><span>Amazing Elements</span></a>
								<ul>
									<li><a href="soluciones"><div>Soluciones de Negocios</div></a></li>
									<li><a href="intraestructura"><div>Infraestructura</div></a></li>
									<li><a href="seguridad"><div>Seguridad</div></a></li>
									<li><a href="plataformas"><div>Plataformas en Aplicaciones</div></a></li>
									<li><a href="redes_i"><div>Redes Inteligentes</div></a></li>
									<li><a href="gestion_s"><div>Gestión de servicios</div></a></li>
									<li><a href="outsourcing"><div>Outsourcing Global</div></a></li>
									<li><a href="productos"><div>Productos Compra</div></a></li>
								</ul>
							</li>
							<li>
								<a href="contacto"><div>Contactos</div><span>Información de contacto</span></a>
							</li>
						</ul>

						<!-- Top Cart
						============================================= -->
						<div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="<?php echo assets_url(); ?>images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="<?php echo assets_url(); ?>images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo assets_url(); ?>images/about/parallax.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">
				<h1>Job Openings</h1>
				<span>Join our Fabulous Team of Intelligent Individuals</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li class="active">Jobs</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="section header-stick dark">
					<div class="container clearfix">
						<div class="row">

							<div class="col-md-9">
								<div class="heading-block bottommargin-sm">
									<h3>We specialize in Robust Software Solutions</h3>
								</div>

								<p class="nobottommargin">Lasting change, stakeholders development Angelina Jolie world problem solving progressive. Courageous; social entrepreneurship change; accelerate resolve pursue these aspirations asylum.</p>
							</div>

							<!--<div class="col-md-3">
								<a href="#" class="button button-3d button-dark button-large btn-block center" style="margin-top: 30px;">Check our Services</a>
							</div>-->

						</div>
					</div>
				</div>
				
				<div class="container clearfix">

					<div class="col_half topmargin-sm bottommargin">
						<img data-animate="fadeInLeftBig" src="<?php echo assets_url(); ?>images/services/imac.png" alt="Imac">
					</div>

					<div class="col_half col_last topmargin-sm bottommargin-lg col_last">

						<div class="heading-block topmargin">
							<h2>Retina Device Ready.</h2>
							<span>Fabulously Sharp &amp; Intuitive on your HD Devices.</span>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus deserunt, nobis quae eos provident quidem. Quaerat expedita dignissimos perferendis, nihil quo distinctio eius architecto reprehenderit maiores.</p>

						<a href="#" class="button button-border button-rounded button-large noleftmargin topmargin-sm">Experience More</a>

					</div>

					<div class="line"></div>

				</div>
				
				<div class="container">

					<div class="col_half">
						<h5>Half Width</h5>
						Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.
					</div>

					<div class="col_half col_last">
						<h5>Half Width (Last)</h5>
						Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.
					</div>

				</div>

			</div>

		</section><!-- #content end -->
		
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-dark">
			<div class="container clearfix">
				<div class="col_half topmargin nobottommargin dark">

					<h3>Short Overview.</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quos, facilis esse rem dicta dignissimos eligendi earum sapiente ipsam iure vel deserunt.</p>

					<div class="divider divider-short"><i class="icon-circle"></i></div>

					<ul class="iconlist iconlist-large iconlist-color">
						<li><i class="icon-ok-sign"></i> Interactive Live Builder</li>
						<li><i class="icon-ok-sign"></i> Valid HTML5 &amp; CSS3 Semantics</li>
						<li><i class="icon-ok-sign"></i> 100% Open Source &amp; Customizable</li>
						<li><i class="icon-ok-sign"></i> Responsive &amp; Retina Devices Support</li>
						<li><i class="icon-ok-sign"></i> Easy Embeddable Media &amp; Graphics</li>
						<li><i class="icon-ok-sign"></i> Lifetime <strong>FREE</strong> Updates</li>
					</ul>

				</div>

				<div class="col_half col_last topmargin nobottommargin">

					<img src="<?php echo assets_url(); ?>images/icons/macbook.png" alt="Macbook Video Underlay" data-animate="fadeInRightBig">

				</div>
			</div>
		</section><!-- #page-title end -->
		
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-dark">
			<a class="button button-full center tright footer-stick">
				<div class="container clearfix">
					Canvas comes with Unlimited Customizations &amp; Options. <strong>Check Out</strong> <i class="icon-caret-right" style="top:4px;"></i>
				</div>
			</a>
		</section><!-- #page-title end -->
		
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-dark">
			<div class="container clearfix">

				<div class="col_one_third dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-screen i-alt"></i></a>
						</div>
						<h3>Responsive Layout</h3>
						<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
					</div>
				</div>

				<div class="col_one_third dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-eye i-alt"></i></a>
						</div>
						<h3>Retina Graphics</h3>
						<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
					</div>
				</div>

				<div class="col_one_third col_last dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-beaker i-alt"></i></a>
						</div>
						<h3>Powerful Performance</h3>
						<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
					</div>
				</div>

				<div class="clear"></div>

				<div class="col_one_third dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-stack i-alt"></i></a>
						</div>
						<h3>Premium Sliders</h3>
						<p>Canvas included 20+ custom designed Slider Pages with Premium Sliders like Layer, Revolution, Swiper &amp; others.</p>
					</div>
				</div>

				<div class="col_one_third dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-tint i-alt"></i></a>
						</div>
						<h3>Unlimited Colors</h3>
						<p>Change the color scheme of the Theme in a flash just by changing the 6-digit HEX code in the colors.php file.</p>
					</div>
				</div>

				<div class="col_one_third col_last dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-text-width i-alt"></i></a>
						</div>
						<h3>Customizable Fonts</h3>
						<p>Use any Font you like from Google Web Fonts, Typekit or other Web Fonts. They will blend in perfectly.</p>
					</div>
				</div>

				<div class="clear"></div>

				<div class="col_one_third nobottommargin dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-stack i-alt"></i></a>
						</div>
						<h3>Premium Sliders</h3>
						<p>Canvas included 20+ custom designed Slider Pages with Premium Sliders like Layer, Revolution, Swiper &amp; others.</p>
					</div>
				</div>

				<div class="col_one_third nobottommargin dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-tint i-alt"></i></a>
						</div>
						<h3>Unlimited Colors</h3>
						<p>Change the color scheme of the Theme in a flash just by changing the 6-digit HEX code in the colors.php file.</p>
					</div>
				</div>

				<div class="col_one_third nobottommargin col_last dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-text-width i-alt"></i></a>
						</div>
						<h3>Customizable Fonts</h3>
						<p>Use any Font you like from Google Web Fonts, Typekit or other Web Fonts. They will blend in perfectly.</p>
					</div>
				</div>

			</div>
		</section><!-- #page-title end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<img src="<?php echo assets_url(); ?>images/footer-logo.png" alt="" class="footer-logo">

						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.
					</div>

					<div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links fright clearfix">
							<a href="#">Home</a>/<a href="#">About</a>/<a href="#">Features</a>/<a href="#">Portfolio</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
						</div>
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/functions.js"></script>

</body>
</html>
