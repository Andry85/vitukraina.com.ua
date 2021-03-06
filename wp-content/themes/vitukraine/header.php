<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php wp_title() ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MGGXJDB');</script>
	<!-- End Google Tag Manager -->
	<?php wp_head(); ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGGXJDB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	
	<div class="wrap">
		
		<header class="header">
			<div class="header__top">
				<div class="container">
				  	<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-5">
							 <?php if ( is_front_page() ): ?>

								    <a class="logo" href="<?php echo get_home_url(); ?>">
									 	<h1><?php bloginfo('name'); ?></h1>
									</a>

							<?php else: ?>

								    <a class="logo" href="<?php echo get_home_url(); ?>">
										<div class="h1"><?php bloginfo('name'); ?></div>
									</a>

							<?php endif ?>

							<ul class="certificatesList">
								<li class="certificatesList__item">
									<a target="_blank" href="<?php echo get_template_directory_uri(); ?>/img/certificat_1-big.png">
										<img src="<?php echo get_template_directory_uri(); ?>/img/certificat_1-small.png">
									</a>
								</li>
								<li class="certificatesList__item">
									<a target="_blank" href="<?php echo get_template_directory_uri(); ?>/img/certificat_2-big.png">
										<img src="<?php echo get_template_directory_uri(); ?>/img/certificat_2-small.png">
									</a>
								</li>
							</ul>

						</div>
						<div class="col-sm-7 col-md-6 col-lg-5 hidden-xs hidden-sm">
							<ul class="header__contacts">
								<li>
									<i class="icon icon-phone-icon"></i>
									<a href="tel:+380977907677">+38-097-790-76-77</a>
								</li>
								<li>
									<i class="icon icon-email-icon"></i>
									<a href="mailto:vitukraina@ukr.net">vitukraina@ukr.net</a>
								</li>
							</ul>
						</div>
						<div class="col-sm-2 hidden-xs hidden-sm">
							<ul class="languages">
								<?php pll_the_languages( array( 'show_flags' => 1,'show_names' => 1 ) ); ?>	
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="header__bottom">
				<div class="container">
				  	<div class="row">
				  		<div class="col-xs-12">
			  				<?php wp_nav_menu( array(
								'theme_location'  => 'main',
								'menu'            => '',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => '',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul class="menu">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							) ); ?>
				  		</div>
				  	</div>
				</div>
			</div>	
		</header>
