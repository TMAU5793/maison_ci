<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Maison Blanche</title>
	<link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('slick/slick.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('slick/slick-theme.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('fonts/trajan/font.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('fonts/anantason/font.css'); ?>">
	<script src="<?= base_url('js/jquery-3.5.1.min.js'); ?>"></script>
	<script src="<?= base_url('bootstrap/js/bootstrap.js'); ?>"></script>
	<script src="<?= base_url('slick/slick.js'); ?>"></script>
</head>
<body>
	<section class="header">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			   <a class="navbar-brand" href="#">
					 <div class="i-menu"><img src="<?= base_url('images/icons/menu.png') ?>" alt=""></div>
			   </a>
			   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			       <span class="navbar-toggler-icon"></span>
			   </button>
			   <div class="row w-100">
			       <div class="col-md-4 h-icons">
			           <ul class="ul-inline mid-left">
			               <li><div class="i-fb i-social-top"></div></li>
			               <li><div class="i-ig i-social-top"></div></li>
			               <li><div class="i-tw i-social-top"></div></li></li>
			               <li><div class="i-yt i-social-top"></div></li></li>
			           </ul>
			           <div class="clearfix"></div>
			       </div>
			       <div class="col-md-4 text-center">
			           <div class="h-logo">
			               <img src="<?= base_url('images/logo.png') ?>" alt="">
			           </div>
			       </div>
			       <div class="col-md-4 h-right">
			           <ul class="ul-inline mid-right ff-trajan c-gold">
			               <li class="nav-item dropdown f-20 lang">
									<a class="dropdown-toggle lang-list ff-trajan-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									TH
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item ff-trajan-bold f-20" href="#">EN</a>
									</div>
			               </li>
			               <li class="nav-item h-line">
			               	<div>|</div>
			               </li>
			               <li class="nav-item position-relative">
			               	<div class="text-uppercase f-14 btn-register">
			               		<a href="#" class="c-gold">registration</a>	               	
			               	</div>
			               	<div class="box-register"></div>
			               </li>
			           </ul>
			       </div>
			   </div>
			</nav>
		</div>
	</section>