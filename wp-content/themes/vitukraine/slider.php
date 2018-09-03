<div class="servises">
	<h3>
		<?php echo get_post_meta($post->ID, 'right-sidebar-title', true); ?>
	</h3>
	<div class="slider">
		<div id="mycarousel" class="servises-list owl-carousel clearfix">
			<?php 
				$countLists = 2;
				$argsWrap = array(
					'type' => 'post',
					'cat' => 4,
					'posts_per_page' => $countLists

				);
				$listNumbers = new WP_Query($argsWrap);
				if ($listNumbers->have_posts() ) : 
					$count = 0;
					while ($listNumbers->have_posts() ) : $listNumbers->the_post(); ?>
					<div class="servises-list-item">	
					<?php 
						$args = array(
							'type' => 'post',
							'cat' => 4,
							'posts_per_page' => $countLists,
							'offset' => $count
						);
						$listServices = new WP_Query($args);
						if ($listServices->have_posts() ) : 
							while ($listServices->have_posts() ) : $listServices->the_post(); ?>
								<div class="clearfix">
									<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
									<?php if ( has_post_thumbnail()) { ?>
									   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
									   	<?php the_post_thumbnail('thumbnail'); ?>
									   </a>	
									 <?php } ?>
									<p><?php the_excerpt(); ?></p>
								</div>
						<?php endwhile; 
						endif; 
						wp_reset_postdata();
					?>	
					</div>
					<?php $count = $count + 2; ?>
				<?php endwhile; 
				endif; 
				wp_reset_postdata();
			 ?>
		</div>
	</div>
</div> 