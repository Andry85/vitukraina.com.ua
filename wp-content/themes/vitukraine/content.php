<div class="newsBlock clearfix">
	<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	<?php if ( has_post_thumbnail()) { ?>
		<div class="thumbnail-img">
		   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
		   <?php the_post_thumbnail('thumbnail'); ?>
		   </a>	
		</div>
	 <?php } ?>
	 <p><?php the_content(); ?></p>
</div>	
	