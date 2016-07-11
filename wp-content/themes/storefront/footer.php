<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<div id="colophon" class="footer" role="contentinfo">
			<!-- container -->
		<div class="container">
			<div class="col-md-3 stores-grid">
				<div class="stores">
					<h3>Về oE Shop</h3>
					<ul>
						<li>SHOP GIÀY OE THỜI TRANG</li>
						<li>
							Địa chỉ:
							1401 South Grand Avenue 
						</li>
						<li>Email: lol@gmail.com </li>
						<li>SĐT: 595959595959</li>
						
					</ul>
				</div>
				<div class="social-icons white-icons">
					<ul>
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="chrome"></a></li>
						<li><a href="#" class="vimeo"></a></li>
						<li><a href="#" class="rss"></a></li>
				</div>
			</div>
			<div class="col-md-3 blog">
				<h3>HỖ TRỢ KHÁCH HÀNG</h3>
				<div class="support-grids support-cus">
					<div class="support-left">
						<ul>
							<li><a href="#">Chính sách đổi trả</a></li>
							<li><a href="#">Chính sách bảo hành</a></li>
							<li><a href="#">Tìm hiểu về mua trả góp</a></li>
							<li><a href="#">Giao hàng & Thanh toán</a></li>
							<li><a href="#">Tìm trung tâm bảo hành chính Hãng</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 support">
				<h3>CÓ THẮC MẮC</h3>
				<div class="support-left">
					<ul> 
						<li>Bán hàng (8:00 - 22:00) <br> 
						<span class="hottel">1900 00000.00</span> 
							Hoặc 
						<span class="hottel">2342342342343</span><br>
						 Góp ý, khiếu nại (8:00 - 22:00)<br> 
						 <span class="hottel">234234324657</span> 
						 Hoặc <span class="hottel">43542352322</span><br> 
						 Bảo hành sản phẩm (8:00 - 22:00)<br> <span class="hottel">5464544564562</span></li> </ul>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 contact">
			<h3>NHẬN TIN KHUYẾN MÃI MỚI NHẤT</h3>
				<form>
					<input type="text" value="Email của bạn" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your e-mail...';}" required="">
					<input type="submit" value="Đăng ký">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- // container -->

	</div><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
