	</div> 
	<!-- / Wrapper -->
	<footer class="footer">
		<div class="footer__top">
			<div class="container">
			  	<div class="row">
					<div class="col-xs-4 col-sm-2">
						<a class="footer__logo" href="<?php echo get_home_url(); ?>"></a>
					</div>
					<div class="col-xs-8 col-sm-10">
		  				<?php wp_nav_menu( array(
							'theme_location'  => 'footer',
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
							'items_wrap'      => '<ul class="footerNav">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) ); ?>

					</div>
				</div>
			</div>	
		</div>
		<div class="footer__bottom">
			<div class="container">
			  	<div class="row">
					<?php if ( is_active_sidebar( 'footer-text' ) ) : ?>
						<?php dynamic_sidebar( 'footer-text' ); ?>
					<?php endif; ?>
					<div class="col-xs-4 col-sm-2">
						<ul class="social">
							<li class="social__item">
		  						<a href="#"><i class="icon icon-facebook"></i></a>
		  					</li>
		  					<li class="social__item">
		  						<a href="#"><i class="icon icon-youtube"></i></a>
		  					</li>
						</ul>
					</div>
				</div>
			</div>		
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>