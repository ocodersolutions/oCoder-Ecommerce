<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

/**
 * Initialize all the things.
 */
require 'inc/class-storefront.php';
require 'inc/jetpack/class-storefront-jetpack.php';
require 'inc/customizer/class-storefront-customizer.php';

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';

if ( is_woocommerce_activated() ) {
	require 'inc/woocommerce/class-storefront-woocommerce.php';
	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	require 'inc/admin/class-storefront-admin.php';
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woothemes/theme-customisations
 */
add_theme_support( 'menus' );
register_nav_menus(
        array(
                'main-nav' => 'top_main_menus'
        )
);

function test($title){ ?>

			<div class="products-heading">
				<h3><?php echo $title ?></h3>
			</div>
			<div class="products-grids">
			
	    		<?php
		        	$args = array( 'post_type' => 'product', 
			        	'posts_per_page' => 4, 
			        	'orderby' => 'DESC' );
	        		$loop = new WP_Query( $args );
	        		while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	        			<div class="col-md-3 product-left-grid">
							<div class="product-grid">
								<div class="product-grid-text">
	                    			<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
									</a>
	                        		<?php woocommerce_show_product_sale_flash( $post, $product ); ?>
									
	                       			<?php if (has_post_thumbnail( $loop->post->ID )) 
	                       					echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
	                       				else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
									<div class="products-grid-info">
	                        			<h3><?php the_title(); ?></h3>
										<h4>
											<a href="<?php echo get_category_link();?>">
												<?php echo $post->name; ?>
											</a>
										</h4>
										<p>
											<?php the_excerpt();?>
										</p>
			                        	<div class="price">
			                        		<?php echo $product->get_price_html(); ?>
			                        	</div>
			                        	<div class="like">
											<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/like.png" alt=""></a>
										</div>
										<div class="clearfix"> </div>
									</div>

									<div class="plus">
										<a href="<?php the_permalink();?>">
											<img src="<?php echo get_template_directory_uri();?>/assets/images/plus.png" alt="">
										</a>
									</div>
	                    			<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
	                			</div>
	                		</div>
	                	</div>
	    			<?php endwhile; ?>
	    		<?php wp_reset_query(); ?>
			</div>
		<?php	
}
add_action('echo_test','test');