<?php
    include 'config.php';
    $select ="select ID_sanpham, sp_tensanpham from sanpham";

    $run = mysqli_query($conn, $select);
?>

<?php
include 'config.php';

?>

<div class="be-content">
	<div class="main-content container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default panel-table">
					<div class="panel-heading">
						Chi tiết sản phẩm
						<div class="tools">
							<span class="icon mdi mdi-download"></span><span
								class="icon mdi mdi-more-vert"></span>
						</div>
					</div>
					<div class="panel-body">
						<form action ="sanpham/xuly_hinhanh.php" method="post" enctype="multipart/form-data">
						      <div class="col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 10px;">
    						      <select name="myvalue" id="heard" class="form-control" required>
    						      <?php while($row=mysqli_fetch_array($run)){?>
                                    <option value="<?php echo $row['ID_sanpham']?>"><?php echo $row['ID_sanpham'];?> - <?php echo $row['sp_tensanpham'];?></option>
                                    <?php }?>
                                  </select>
                                  
                              </div>
							<table id="table3"
								class="table table-striped table-hover table-fw-widget">
								<tr>
									<td colspan="6"
										style="text-align: center; background-color: #4285f4;"><b
										style="color: fff;">THÊM MỚI HÌNH ẢNH</b></td>
								</tr>
							
								<tr>
									<td style="width: 15%">Hình ảnh 1</td>
									
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="file" name="file1"  class="form-control">
											</div>
										</div>
									</td>
									
									<td style="width: 15%">Hình ảnh 2</td>
									
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="file" name="file2" class="form-control">
											</div>
										</div>
									</td>
									
								</tr>
								<tr>
									
									
								</tr>
								<tr>
								<td style="width: 15%">Hình ảnh 3</td>
									
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="file" name="file3" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Hình ảnh 4</td>
									
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="file" name="file4" class="form-control">
											</div>
										</div>
										 
									</td>
                                   
								</tr>
								    
                                <tr>
									<td colspan="1"
										style="text-align: center; background-color: #4285f4;">
										<input type="submit" name="upload" value="Upload" class="form-control" style="align:center">
								    </td>
								</tr>
			
								

							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>