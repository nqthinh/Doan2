<?php 
    include 'config.php';
    $select = "SELECT * FROM LOAISANPHAM WHERE id_loaisanpham = $_GET[idloaisanpham]";
    $run= mysqli_query($conn, $select);


?>
<div class="be-content">
	<div class="main-content container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default panel-table">
					<div class="panel-heading">
						Chỉnh sửa loại sản phẩm
						<div class="tools">
							<span class="icon mdi mdi-download"></span><span
								class="icon mdi mdi-more-vert"></span>
						</div>
					</div>
					  <?php while($row=mysqli_fetch_array($run)){?>
					<div class="panel-body">
						<form action="sanpham/xuly_loaisanpham.php?idloaisanpham=<?php  echo $row['id_loaisanpham']  ?>" method="post"
							enctype="multipart/form-data">

							<table id="table3"
								class="table table-striped table-hover table-fw-widget">
								<tr>
									<td colspan="6"
										style="text-align: center; background-color: #4285f4;"><b
										style="color: fff;">CHỈNH SỬA LOẠI SẢN PHẨM</b>
									</td>
								</tr>

								<tr>
									<td  colspan="1" style="width: 15%">Tên loại sản phẩm</td>

									<td colspan="4">
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="tenloaisanpham"
													value = "<?php echo $row['tenloaisanpham']?>" class="form-control">
											</div>
										</div>
									</td>



								</tr>

								<tr>
									<td style="width: 15%">Thứ tự</td>

									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="thutu"  value="<?php echo $row['thutu']?>" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Trạng thái</td>
                            
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="trangthai" value="<?php echo $row['trangthai']?>" class="form-control">
											</div>
										</div>
									</td>


								</tr>
                                <?php }?>
								<tr>
									<td colspan="1"
										style="text-align: center; background-color: #4285f4;"><input
										type="submit" name="chinhsualoaisanpham" value="Chỉnh sửa"
										class="form-control" style="align: center"></td>
								</tr>



							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>