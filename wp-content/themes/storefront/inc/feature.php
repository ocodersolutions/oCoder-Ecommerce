  <div class="silder">	
    <ul id="accordion2">
    <?php 
    	global $cate;
    	$args = array('numberposts'=> 3, 'category' =>3, 'orderby'=>'DESC');
    	$custom_post = get_posts($args);
    	foreach ($custom_post as $post) : setup_postdata( $post );?>
	    	<li class="slide_opened">
	    		<?php if ( has_post_thumbnail() ) : ?>
				    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				        <?php the_post_thumbnail('thumbnail', array ('class'=>'slide_thumb')); ?>
				    </a>
				<?php endif; ?>
	            
	            <p class="slide_title">	
	                <strong><?php the_title() ?></strong></p>
	            <p class="slide_content"><?php the_excerpt();?></p>
	            <!-- <p class="slide_button">
	            	<a href="<?php the_permalink();?>">Xem thêm</a>
	            </p> -->
	        </li>
    <?php endforeach; wp_reset_postdata(); ?>
    </ul>
</div>
