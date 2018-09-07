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


			<?php the_content(); ?>	
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</main>	
<?php get_footer();  ?>	