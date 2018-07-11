<?php 
include 'admin/modules/sanpham/config.php';
    $selectProduct = "SELECT * FROM sanpham INNER JOIN hinhanh on hinhanh.ID_hinhanh = sanpham.hinhanh LIMIT 11,20";
    $runsanpham = mysqli_query($conn, $selectProduct);
?>


<div class="slider-area">
	<!-- Slider -->
	<div class="block-slider block-slider4">

		<ul class="" id="bxslider-home4">
					<?php 
				       
				        while($rowssanpham = mysqli_fetch_array($runsanpham)){ 
				    ?>
	<li><img src="img/<?php echo $rowssanpham['ha_hinh1']?>" alt="Slide" style="width: 450px; height: 450px;" >
				<div class="caption-group">

					<h2 class="caption title">
						<span class="primary"><strong><?php echo $rowssanpham['sp_tensanpham']?></strong></span>
					</h2>
					<h4 class="caption subtitle" style="color: red; font-weight: bold;"><?php echo $rowssanpham['sp_giasanpham']?></h4>
					<a class="caption button-radius" href="index.php?xem=chitietsanpham&idsanpham=<?php echo $rowssanpham['id_sanpham']?>"><span class="icon"></span>Xem
						thêm</a>
				</div></li>
				<?php }?>
		</ul>
		
	</div>
	<!-- ./Slider -->
</div>
<!-- End slider area -->