<?php 
include 'admin/modules/sanpham/config.php';
    $selectProduct = "select * from sanpham inner join hinhanh on hinhanh.id_hinhanh=sanpham.hinhanh where id_loaisanpham='$_GET[idloaisanpham]'";
    $runsanpham = mysqli_query($conn, $selectProduct);
?>


<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
		<?php 
		  while ($rows = mysqli_fetch_array($runsanpham))
		  {
		?>
			<div class="col-md-3 col-sm-6">
				<div class="single-shop-product">
					<div class="product-upper">
						<img src="img/<?php echo $rows['ha_hinh1']?>" alt="" style="width: 175px; height: 215px;">
					</div>
					<h2>
						<a href="index.php?xem=chitietsanpham&idsanpham=<?php echo $rows['ID_sanpham']?>">
						  <?php echo $rows['sp_tensanpham'];?>
						</a>
					</h2>
					<div class="product-carousel-price">
						<p>Giá: <?php echo $rows['sp_giasanpham'];?></p>
					</div>

					<div class="product-option-shop">
						<a class="add_to_cart_button" data-quantity="1"
							data-product_sku="" data-product_id="70" rel="nofollow"
							href="index.php?xem=chitietsanpham&idsanpham=<?php echo $rows['ID_sanpham']?>">Xem thêm</a>
					</div>
				</div>
			</div>
			<?php 
		       }
			?>

		<div class="row">
			<div class="col-md-12">
				<div class="product-pagination text-center">
					<nav>
						<ul class="pagination">
							<li><a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span>
							</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span>
							</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
