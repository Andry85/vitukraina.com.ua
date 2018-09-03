<?php get_header();  ?>
<div class="content clearfix">
	<div class="left-col">
		<?php get_sidebar(); ?>
	</div>
	<div class="right-col">
		<div class="inner">
				<?php if ( have_posts() ) : 

					the_archive_title('<h1 class="page-title">','</h1>');
					the_archive_description('<div class="taxonomy-description">','</div>');
					while ( have_posts() ) : the_post(); ?>
					
						<div class="newsBlock clearfix">
							<span class="date"><?php echo get_the_date(); ?></span>
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<?php if ( has_post_thumbnail()) { ?>
								<div class="thumbnail-img">
								   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
								   <?php the_post_thumbnail('thumbnail'); ?>
								   </a>	
								</div>
							 <?php } ?>
							 <p><?php the_excerpt(); ?></p>
						</div>	
					<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>					
				<?php endif; ?>	
				<nav class="paginator clearfix">
				    <ul>
				    	<li class="paginator-next"><?php next_posts_link( '&laquo; PREV') ?></li>
				        <li class="paginator-prev"><?php previous_posts_link( 'NEXT &raquo;') ?></li> 
				    </ul>
				</nav>			    
		</div> 
	</div>
</div>   
<?php get_footer();  ?>