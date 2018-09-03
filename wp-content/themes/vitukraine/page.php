<?php get_header();  ?>
<div class="content clearfix">
	<div class="left-col">
		<?php get_sidebar(); ?>
	</div>
	<div class="right-col">
		<div class="inner">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				    <?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
				</div>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part('pageContent'); ?>	
				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>				    
		</div> 
	</div>
</div>   
<?php get_footer();  ?>