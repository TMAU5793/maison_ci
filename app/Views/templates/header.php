<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Maison Blanche</title>
	<link rel="stylesheet" href="<?=base_url('css/style.css');?>">
	<link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?=base_url('slick/slick.css');?>">
	<link rel="stylesheet" href="<?=base_url('slick/slick-theme.css');?>">
	<link rel="stylesheet" href="<?=base_url('fonts/trajan/font.css');?>">
	<link rel="stylesheet" href="<?=base_url('fonts/anantason/font.css');?>">
	<link rel="stylesheet" href="<?=base_url('fancy/jquery.fancybox.css'); ?>">
	<script src="<?=base_url('js/jquery-3.5.1.min.js');?>"></script>
	<script src="<?=base_url('fancy/jquery.fancybox.js'); ?>"></script>
	<script src="<?=base_url('bootstrap/js/bootstrap.js');?>"></script>
	<script src="<?=base_url('slick/slick.js');?>"></script>
</head>
<script>
	$(function(){
		var n=0;
		$('.navbar-brand').click(function(){			
			if(n == 0){
				$('.show-menu').removeClass('slide-right');
				$('.show-menu').addClass('slide-left');
				$('.h-icons ul').css('visibility', 'visible');
				n = 1;
			}else{
				$('.show-menu').removeClass('slide-left');
				$('.show-menu').addClass('slide-right');
				n = 0;
			}
		});
	});
</script>
<body>
	<section class="header fixed-top">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			   <div class="navbar-brand">
					 <div class="i-menu"><img src="<?=base_url('images/icons/menu.png')?>" alt=""></div>
			   </div>
			   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			       <span class="navbar-toggler-icon"></span>
			   </button>
			   <div class="row w-100 m-auto">
			       <div class="col-md-4 h-icons">
						 	<div class="show-menu"></div>
			           <ul class="ul-inline mid-left">
			               <li>
									<a href="https://www.facebook.com/maisonblanche67" target="_blank">
										<div class="i-fb i-social-top"></div>
									</a>
								</li>
			               <li><div class="i-ig i-social-top"></div></li>
			               <li><div class="i-tw i-social-top"></div></li></li>
			               <li><div class="i-yt i-social-top"></div></li></li>
			           </ul>
			           <div class="clearfix"></div>
			       </div>
			       <div class="col-md-4 text-center">
			           <div class="h-logo">
			               <img src="<?=base_url('images/logo.png')?>" alt="">
			           </div>
			       </div>
			       <div class="col-md-4 h-right">
			           	<ul class="ul-inline mid-right ff-trajan c-gold collapse navbar-collapse" id="navbarSupportedContent">
			               <li class="nav-item dropdown f-20 lang">
									<a class="dropdown-toggle lang-list ff-trajan-bold" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?= ($lang == 'th' ? 'TH' : 'EN'); ?>
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item ff-trajan-bold f-20" href="<?=base_url($lang == 'th' ? 'en' : 'th');?>">
											<?= ($lang == 'th' ? 'EN' : 'TH'); ?>
										</a>
									</div>
			               </li>
			               <li class="nav-item h-line hide-991">
			               	<div>|</div>
			               </li>
			               <li class="nav-item position-relative register-group">
			               	<div class="text-uppercase btn-register <?= ($lang == 'th' ? 'f-18 ff-anantason' : 'f-14'); ?>">
			               		<a href="#register" class="c-gold"><?=  $registerText ?></a>
			               	</div>
			               	<div class="box-register hide-991"></div>
								</li>
								<li class="show-991">
									<div class="text-uppercase btn-register <?= ($lang == 'th' ? 'f-18 ff-anantason' : 'f-14'); ?>">
			               		<a href="#concept" class="c-gold">design concept</a>
			               	</div>
								</li>
								<li class="show-991">
									<div class="text-uppercase btn-register <?= ($lang == 'th' ? 'f-18 ff-anantason' : 'f-14'); ?>">
			               		<a href="#project" class="c-gold">project detail</a>
			               	</div>
								</li>
								<li class="show-991">
									<div class="text-uppercase btn-register <?= ($lang == 'th' ? 'f-18 ff-anantason' : 'f-14'); ?>">
			               		<a href="#gallery-section" class="c-gold">Gallery</a>
			               	</div>
								</li>
								<li class="show-991">
									<div class="text-uppercase btn-register <?= ($lang == 'th' ? 'f-18 ff-anantason' : 'f-14'); ?>">
			               		<a href="#service" class="c-gold">concierge service</a>
			               	</div>
								</li>
								<li class="show-991">
									<div class="text-uppercase btn-register <?= ($lang == 'th' ? 'f-18 ff-anantason' : 'f-14'); ?>">
			               		<a href="#promotions" class="c-gold">promotions</a>
			               	</div>
								</li>
								<li class="show-991">
									<div class="text-uppercase btn-register <?= ($lang == 'th' ? 'f-18 ff-anantason' : 'f-14'); ?>">
			               		<a href="#location" class="c-gold">location</a>
			               	</div>
								</li>
								<li class="show-991 social-icons">
									<a href="https://www.facebook.com/maisonblanche67" target="_blank">
										<div class="i-fb i-social-top"></div>
									</a>
									<a href="#">
										<div class="i-ig i-social-top"></div>
									</a>
									<a href="#">
										<div class="i-tw i-social-top"></div>
									</a>
									<a href="#">
										<div class="i-yt i-social-top"></div>
									</a>
								</li>
			           </ul>
			       </div>
			   </div>
			</nav>
		</div>
	</section>