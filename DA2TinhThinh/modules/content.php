<?php 

    include 'admin/modules/sanpham/config.php';
    $selectProduct = "SELECT * FROM sanpham inner join hinhanh on hinhanh.ID_hinhanh = sanpham.hinhanh LIMIT 10";
    $runsanpham = mysqli_query($conn, $selectProduct);
    

?>


<div class="maincontent-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="latest-product">
					<h2 class="section-title">Sản phẩm tốt nhất</h2>
					<div class="product-carousel">
					   <?php while($rowssanpham = mysqli_fetch_array($runsanpham)){?>
						<div class="single-product">
							<div class="product-f-image">
								<img src="img/<?php echo $rowssanpham['ha_hinh1']?>" alt="" style="width: 537px; height: 300px;">
								<div class="product-hover">
									<a href="index.php?xem=chitietsanpham&idsanpham=<?php echo $rowssanpham['id_sanpham'];?>" class="view-details-link"><i
										class="fa fa-link"></i> Xem thêm</a>
								</div>
							</div>

							<h2>
								<a href="index.php?xem=chitietsanpham&idsanpham=<?php echo $rowssanpham['id_sanpham'];?>"><?php echo $rowssanpham['sp_tensanpham']; ?></a>
							</h2>

							<div class="product-carousel-price">
								<p>Giá:<?php echo $rowssanpham['sp_giasanpham'];?>  </p>
							</div>
						</div>
						<?php }?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End main content area -->

<div class="brands-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="brand-wrapper">
					<div class="brand-list">
						<img src="img/brand1.png" alt=""> <img src="img/brand2.png" alt="">
						<img src="img/brand3.png" alt=""> <img src="img/brand4.png" alt="">
						<img src="img/brand5.png" alt=""> <img src="img/brand6.png" alt="">
						<img src="img/brand1.png" alt=""> <img src="img/brand2.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End brands area -->

<div class="product-widget-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="single-product-widget">
					<h2 class="product-wid-title">Tìm kiếm nhiều</h2>
					
					<?php 
                        $selectTop3 = "SELECT sanpham.ID_sanpham, sanpham.sp_tensanpham, sanpham.sp_tensanpham, sanpham.sp_giasanpham, hinhanh.ha_hinh1 FROM sanpham INNER JOIN the on sanpham.ID_sanpham = the.ID_sanpham INNER JOIN hinhanh on hinhanh.ID_hinhanh = sanpham.hinhanh ORDER BY the.timkiem LIMIT 3";
					    $run = mysqli_query($conn, $selectTop3);
					    while($dong = mysqli_fetch_array($run)){
					?>
					
					<div class="single-wid-product">
						<a href="index.php?xem=chitietsanpham&idsanpham=<?php echo $dong['id_sanpham']?>"><img src="img/<?php echo $dong['ha_hinh1']?>" alt="" class="product-thumb"></a>
						<h2>
							<a href="index.php?xem=chitietsanpham&idsanpham=<?php echo $dong['id_sanpham']?>"><?php echo $dong['sp_tensanpham']?></a>
						</h2>
						<div class="product-wid-rating">
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i>
						</div>
						<div class="product-wid-price">
							<p>Giá: <?php echo $dong['sp_giasanpham']?> </p>
						</div>
					</div>
					<?php }?>
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-product-widget">
					<h2 class="product-wid-title">Đã xem gần đây</h2>
					<?php 
                        $selectTop3 = "SELECT hinhanh.ha_hinh1, sanpham.ID_sanpham, sanpham.sp_tensanpham, sanpham.sp_tensanpham, sanpham.sp_giasanpham FROM sanpham INNER JOIN the on sanpham.ID_sanpham = the.ID_sanpham INNER JOIN hinhanh ON hinhanh.ID_hinhanh = sanpham.hinhanh ORDER BY the.timkiem LIMIT 3";
					    $run = mysqli_query($conn, $selectTop3);
					    while($dong = mysqli_fetch_array($run)){
					?>
					
					<div class="single-wid-product">
						<a href="index.php?xem=chitietsanpham&idsanpham=<?php echo $dong['id_sanpham']?>"><img src="img/<?php echo $dong['ha_hinh1']?>"
							alt="" class="product-thumb"></a>
						<h2>
							<a href="index.php?xem=chitietsanpham&idsanpham=<?php echo $dong['id_sanpham']?>"><?php echo $dong['sp_tensanpham']?></a>
						</h2>
						<div class="product-wid-rating">
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i>
						</div>
						<div class="product-wid-price">
							<p>Giá: <?php echo $dong['sp_giasanpham']?> </p>
						</div>
					</div>
					<?php }?>
					</div>
					
	
			</div>
			<div class="col-md-4">
				<div class="single-product-widget">
					<h2 class="product-wid-title">Sản phẩm</h2>
					
					<?php 
                        $selectTop3 = "SELECT hinhanh.ha_hinh1, sanpham.ID_sanpham, sanpham.sp_tensanpham, sanpham.sp_tensanpham, sanpham.sp_giasanpham FROM sanpham INNER JOIN the on sanpham.ID_sanpham = the.ID_sanpham INNER JOIN hinhanh ON hinhanh.ID_hinhanh = sanpham.hinhanh ORDER BY the.timkiem LIMIT 3";
					    $run = mysqli_query($conn, $selectTop3);
					    while($dong = mysqli_fetch_array($run)){
					?>
					
					<div class="single-wid-product">
						<a href="index.php?xem=chitietsanpham&idsanpham=<?php echo $dong['id_sanpham']?>"><img src="img/<?php echo $dong['ha_hinh1']?>"
							alt="" class="product-thumb"></a>
						<h2>
							<a href="index.php?xem=chitietsanpham&idsanpham=<?php echo $dong['id_sanpham']?>"><?php echo $dong['sp_tensanpham']?></a>
						</h2>
						<div class="product-wid-rating">
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i>
						</div>
						<div class="product-wid-price">
							<p>Giá: <?php echo $dong['sp_giasanpham']?> </p>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End product widget area -->
