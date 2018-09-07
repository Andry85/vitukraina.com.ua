<?php
/*
Template Name: Partners
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

						<div class="row">
							<div class="col-xs-12">
								<div class="partners">
									<h1 class="partners__title"><?php the_title(); ?></h1>

									<?php if( have_rows('partners') ): ?>

										<ul class="partnersList">
										    <?php while ( have_rows('partners') ) : the_row();
										    	$image = get_sub_field('image');
										     ?>
										    	<li class="partnersList__item">
													<figure class="partnersList__pic">
														<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
														<figcaption class="partnersList__title"><?php the_sub_field('title'); ?></figcaption>
													</figure>
													<p class="partnersList__city"><?php the_sub_field('city'); ?></p>
												</li>

										    <?php endwhile; ?>
								    	</ul>

									   <?php else : ?>


									<?php endif; ?>


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