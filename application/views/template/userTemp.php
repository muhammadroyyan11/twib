<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="<?= base_url() ?>assets/img	/fav-icon.png" type="image/x-icon" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Twibbon | <?= $tittle ?></title>

	<!-- Icon css link -->
	<link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Rev slider css -->
	<link href="<?= base_url() ?>assets/vendors/revolution/css/settings.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendors/revolution/css/layers.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendors/revolution/css/navigation.css" rel="stylesheet">

	<!-- Extra plugin css -->
	<link href="<?= base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">


	<link href="<?= base_url() ?>assets/css/search.css" rel="stylesheet">

	<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
	<!-- <link href="<?= base_url() ?>assets/css/card.css" rel="stylesheet"> -->
	<link href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?= base_url() ?>assets/twibbon/css/bootstrap.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/twibbon/css/slick.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/twibbon/css/slick-theme.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/twibbon/css/style.min.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/twibbon/css/campaign.68e4ca24.css" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/twibbon/img/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/twibbon/img/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/twibbon/img/favicon-16x16.png" />
	<link rel="mask-icon" href="<?= base_url() ?>assets/twibbon/img/safari-pinned-tab.svg" color="#1baaa0" />
	<meta name="apple-mobile-web-app-title" content="Twibbon" />
	<meta name="application-name" content="Twibbon" />
	<meta name="msapplication-TileColor" content="#1baaa0" />
	<meta name="theme-color" content="#1baaa0" />
	<title>Twibbon | Where campaigns meet you!</title>
	<meta name="description" content="From movements tackling huge, serious causes — to anything just for fun, you can always take your part in anything with Twibbon." />
	<meta name="keywords" content="Twibbon, Campaign, Frame" />
	<link href="<?= base_url() ?>assets/twibbon/css/app.5d03e511.css" rel="preload" as="style" />
	<link href=".css/chunk-vendors.d3ac3f59.css" rel="preload" as="style" />
	<script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js" data-stencil-namespace="ionicons"></script>
	<script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js" data-stencil-namespace="ionicons"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/twibbon/css/home.4e3a69b2.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/twibbon/css/below-fold.aeb75ab4.css" />

	<!-- DROPZONE -->
	<!-- Dropzone CSS & JS -->
	<link href="<?= base_url() ?>assets/dropzone/dropzone.css" type='text/css' rel='stylesheet'>
	<script src="<?= base_url() ?>assets/dropzone/dropzone.js" type='text/javascript'></script>

	
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="main_menu_area">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<b><a class="navbar-brand" href="#">TWIBBONIS</a></b>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span></span>
				<span></span>
				<span></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item active"><a class="nav-link" href="<?= site_url('home') ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= site_url('jelajah') ?>">Jelahi</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= site_url('about') ?>">Tentang</a></li>
					<?php
					if ($this->session->has_userdata('login_session')) : ?>
						<li class="nav-item"><a class="nav-link" href="<?= site_url('campaign') ?>">Twibbon Saya</a></li>
					<?php endif; ?>

					<!-- <li class="nav-item"><a class="nav-link" href="<?= site_url('home') ?>">Marketplace</a></li> -->

					<!-- LOGIN MUNCUL JIKA BELUM LOGIN -->
					<?php
					if ($this->session->has_userdata('login_session')) : ?>
						<li class="nav-item"><a class="nav-link" href="<?= site_url('profile') ?>">Account</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= site_url('auth/logout') ?>">Logout</a></li>
					<?php else : ?>
						<li class="nav-item"><a class="nav-link" href="<?= site_url('auth') ?>">Login</a></li>
					<?php endif; ?>
					<!-- END LOGIN MUNCUL JIKA BELUM LOGIN -->
				</ul>
			</div>
		</nav>
	</header>
	<!--================End Header Menu Area =================-->


	<?= $contents ?>

	<!--================Footer Area =================-->
	<footer class="footr_area">

		<div class="footer_copyright">
			<div class="container">
				<div class="float-sm-left">
					<h5>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;2021-<script>
							document.write(new Date().getFullYear());
						</script></i> by <a href="#">Twibbon Generator</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</h5>
				</div>
				<div class="float-sm-right">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->




	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?= base_url() ?>assets/js/search.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<!-- Rev slider js -->
	<script src="<?= base_url() ?>assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?= base_url() ?>assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?= base_url() ?>assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="<?= base_url() ?>assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="<?= base_url() ?>assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="<?= base_url() ?>assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="<?= base_url() ?>assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="<?= base_url() ?>assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<!-- Extra plugin css -->
	<script src="<?= base_url() ?>assets/vendors/counterup/jquery.waypoints.min.js"></script>
	<script src="<?= base_url() ?>assets/vendors/counterup/jquery.counterup.min.js"></script>
	<script src="<?= base_url() ?>assets/vendors/counterup/apear.js"></script>
	<script src="<?= base_url() ?>assets/vendors/counterup/countto.js"></script>
	<script src="<?= base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>assets/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url() ?>assets/js/smoothscroll.js"></script>

	<script src="<?= base_url() ?>assets/js/theme.js"></script>
	<script src="<?= base_url() ?>assets/js/card.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</body>

</html>