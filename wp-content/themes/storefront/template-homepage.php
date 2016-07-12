<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>
	<div class="banner">
			<!-- banner Slider starts Here -->
			<?php 		
				echo do_shortcode("[metaslider id=32]"); 
			?>
	</div>

	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<div class="col-md-4 bottom-grid">
					<a href="<?php echo get_permalink(93);?> ">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/3.jpg" alt="">
					</a>
					
					<div class="bottom-grid-info">
						<a href="<?php echo get_permalink(93);?>">GIÀY NAM</a>
						
					</div>
				</div>
				<div class="col-md-4 bottom-grid">
					<a href="<?php echo get_permalink(95);?> ">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/4.jpg" alt="">
					</a>
					<div class="bottom-grid-info">
						<a href="<?php echo get_permalink(95);?> ">GIÀY NỮ</a>
						
					</div>
				</div>
				<div class="col-md-4 bottom-grid">
					<a href="<?php echo get_permalink( 84);?>">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/5.jpg" alt="">
					</a>
					<div class="bottom-grid-info">
						<a href="<?php echo get_permalink( 84);?>">THỜI TRANG &amp; PHỤ KIỆN</a>
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<div class="products">
		<!-- container -->
		<div class="container">
			<div class="products-heading">
				<h3>SẢN PHẨM NỔI BẬT</h3>
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
								<a href="single.html"><img src="<?php echo get_template_directory_uri();?>/assets/images/plus.png" alt="">
								</a>
							</div>
                    		<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                			</div>
                		</div>
                	</div>
    			<?php endwhile; ?>
    			<?php wp_reset_query(); ?>
			
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
<!-- 
	<div class="products-bottom">
		container
		<div class="container">
			<div class="col-md-3 products-bottom-left">
				<h3>o <span>Free PSD</span></h3>
				<p>NEQUE PORRO  
					ERIKE SUPERUS DA
					DOLOREM IPSUM
					GOOD LUCK
				</p>
				<div class="social-icons">
					<ul>
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="chrome"></a></li>
						<li><a href="#" class="vimeo"></a></li>
						<li><a href="#" class="rss"></a></li>
				</ul></div>
			</div>
			<div class="col-md-5">
				<div class="products-bottom-middle">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dictum lectus 
						sit amet varius pulvinar. Proin vitae dui tincidunt nibh facilisis pellentesque. 
						Fusce tortor turpis, facilisis ut condimentum eu, sagittis at est.

						<span>Praesent egestas posuere urna a egestas. Maecenas facilisis orci vitae ante 
						tempor accumsan. Aenean aliquam justo ac sagittis vehicula. Nam mattis 
						pretium odio sit amet vulputate.
						</span>
						
						Quisque non lobortis orci. Morbi augue mauris, ultrices at fermentum ac, 
						consequat vitae magna. Pellentesque non cursus mi, eu cursus nunc. Nullam
						 et odio tristique, volutpat urna vitae, dignissim orci. Fusce eu nulla urna.
						This template was created by Erik Padamans.
					</p>
				</div>
			</div>
			<div class="col-md-4 map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2176.1155758807386!2d24.1204355!3d56.946821099999994!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1426480456493" frameborder="0" style="border:0"></iframe>
				<div class="location">
					<p>Stacijas laukums 2, Riga</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		//container
	</div>
 -->
	<div class="sign-up">
		<!-- container -->
		<div class="container">
			<div class="sign-up-left">
				<p><span>Đăng ký</span> để nhận ưu đãi mới nhất từ oE Shop	 </p>
			</div>
			<div class="sign-up-right">
				<form>
					<input type="text" value="email@gmail.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email@gmail.com';}" required="">
					<input type="submit" value="ĐĂNG KÝ">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
<?php
get_footer();
