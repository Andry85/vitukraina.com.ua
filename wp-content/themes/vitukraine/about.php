<?php
/*
Template Name: About
*/
?>
<?php get_header();  ?>
	<main class="main">

		<div class="container">
		  	<div class="row">
				<div class="col-xs-12">

					<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					    <?php if(function_exists('bcn_display'))
					    {
					        bcn_display();
					    }?>
					</div>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>


						<div class="aboutGallery">
							<div class="row">
				  				<div class="col-xs-12">	
									
			  						<div class="aboutGallerySlider">
										<?php if( have_rows('about_slider') ): ?>
											<div class="owl-carousel">
											    <?php while ( have_rows('about_slider') ) : the_row();
											    	$image = get_sub_field('image');
											    	$img_big = get_sub_field('img_big');
											     ?>
											    	<div class="aboutGallerySlider__item">
										    			<figure class="aboutGallerySlider__pic">
															<a rel="group" href="<?php echo $img_big['url']; ?>" title="">
															<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
															</a>
														</figure>
													</div>
											    <?php endwhile; ?>
									    	</div>
										   <?php else : ?>
										<?php endif; ?>
									</div>

								</div>
							</div>
						</div>


					<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>

				</div>	
			</div>
		</div>	

	</main>	
<?php get_footer();  ?>	