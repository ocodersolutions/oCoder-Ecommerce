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
			<!-- 	<div class="col-md-3 product-left-grid">
				<div class="product-grid">
					<div class="sap_tabs">	
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<div class="resp-tabs-container">
								<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span></h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<div class="facts">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/t1.jpg" class="img-responsive" alt=""> 
									</div>
								</div>	
								<h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span></h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/t2.jpg" class="img-responsive" alt="">   
									</div>
								</div>	
								<h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span></h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<div class="facts">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/t3.jpg" class="img-responsive" alt=""> 
									</div>
								</div>	         	  
							</div>
							<ul class="resp-tabs-list">
								<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><span><img src="<?php echo get_template_directory_uri();?>/assets/images/t1.jpg" class="img-responsive" alt=""></span></li>
								<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><img src="<?php echo get_template_directory_uri();?>/assets/images/t2.jpg" class="img-responsive" alt=""></span></li>
								<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><img src="<?php echo get_template_directory_uri();?>/assets/images/t3.jpg" class="img-responsive" alt=""></span></li>
								<div class="clearfix"> </div>
							</ul>	
						</div>
					</div>
					<div class="products-grid-info">
						<h3>Nike Tailwind Loose</h3>
						<h4>Running Tank Top</h4>
						<p>The Nike Tailwind Loose Women's Running Tank 
							Top is made with sweat-wicking fabric to help you 
							stay dry and comfortable on your run.
						</p>
						<div class="price">
							<p>$ 36.99</p>
						</div>
						<div class="like">
							<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/like.png" alt=""></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			 -->
			<?php
			 	global $post;
			 	$recent_posts = get_posts('numberposts=8');
			 	foreach ($$recent_posts as $post) { ?>
			 		<div class="col-md-3 product-left-grid">
						<div class="product-grid">
							<div class="product-grid-text">
								<a href="<?php the_permalink();?>">
									<?php the_post_thumbnail('large', array('class' =>'img-responsive'));?>
								</a>
								<div class="products-grid-info">
									<h3>
										<a href="<?php the_permalink();?>">
											<?php the_title();?>
										</a>
									</h3>
									<h4>
										<a href="<?php echo get_category_link();?>">
											<?php echo $post->name?>
										</a>
									</h4>
									<p>
										<?php the_excerpt();?>
									</p>
									<div class="price">
										<p>$ 70.00</p>
									</div>
									<div class="like">
										<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/like.png" alt=""></a>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="plus">
									<a href="single.html"><img src="<?php echo get_template_directory_uri();?>/assets/images/plus.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>
			<?php }?>

				<div class="clearfix"> </div>
			</div>
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
