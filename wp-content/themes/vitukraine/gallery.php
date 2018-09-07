<?php
/*
Template Name: Gallery
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
					<div class="galleryWrap">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							
							<div class="galleryBlock">
								<div class="row">
									<div class="col-xs-12"> 
										<h2 class="galleryBlock__title"><?php the_field('title_photos'); ?></h2>
										<div class="gallerySlider">
											<?php if( have_rows('gallery_slides_photos') ): ?>
												<div class="owl-carousel">
												    <?php while ( have_rows('gallery_slides_photos') ) : the_row();
												    	$image = get_sub_field('image');
												    	$img_big = get_sub_field('img_big');
												     ?>
												    	<div class="gallerySlider__item">
											    			<figure class="gallerySlider__pic">
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


							<div class="galleryBlock">
								<div class="row">
									<div class="col-xs-12"> 
										<h2 class="galleryBlock__title"><?php the_field('title_video'); ?></h2>
										<div class="gallerySlider">
											<?php if( have_rows('gallery_slides_video') ): ?>
												<div class="owl-carousel">
												    <?php while ( have_rows('gallery_slides_video') ) : the_row();

												    	$video = get_sub_field('video');

												    ?>
												    	<div class="gallerySlider__item">
											    			<figure class="gallerySlider__pic">
																<iframe width="560" height="315" src="<?php echo $video['url']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
		</div>	

	</main>	
<?php get_footer();  ?>	