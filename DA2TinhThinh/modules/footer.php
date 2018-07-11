<?php 
include 'admin/modules/sanpham/config.php';
    $loaisanpham = "SELECT * FROM `loaisanpham` where trangthai = 'Bình thường' ORDER BY thutu DESC";
    $runloaisanpham = mysqli_query($conn, $loaisanpham);
    
?>

<div class="footer-top-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="footer-about-us">
					<h2>
						TT<span>KTPM</span>
					</h2>
					<p>Trung tâm TTKTPM là website chuyên cung cấp dịch vụ hỗ trợ giới
						thiệu các mẫu điện thoại từ những cửa hàng điện thoại vừa và nhỏ
						trong địa bàn thành phố Cần Thơ nhằm hỗ trợ việc kinh doanh của
						các cửa hàng điện thoại trở nên thuận tiện hơn</p>
					<div class="footer-social">
						<a href="#" target="_blank"><i class="fa fa-facebook"></i></a> <a
							href="#" target="_blank"><i class="fa fa-twitter"></i></a> <a
							href="#" target="_blank"><i class="fa fa-youtube"></i></a> <a
							href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
			</div>


			<div class="col-md-3 col-sm-6">
				<div class="footer-menu">
					<h2 class="footer-wid-title">Danh mục</h2>
					<ul>
					<?php 
				    while ($rows = mysqli_fetch_array($runloaisanpham))
				    {
				        ?>
						<li><a href="index.php?xem=danhsachsanpham&idloaisanpham=<?php echo $rows['id_loaisanpham']; ?>"><?php echo $rows['tenloaisanpham']; ?></a></li>
						<?php }?>
					</ul>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="footer-newsletter">
					<h2 class="footer-wid-title">Đăng ký</h2>
					<p>Đăng ký nhận bản tin của chúng tôi và nhận được các hợp đồng độc
						quyền bạn không tìm thấy bất cứ nơi nào. Điền email của bạn</p>
					<div class="newsletter-form">
						<form action="modules/dangkynhantin.php" method="post" enctype="mutipart/form-data">
							<input type="email" placeholder="Địa chỉ email của bạn" name="email"> 
							<input type="submit" onclick="alert('Cảm ơn bạn đã đăng ký');"  name="dangky" value="Đăng ký">
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End footer top area -->

<div class="footer-bottom-area">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="copyright">
					<p>&copy; 2017 Design by Tinh Phan</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="footer-card-icon">
					<i class="fa fa-cc-discover"></i> <i class="fa fa-cc-mastercard"></i>
					<i class="fa fa-cc-paypal"></i> <i class="fa fa-cc-visa"></i>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End footer bottom area -->