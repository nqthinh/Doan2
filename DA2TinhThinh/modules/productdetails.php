<?php
include 'admin/modules/sanpham/config.php';
$selectID = "SELECT * from SANPHAM INNER JOIN THE ON sanpham.ID_sanpham = the.ID_sanpham INNER JOIN HINHANH ON HINHANH.ID_hinhanh = SANPHAM.hinhanh WHERE sanpham.ID_sanpham = '$_GET[idsanpham]'";
$rowssanpham = mysqli_query($conn, $selectID);
$dongctsp =  mysqli_fetch_array($rowssanpham);

$selectNewProduct = "SELECT * FROM SANPHAM INNER JOIN HINHANH ON HINHANH.ID_HINHANH = SANPHAM.HINHANH ORDER BY sanpham.ID_sanpham DESC LIMIT 0,10";
$rowsNewProduct = mysqli_query($conn,$selectNewProduct);


$select = "SELECT * FROM SANPHAM LIMIT 3,7";
$rowsSearchProduct = mysqli_query($conn, $select);

?>




<div class="product-big-title-are a">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Chi tiết sản phẩm</h2>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="single-sidebar">
					<h2 class="sidebar-title">Tìm kiếm</h2>
					<form action="" method="get">
						<input type="text"  name ="keywords" autocomplete="off" placeholder="Tìm sản phẩm..."> 
						<input type="submit" value="Tìm">
					</form>
				</div>

				<div class="single-sidebar">
					<h2 class="sidebar-title">Tìm kiếm nhiều nhất</h2>
					<?php while($dongtimkiem=mysqli_fetch_array($rowsSearchProduct)){?>
					<div class="thubmnail-recent">
						<img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
						<h2>
							<a href="index.php?xem=chitietsanpham&idsanpham=<?php echo $dongtimkiem['ID_sanpham']?>"><?php echo $dongtimkiem['sp_tensanpham']?></a>
						</h2>
						<div class="product-sidebar-price">
							<p>Giá: <?php echo $dongtimkiem['sp_giasanpham']?></p>
						</div>
					</div>
					<?php } ?>
				</div>

				
			</div>

			<div class="col-md-8">
				<div class="product-content-right">
					<div class="product-breadcroumb">
						<a href="">Trang chủ</a> <a href="index.php?xem=danhsachsanpham">Sản phẩm</a>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="product-images">
								<div class="product-main-img">
									<img src="img/<?php echo $dongctsp['ha_hinh1']?>" alt="" style="width: 175px; height: 215px;">
								</div>

								<div class="product-gallery">
									<img src="img/<?php echo $dongctsp['ha_hinh2']?>" style="width: 100px; height: 150px;" alt="Chitietsanpham"> 
									<img src="img/<?php echo $dongctsp['ha_hinh3']?>" style="width: 100px; height: 150px;"style="width: 150px; height: 200px;" alt="Chitietsanpham"> 
								    <img src="img/<?php echo $dongctsp['ha_hinh4']?>" style="width: 100px; height: 150px;" alt="Chitietsanpham">
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="product-inner">
								<h2 class="product-name"><?php echo $dongctsp['sp_tensanpham']?></h2>
								<div class="product-inner-price">
									<p>Giá: <?php echo $dongctsp['sp_giasanpham']?></p>
								</div>


								<div class="product-inner-category">
									<p>
										Tags: <a href="index.php?xem=danhsachsanpham&idloaisanpham=<?php echo $dongctsp['id_loaisanpham']?>"><?php while($dongctsp_the = mysqli_fetch_array($rowssanpham)){ echo $dongctsp_the['tenthe'];}?></a>
									</p>
								</div>
							</div>

						</div>
					</div>
					<div class=row>
						<div role="tabpanel">
							<ul class="product-tab" role="tablist">
								<li role="presentation" class="active"><a href="#home"
									aria-controls="home" role="tab" data-toggle="tab">Mô tả</a></li>
								<li role="presentation"><a href="#profile"
									aria-controls="profile" role="tab" data-toggle="tab">Đánh giá</a></li>
								<li role="presentation"><a href="#details"
									aria-controls="details" role="tab" data-toggle="tab">Cấu hình</a></li>
							</ul>
							<div class="tab-content">
                                            <?php
                                            include 'modules/productdetails_home.php';
                                            include 'modules/productdetails_config.php';
                                            include 'modules/productdetails_review.php';
                                            ?>
                                            
                            </div>
						</div>

					</div>

					<div class="related-products-wrapper">
						<h2 class="related-products-title">Sản phẩm mới nhất</h2>
						<div class="related-products-carousel">
							<?php while ($dongsanphammoi = mysqli_fetch_array($rowsNewProduct)){ ?>
							<div class="single-product">
								<div class="product-f-image">
									<img style="width: 399; heigh: 461px" src="img/<?php echo $dongsanphammoi['ha_hinh1']?>" alt="">
									<div class="product-hover">
										<a href="index.php?xem=chitietsanpham&idsanpham=<?php echo $dongsanphammoi['ID_sanpham']?>" class="view-details-link"><i class="fa fa-link"></i>
											Xem thêm</a>
									</div>
								</div>

								<h2>
									<a href="index.php?xem=chitietsanpham&idsanpham=<?php echo $dongsanphammoi['ID_sanpham']?>"><?php echo $dongsanphammoi['sp_tensanpham']?></a>
								</h2>

								<div class="product-carousel-price">
									<p>Giá: <?php echo $dongsanphammoi['sp_giasanpham']?></p>
								</div>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript">

    var portfolioDiv = document.getElementById('portfolio');
    var resultsDiv = document.getElementById('results');

    var portfolioBtn = document.getElementById('RenderPortfolio_Btn');
    var resultsBtn = document.getElementById('RenderResults_Btn');

    portfolioBtn.onclick = function() {
        resultsDiv.setAttribute('class', 'hidden');
        portfolioDiv.setAttribute('class', 'visible');
    };

    resultsBtn.onclick = function() {
        portfolioDiv.setAttribute('class', 'hidden');
        resultsDiv.setAttribute('class', 'visible');
    };

</script>