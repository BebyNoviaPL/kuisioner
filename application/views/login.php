<!DOCTYPE html>
<html> 
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Login Kuesioner DIPAM</title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="/favicon.ico">

	<!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Vampiro+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,600,700' rel='stylesheet' type='text/css'>

	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="<?= base_url() ?>assets/js/slick/slick.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/js/flex-slider/flexslider.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/js/owl-carousel/owl.carousel.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/js/owl-carousel/owl.theme.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/js/owl-carousel/owl.transitions.css"/> -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/prettyphoto.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

	<!-- SKIN -->
	<link rel="stylesheet" title="blue" href="<?= base_url() ?>assets/css/colors/skin-blue.css"/>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!-- MODERNIZR -->
	<script src="<?= base_url() ?>assets/js/modernizr.custom.js"></script>

    <style type="text/css">
<!--
.style2 {font-size: 24px}
.style3 {color: #e4e4e4}
-->
    </style>
</head>
<body id="page-top">
    
<div id="body">

	<!-- INTRO -->
	<section id="intro">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
			
				<div class="pull-right" style=" margin-top:-150px; margin-right:3px;">
					<img src="<?=base_url()?>assets/images/bem.png" alt="" width='104' height="104" >		
				</div>
				<div class="pull-left" style=" margin-top:-150px; margin-left:0px;">
					<img src="<?=base_url()?>assets/images/pol.png" alt="" width='100px' height="100">
					
			  </div>
				
				<div class="col-md-12">
					<div class="row">
					
				    <span class="style2"><h2><center>Kuesioner Dialog Pimpinan dan Mahasiswa</center></h2></span>
					
						<div class="col-md-7"><center>
							<h2>&nbsp;</h2>
					</center>
						</div>
						<div class="col-md-5 sub-form">
							<div class="style3" id="sub-form">
								
								<?= form_open('login/cek_login', array('class'=>'subscribe')); ?>
									<h5>Silahkan Login</h5>
									<div class="col-md-12">
									  <input type="text" name="username" class="input" placeholder="Username" required="">
									</div>
									<div class="col-md-12">
										<input type="password" name="password" class="input" placeholder="Password" required="">
									</div>
																	
									<div class="clearfix"></div>
									<div class="space40"></div>
									<button type="submit" class="btn-main btn-center">Login</button>
								    <?= form_close(); ?>
							</div>
							<span id="result"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- INTRO -->


	<!-- FOOTER / COPYRIGHT -->
	<div class="footer-copy">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>&copy; 2018. All rights reserved. Created by <a href="wri.polinema.ac.id" target="_blank">Workshop & Riset Informatika</a>.</p>
				</div>

			</div>
		</div>
	</div>
	<!-- FOOTER / COPYRIGHT -->
</div>


<!-- Javascript -->
<script src="<?= base_url() ?>assets/js/jquery.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

<script src="<?= base_url() ?>assets/js/jquery.countdown.min.js"></script>
<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>
</html>