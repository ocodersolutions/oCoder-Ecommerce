<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' );?>
		<!-- <?php
			/**
			 * woocommerce_before_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 */
			//do_action( 'woocommerce_before_main_content' );
		?>
			<div class="single">
				<div class="container">
					<div class="single-grids">
						<div class="col-md-9">
						<?php //while ( have_posts() ) : the_post(); ?>

							<?php //wc_get_template_part( 'content', 'single-product' ); ?>

						<?php //endwhile; // end of the loop. ?>
						</div>
					</div>
				</div>
			</div>

		<?php

			/**
			 * woocommerce_after_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			//do_action( 'woocommerce_after_main_content' );
		?>

		<?php
			/**
			 * woocommerce_sidebar hook.
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			//do_action( 'woocommerce_sidebar' );
		?> -->
	

<div class="single">
		<!-- container -->
		<div class="container">
			<div class="single-grids">
				<div class="col-md-9">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="single-left-left">
						<ul id="etalage" class="etalage" >
						<?php 
							$url = wp_get_attachment_url( get_post_thumbnail_id() );
						?>
						<li class="etalage_thumb ">
								<a href="<?php the_permalink(); ?>">
									<img class="etalage_thumb_image" src="<?php echo $url ?>">
									<img class="etalage_source_image" src="<?php echo $url?>" title="">
								</a>
							</li>
						<?php
							 global $product;
							 $attachment_ids = $product->get_gallery_attachment_ids();

							foreach( $attachment_ids as $attachment_id ) 
							{
								 $image_link = wp_get_attachment_url( $attachment_id )
							  ?>
							  <li class="etalage_thumb">
								<a href="<?php the_permalink(); ?>">
									<img class="etalage_thumb_image" src="<?php echo $image_link ?>">
									<img class="etalage_source_image" src="<?php echo $image_link ?>" title="">
								</a>
							</li>
							<?php }	?>
						</ul>
						<div class="clearfix"></div>		
					</div>
				<?php endwhile; // end of the loop. ?>

					
					<div class="single-left-right">
						<div class="single-left-info">
							<h3>PRODUCT NAME HERE</h3>
							<a href="#" class="view">View product details</a>
							<p>$ 20 <a href="#" class="view">CLICK FOR OFFER</a></p>
						</div>
						<div class="select-size">
							<p>Select a size</p>
								<ul>
									 <li><a href="#">S</a></li>
									 <li><a href="#">M</a></li>
									 <li><a href="#">L</a></li>
									 <li><a href="#">XL</a></li>
								</ul>
							<div class="buy-now">
								<a href="#">BYE NOW</a>
							</div>
							<div class="wishlist">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog2">Add to Wishlist</a>
								<!-- pop-up-box -->
								<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/modernizr.custom.min.js"></script>    
								<link href="<?php echo get_template_directory_uri();?>/assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
								<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
								<!--//pop-up-box -->
								<div id="small-dialog2" class="mfp-hide">
									<h3>Create Account</h3> 
									<div class="social-sits">
										<ul>
											<li><a class="fb" href="#">Connect with Facebook</a></li>
											<li><a class="fb google" href="#">Connect with Google</a></li>
										</ul>
									</div>
									<div class="signup">
										<form>
											<input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" />
											<input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
											<input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />
											<input type="submit"  value="Sign In"/>
										</form>
									</div>
									<div class="clearfix"> </div>
								</div>	
								<script>
										$(document).ready(function() {
										$('.popup-with-zoom-anim').magnificPopup({
											type: 'inline',
											fixedContentPos: false,
											fixedBgPos: true,
											overflowY: 'auto',
											closeBtnInside: true,
											preloader: false,
											midClick: true,
											removalDelay: 300,
											mainClass: 'my-mfp-zoom-in'
										});
																										
										});
								</script>	
							</div>
							<div class="clearfix"> </div>
							<div class="free">
								<p>20 day returns Free Delivery *</p>
							</div>
							<div class="delivery">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog">Check delivery options</a>
								<div id="small-dialog" class="mfp-hide">
									<h3>DELIVERY TIME & COD AVAILABILITY</h3>
									<div class="social-sits">
										<p>Please enter your PIN Code to check delivery time & Cash On Delivery availability</p>
									</div>
									<div class="signup">
											<form>
												<input type="text" class="email" placeholder="Pin" maxlength="6" required="required" pattern="[1-9]{1}\d{5}"/>
												<input type="submit"  value="Submit"/>
											</form>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="product-details">
						<h3>PRODUCT DETAILS</h3>
						<p><?php echo $post->post_content ?> 
						</p>
					</div>
					<div class="related">
						<h3>RELATED PRODUCTS</h3>
						<div class="related-grids">
							<div class="related-grid">
								<div class="col-md-9 related-left">
									<div class="col-md-3 related-left-left">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/c1.jpg" alt="" />
									</div>
									<div class="col-md-9 related-left-right">
										<h5>Vestibulum</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a est at leo dictum 
											pharetra vel sit amet tellus.
										</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-3 related-right">
									<p>$ 19</p>
									<a href="#">Add to cart</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="related-grid">
								<div class="col-md-9 related-left">
									<div class="col-md-3 related-left-left">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/c2.jpg" alt="" />
									</div>
									<div class="col-md-9 related-left-right">
										<h5>Vestibulum</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a est at leo dictum 
											pharetra vel sit amet tellus.
										</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-3 related-right">
									<p>$ 19</p>
									<a href="#">Add to cart</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="related-grid">
								<div class="col-md-9 related-left">
									<div class="col-md-3 related-left-left">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/c3.jpg" alt="" />
									</div>
									<div class="col-md-9 related-left-right">
										<h5>Vestibulum</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a est at leo dictum 
											pharetra vel sit amet tellus.
										</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-3 related-right">
									<p>$ 19</p>
									<a href="#">Add to cart</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 side-bar">
					<div class="categories">
						<h3>CATEGORIES</h3>
						<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>
						<!-- <ul>
							<li><a href="#">accessories</a></li>
							<li><a href="#">basics</a></li>
							<li><a href="#">jackets</a></li>
							<li><a href="#">jeans</a></li>
							<li><a href="#">knits</a></li>
							<li><a href="#">overalls</a></li>
							<li><a href="#">over coats</a></li>
							<li><a href="#">shoes</a></li>
							<li><a href="#">sweatshirts</a></li>
							<li><a href="#">trousers</a></li>
							<li><a href="#"><del>tops</del></a></li>
							<li><a href="#">watersuits</a></li>
						</ul> -->
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //single -->
	<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
	<?php get_footer( 'shop' ); ?>