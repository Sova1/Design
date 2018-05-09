<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Заголовок</title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/countdown/jquery.countdown.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/main.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/media.css" />
</head>
<body>

	<header class="top_header">
		<div class="top_line">
			<div class="container">
			<div class="col-md-12">
				<div class="row">
					<a href="#" class="logo"><?php bloginfo('name'); ?></a>
					<?php wp_nav_menu( array(
						'theme_location'  => '',
						'menu'            => '',
						'container'       => 'nav',
						'container_class' => 'maian_mnu clearfix',
						'container_id'    => '',
						'menu_class'      => 'maian_mnu clearfix',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					) ); ?>
					<nav class="maian_mnu clearfix">
					<button class="main_mnu_button hidden-md hidden-lg"><i class="fa fa-bars" aria-hidden="true"></i></button>
						<ul>
							<li class="active"><a href="#">Главная</a></li>
							<li><a href="#">О нас</a></li>
							<li><a href="#">Портфолио</a></li>
							<li><a href="#">Отзывы</a></li>
						</ul>
						<div class="top_contacts"><i class="fa fa-phone" aria-hidden="true"></i> 8-800-200-600</div>
					</nav>
					<h1><?php bloginfo('description'); ?></h1>
					
				</div>
			</div>
		</div>
		</div>

	</header>