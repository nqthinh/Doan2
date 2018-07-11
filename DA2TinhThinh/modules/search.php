<?php 
    $tenmaychu = 'localhost';
    $tentaikhoan = 'root';
    $matkhau = '';
    $csdl = 'gioithieusanpham';
    $conn = mysqli_connect($tenmaychu,$tentaikhoan, $matkhau,$csdl) or die('không kết nối được');
    mysqli_select_db($conn,$csdl);
    mysqli_query($conn, "SET NAMES 'utf8'");
    if(isset($_GET['keywords']))
    {
        $keyword = $conn->escape_string($_GET['keywords']);
        
        $query = $conn->query("
         SELECT * FROM sanpham INNER JOIN the ON sanpham.ID_sanpham = the.ID_sanpham 
         WHERE LIKE the.tenthe='%{keyword}%'  
          OR sanpham.sp_tensanpham LIKE = '%{keyword}%'
         ");
    }
    
?>
<?php 
    include 'header.php';
    include 'menu.php';
    include 'footer.php';
?>
<div class="single-product-aea">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
		<?php 
		  while ($rows = mysqli_fetch_array($query))
		  {
		?>
			<div class="col-md-3 col-sm-6">
				<div class="single-shop-product">
					<div class="product-upper">
						<img src="img/product-2.jpg" alt="">
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
	</div>
</div>
</div>
