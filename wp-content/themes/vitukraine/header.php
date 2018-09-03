<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php wp_title() ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?>
</head>
<body>
	<div class="wrap">
		
		<header class="header">
			<div class="header__top">
				<div class="container">
				  	<div class="row">
						<div class="col-xs-4 col-sm-3 col-md-4 col-lg-5">
							 <?php if ( is_front_page() ): ?>

								    <a class="logo" href="<?php echo get_home_url(); ?>">
									 	<h1><?php bloginfo('name'); ?></h1>
									</a>

							<?php else: ?>

								    <a class="logo" href="<?php echo get_home_url(); ?>">
										<div class="h1"><?php bloginfo('name'); ?></div>
									</a>

							<?php endif ?>
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
