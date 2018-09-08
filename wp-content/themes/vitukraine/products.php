<?php
/*
Template Name: Products
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
					<div class="productsWrap">
						<div class="row">
							<div class="col-xs-12">
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<?php the_content(); ?>

									<div class="productInfo">
										<div class="row">
											<div class="col-sm-5">
												<figure class="productInfo__pic">
													<?php if( get_field('image_left_block') ): ?>
														<img src="<?php the_field('image_left_block'); ?>" />
													<?php endif; ?>
												</figure>
											</div>
											<div class="col-sm-6">
												<div class="productInfo__text">
													<?php the_field('text_left_block'); ?>
												</div>
											</div>
										</div>
									</div>	

									<div class="certificate">
										<div class="row">
											<div class="col-sm-5 col-sm-offset-1">
												<div class="certificate__text">
													<?php the_field('text_right_block'); ?>
												</div>
											</div>
											<div class="col-sm-4 col-sm-offset-1">
												<figure class="certificate__pic">
													<?php if( get_field('image_link_right_block') ): ?>
														<a href="<?php the_field('image_link_right_block'); ?>">
															<?php if( get_field('image_right_block') ): ?>
																<img src="<?php the_field('image_right_block'); ?>" />
															<?php endif; ?>
														</a>
													<?php endif; ?>	
												</figure>
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
			</div>
		</div>	

	</main>	
<?php get_footer();  ?>	