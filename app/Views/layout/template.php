<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>OnlyTrade | Online Marketplace</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>/template/css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>/template/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>/template/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>/template/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url() ?>/template/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>/template/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body class="d-flex flex-column">
	<?= $this->include('layout/header'); ?>

	<?= $this->include('layout/navbar'); ?>

	<?= $this->renderSection('content'); ?>


	<!-- FOOTER -->
	<footer id="footer" class="footer fixed-bottom">
		<!-- bottom footer -->
		<div id="bottom-footer" class="section">
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12 text-center">
						<span class="copyright">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by OnlyTrade Fams
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</span>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bottom footer -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="<?php echo base_url() ?>/template/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>/template/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>/template/js/slick.min.js"></script>
	<script src="<?php echo base_url() ?>/template/js/nouislider.min.js"></script>
	<script src="<?php echo base_url() ?>/template/js/jquery.zoom.min.js"></script>
	<script src="<?php echo base_url() ?>/template/js/main.js"></script>

</body>

</html>