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
							<?php the_content(); ?>	
						<?php endwhile; else : ?>
							<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</div>
				</div>	
			</div>
		</div>	

	</main>	
<?php get_footer();  ?>	