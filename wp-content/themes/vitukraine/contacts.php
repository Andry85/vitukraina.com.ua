<?php
/*
Template Name: Contacts
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

						<div class="contactWrap">
							<div class="row">
								<div class="col-sm-4">
									<div class="contactInfo">
										<h1 class="contactInfo__title"><?php the_title(); ?></h1>
										<ul class="contactsBlockList">
											<li>
												<i class="icon icon-phone-icon"></i>
												<a href="tel:<?php the_field('phonelink'); ?>"><?php the_field('phone'); ?></a>
											</li>
											<li>
												<i class="icon icon-email-icon"></i>
												<a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
											</li>
											<li>
												<i class="icon icon-home-icon"></i>
												<span><?php the_field('address'); ?></span>
											</li>
											<li>
												<p><?php the_field('legaladress'); ?></p>
											</li>
										</ul>
										<?php the_content(); ?>
									</div>
								</div>
								<div class="col-sm-8">
									<div class="small-map">
										<?php if( get_field('map') ): ?>

											<img src="<?php the_field('map'); ?>" />

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