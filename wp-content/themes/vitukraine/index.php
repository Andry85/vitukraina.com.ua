<?php get_header();  ?>
<div class="content clearfix">
	<div class="left-col">
		<?php get_sidebar(); ?>
	</div>
	<div class="right-col">
		<div class="inner">
			<div class="container">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				    <?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
				</div>
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'type' => 'post',
						'cat' => 7,
						'paged' => $paged

					);
					$lastPosts = new WP_Query($args);
						if ($lastPosts->have_posts() ) : 
							while ($lastPosts->have_posts() ) : $lastPosts->the_post(); ?>
							<?php get_template_part('content',get_post_format()); ?>	
						<?php endwhile;  ?>
							<nav class="paginator clearfix">
							    <ul>
							    	<li class="paginator-next"><?php next_posts_link( '&laquo; PREV', $lastPosts->max_num_pages) ?></li>
							        <li class="paginator-prev"><?php previous_posts_link( 'NEXT &raquo;', $lastPosts->max_num_pages) ?></li> 
							    </ul>
							</nav>
						<?php endif; 
					wp_reset_postdata();
				?>
			</div>
		</div> 
	</div>
</div>   
<?php get_footer();  ?>	