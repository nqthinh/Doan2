<?php
include 'admin/modules/sanpham/config.php';
$selectID = "SELECT * from SANPHAM INNER JOIN THE ON sanpham.ID_sanpham = the.ID_sanpham WHERE sanpham.ID_sanpham = '$_GET[idsanpham]'";
$rowssanpham = mysqli_query($conn, $selectID);
$dongctsp =  mysqli_fetch_array($rowssanpham);

?>
<div role="tabpanel" class="tab-pane fade in active" id="home">
	<h2>Mô tả sản phẩm</h2>
	<p><?php echo $dongctsp['sp_baiviet']?></p>
</div>