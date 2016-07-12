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
	<!-- show products -->
	<div class="products-grids">
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
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //end show products -->
	<!-- google map -->
	<div class="products-bottom">
		<!-- container -->
		<div class="container">
			<div class="products-heading">
				<h3>DỊCH VỤ NHANH CHÓNG</h3>
			</div>
			<div class="transport">
				<div class="col-md-8 products-bottom-left train">
					<div class="col-md-4 col-xs-12">
						<div class="row">
							<div class="boxed-content-title">	
			                    <i class="fa fa-plane" aria-hidden="true"></i>
		                     	<div class="sub_text">
			                     	<h5 class="boxed-content-title">GIAO HÀNG TOÀN QUỐC</h5>
			                    	<p>Miễn phí khi mua nhiều</p>
			                    </div>
			                </div>
			            </div>
	                </div>
	                <div class="col-md-4 col-xs-12">
						<div class="row">
							<div class="boxed-content-title">	
			                    <i class="fa fa-mobile" aria-hidden="true"></i>
			                    <div class="sub_text">
				                    <h5 class="boxed-content-title">ĐẶT HÀNG NHANH</h5>
				                    <p>(0543) 679 999</p>
			                    </div>
			                </div>
			            </div>
	                </div>
	                <div class="col-md-4 col-xs-12">
	                	<div class="row">
							<div class="boxed-content-title">	
			                    <i class="fa fa-refresh" aria-hidden="true"></i>
		                      	<div class="sub_text">
				                    <h5 class="boxed-content-title">BẢO HÀNH 356 NGÀY</h5>
				                    <p>Đổi trả trong 7 ngày</p>
				                </div>
			                </div>
		                </div>
	                </div>
					
				</div>
			
				<div class="col-md-4 map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1352.9227357145346!2d107.5830856337928!3d16.442929343779422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a150dfb2fffd%3A0xfc0aa39c64fdaa38!2zMjI3IFBoYW4gQuG7mWkgQ2jDonUsIFRyxrDhu51uZyBBbiwgdHAuIEh14bq_LCBUaOG7q2EgVGhpw6puIEh14bq_LCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1468317310794" frameborder="0" style="border:0" allowfullscreen></iframe>
					<div class="location">
						<p>227, Phan Bội Châu</p>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- google map -->
	<!-- sign-up -->
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
	<!--//sign-up -->
<?php
get_footer();
