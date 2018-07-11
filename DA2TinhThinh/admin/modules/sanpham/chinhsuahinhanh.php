<?php
    include 'config.php';
    $select ="select ID_sanpham, sp_tensanpham from sanpham";

    $run = mysqli_query($conn, $select);
    
    
    $idhinhanh=$_GET['idhinhanh'];
    $selecthinhanh="select * from hinhanh where ID_hinhanh = '$idhinhanh'";
    $run2 = mysqli_query($conn, $selecthinhanh);
    
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
					<?php while($row2= mysqli_fetch_array($run2)){?>
					<div class="panel-body">
						<form action ="sanpham/xuly_hinhanh.php?<?php echo $row2['id_loaisanpham']?>" method="post" enctype="multipart/form-data">
						      <div class="col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 10px;">
    						      <select name="myvalue" id="heard" class="form-control" required>
    						      <?php while($row1=mysqli_fetch_array($run)){?>
                                    <option value="<?php echo $row1['ID_sanpham']?>"><?php echo $row1['ID_sanpham'];?> - <?php echo $row1['sp_tensanpham'];?></option>
                                    <?php }?>
                                  </select>
                                  
                              </div>
							<table id="table3"
								class="table table-striped table-hover table-fw-widget">
								<tr>
									<td colspan="6"
										style="text-align: center; background-color: #4285f4;"><b
										style="color: fff;">CHỈNH SỬA HÌNH ẢNH</b></td>
								</tr>
							     
								<tr>
									<td style="width: 15%">Hình ảnh 1</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<img style="width: 100px; height: 100px;" src="../../img/<?php echo $row2['ha_hinh1']?>">
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="file" name="file1"  class="form-control">
											</div>
										</div>
									</td>
									
					
									
								</tr>
								<tr>
									<td style="width: 15%">Hình ảnh 2</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<img style="width: 100px; height: 100px;" src="../../img/<?php echo $row2['ha_hinh2']?>">
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="file" name="file2"  class="form-control">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td style="width: 15%">Hình ảnh 3</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<img style="width: 100px; height: 100px;" src="../../img/<?php echo $row2['ha_hinh3']?>">
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="file" name="file2"  class="form-control">
											</div>
										</div>
									</td>
								</tr>
																<tr>
									<td style="width: 15%">Hình ảnh 4</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<img style="width: 100px; height: 100px;" src="../../img/<?php echo $row2['ha_hinh4']?>">
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="file" name="file2"  class="form-control">
											</div>
										</div>
									</td>
								</tr>
								
								
								    
                                <tr>
									<td colspan="1"
										style="text-align: center; background-color: #4285f4;">
										<input type="submit" name="upload" value="Chỉnh sửa" class="form-control" style="align:center">
								    </td>
								</tr>
								<?php } ?>


							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>