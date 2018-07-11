<?php 
include 'admin/modules/sanpham/config.php';
    $loaisanpham = "SELECT * FROM `loaisanpham` where trangthai = 'Bình thường' ORDER BY thutu DESC";
    $runloaisanpham = mysqli_query($conn, $loaisanpham);
    
?>
<div class="mainmenu-area">
	<div class="container">
		<div class="row">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
				    
					<li class="active"><a href="index.php">Trang chủ</a></li>
				<?php 
				    while ($rows = mysqli_fetch_array($runloaisanpham))
				    {
				?>
					<li><a href="index.php?xem=danhsachsanpham&idloaisanpham=<?php echo $rows['id_loaisanpham']; ?> "><?php echo $rows['tenloaisanpham']; ?></a></li>
								
				<?php
                    }
				?>
				</ul>

			</div>
		</div>
	</div>
</div>
<!-- End mainmenu area -->