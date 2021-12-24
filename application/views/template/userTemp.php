<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="<?= base_url() ?>assets/img	/fav-icon.png" type="image/x-icon" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Sierra</title>

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

	<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet">

</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="main_menu_area">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">LOGO</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span></span>
				<span></span>
				<span></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
					<li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
					<li class="nav-item dropdown submenu">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Blog
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
							<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
							<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
						</ul>
					</li>
					
					<!-- LOGIN MUNCUL JIKA BELUM LOGIN -->
					<?php
					if ($this->session->has_userdata('login_session')) : ?>
						<li class="nav-item"><a class="nav-link" href="<?= site_url('auth') ?>">Account</a></li>
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
						</script></i> by <a href="#" target="_blank">TES BEH</a>
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
</body>

</html>