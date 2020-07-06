<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?=$title?></title>
	<link href="<?=base_url('assets/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url('assets/')?>css/all.css" rel="stylesheet">
	<link href="<?=base_url('assets/')?>css/owl.carousel.min.css" rel="stylesheet">
	<link href="<?=base_url('assets/')?>css/jquery.fancybox.min.css" rel="stylesheet">
	<link href="<?=base_url('assets/')?>css/style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper-main">
	<!-- Top Bar -->
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="social-media">
						<ul>
							<li><a href="<?=$social['facebook']?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="<?=$social['twitter']?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="<?=$social['google']?>" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="<?=$social['linkedin']?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="<?=$social['instagram']?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="contact-details">
						<ul>
							<li><i class="fas fa-phone fa-rotate-90"></i> <?=$contactos['tel']?></li>
							<li><i class="fas fa-map-marker-alt"></i> <?=$contactos['morada']?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
		<div class="container">
			<a class="navbar-text" href="<?=base_url()?>" style="color: #1b1e21">
				Helvan
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url()?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url('sobre-nos')?>">Sobre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url('empresas')?>">Nossas Empresas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url('contactos')?>">Contactos</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
