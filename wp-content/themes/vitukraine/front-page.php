<?php
/*
Template Name: Main Page
*/
?>
<?php get_header();  ?>
	<main class="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			
			<div class="mainSlider">
				<?php if( have_rows('main_slider') ): ?>
					<div class="owl-carousel">
					    <?php while ( have_rows('main_slider') ) : the_row();

					    	$button_link = get_sub_field('button_link');
					    	$image = get_sub_field('image');

					    ?>
					    	
					    	<div class="mainSlider__item" style="background-image: url(<?php echo $image['url']; ?>);">
								<div class="container">
									<div class="row">
						  				<div class="col-xs-12">
						  					<h2><?php the_sub_field('title'); ?></h2>
						  					<a class="button" href="<?php echo $button_link['url']; ?>"><?php the_sub_field('button_name'); ?></a>
						  				</div>
						  			</div>	
								</div>
							</div>

					    <?php endwhile; ?>
			    	</div>
				   <?php else : ?>
				<?php endif; ?>
			</div>


			<?php $link_about = get_field('link_about'); ?>
			<div class="aboutBlock">
				<div class="container">
					<div class="row">
		  				<div class="col-xs-12">	
							<h2 class="aboutBlock__title"><?php the_field('title_about'); ?></h2>
							<p><?php the_field('text_about'); ?></p>
							<a class="button" href="<?php echo $link_about['url']; ?>"><?php the_field('link_about_text'); ?></a>
						</div>
					</div>
				</div>	
			</div>


			<div class="partnersBlock">
				<div class="container">
					<div class="row">
		  				<div class="col-xs-12">	
							<h2 class="partnersBlock__title"><?php the_field('partners_title'); ?></h2>
							

							<div class="partnersSlider">
								<?php if( have_rows('partners_slider') ): ?>
									<div class="owl-carousel">
									    <?php while ( have_rows('partners_slider') ) : the_row();
									    	$image = get_sub_field('image');
									    	$title = get_sub_field('title');
									     ?>
									    	<div class="partnersSlider__item">
								    			<figure class="partnersSlider__pic">
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
													<figcaption class="partnersSlider__title">
														<?php the_sub_field('title'); ?>
													</figcaption>
												</figure>
											</div>
									    <?php endwhile; ?>
							    	</div>
								   <?php else : ?>
								<?php endif; ?>
							</div>
							<?php $partners_link_url = get_field('partners_link_url'); ?>
							<a class="button" href="<?php echo $partners_link_url['url']; ?>">
								<?php the_field('partners_link_text'); ?>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="contactsBlock">
				<div class="contactsBlock__info">
					<ul class="contactsBlockList">
						<li>
							<i class="icon icon-home-icon"></i>
							<span><?php the_field('contacts_adress'); ?></span>
						</li>
						<li>
							<i class="icon icon-phone-icon"></i>
							<a href="tel:<?php the_field('contacts_phone_link'); ?>"><?php the_field('contacts_phone'); ?></a>
						</li>
					</ul>
				</div>
				<div class="contactsBlock__map">
					<?php if( get_field('contacts_map') ): ?>
						<img src="<?php the_field('contacts_map'); ?>" />
					<?php endif; ?>
				</div>
			</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</main>	
<?php get_footer();  ?>	