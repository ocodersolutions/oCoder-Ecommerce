<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>SHOP GIÀY</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Biruang Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstarp-css -->
<!-- font-awesome -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome/css/font-awesome.min.css" type="text/css" media="all" />
<!--// font-awesome -->
<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" type="text/css" media="all" />
<!--// css -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/news/jquery.min.js"></script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!-- dropdown -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/news/jquery.easydropdown.js"></script>
<link href="<?php echo get_template_directory_uri();?>/assets/css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="<?php echo get_template_directory_uri();?>/assets/js/news/scripts.js" type="text/javascript"></script>
<!--js-->
<!--/js-->
<script src="<?php echo get_template_directory_uri();?>/assets/js/news/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	
<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/news/move-top.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/news/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
</head>
<body>
	<!-- header -->
	<div class="header">
		<!-- container -->
		<div class="container">
			<!-- header-top -->
			<div class="header-top">
				<div class="header-logo">
					<a href="index.html"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="" /></a>
				</div>
				<div class="header-right">
					<ul>
						<li class="phone">+371 282 20 760</li>
						<li class="mail"><a href="mailto:example@mail.com">eony321v@gmail.com</a></li>
						<li class="checkout">
							<a href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>">
								<span class="cart"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span>
								<span class="check">Giỏ hàng</span>
							</a>
							
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //header-top -->
			<div class="top-nav">
				<span class="menu"><img src="<?php echo get_template_directory_uri();?>/assets/images/menu.png" alt=""></span>
				<!--<ul class="nav">
					<li class="dropdown1"><a href="index.html">HOME</a>
						<ul class="dropdown2">
							<li><a href="single.html">lorem</a></li>
							<li><a href="single.html">dorem sia</a></li>
							<li><a href="single.html">erik</a></li>
							<li><a href="single.html">ipsum padamans</a></li>
							<li><a href="single.html">behance</a></li>
						</ul>
					</li>
					<li class="dropdown1"><a href="men.html">MEN</a>
						<ul class="dropdown2">
							<li><a href="men.html">Clothing</a></li>
							<li><a href="men.html">Footwear</a></li>
							<li><a href="men.html">Watches</a></li>
							<li><a href="men.html">Accessories</a></li>
						</ul>
					</li>     
					<li class="dropdown1"><a href="women.html">WOMEN</a>
						<ul class="dropdown2">
							<li><a href="women.html">Ethnic Wear</a></li>
							<li><a href="women.html">Western Wear</a></li>
							<li><a href="women.html">All Jewellery</a></li>
							<li><a href="women.html">Beauty & Wellness</a></li>
						</ul>
					</li>              
					<li class="dropdown1"><a href="women.html">KIDS</a>
						<ul class="dropdown2">
							<li><a href="women.html">Clothing</a></li>
							<li><a href="women.html">Footwear</a></li>
							<li><a href="women.html">Accessories</a></li>
						</ul>
					</li>  
					<li class="dropdown1"><a href="men.html">SALE</a>
						<ul class="dropdown2">
							<li><a href="">Clothing</a></li>
							<li><a href="">Footwear</a></li>
							<li><a href="">Watches</a></li>
							<li><a href="">Accessories</a></li>
						</ul>
					</li>  					           
					<li><a href="about.html">ABOUT US</a></li>            
					<li><a href="404.html">SUPPORT</a></li>
				</ul>-->
				<?php wp_nav_menu( array(
				     'theme_location' => 'main-nav', // tên location cần hiển thị
				     'container' => 'ul', // thẻ container của menu
				     'container_class' => 'dropdown2', //class của container
				     'menu_class' => 'nav' // class của menu bên trong
				) ); ?>
			</div>
			<div class="search">
				<form>
					<input type="text" value="Tìm kiếm..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tìm kiếm...';}" required="">
				</form>
			</div>
			<div class="clearfix"> </div>
			<!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.nav").slideToggle("slow" , function(){
					});
				});
		 </script>
		</div>
		<!-- //container -->
</div>
<!-- //header -->
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	