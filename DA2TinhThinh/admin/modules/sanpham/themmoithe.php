<?php 
    include 'config.php';
    $select  = "select * from sanpham";
    $run = mysqli_query($conn, $select);
    

?>
<div class="be-content">
	<div class="main-content container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default panel-table">
					<div class="panel-heading">
						Thêm mới thẻ sản phẩm
						<div class="tools">
							<span class="icon mdi mdi-download"></span><span
								class="icon mdi mdi-more-vert"></span>
						</div>
					</div>
					<div class="panel-body">
						<form action="sanpham/xuly_loaisanpham.php" method="post"
							enctype="multipart/form-data">

							<table id="table3"
								class="table table-striped table-hover table-fw-widget">
								<tr>
									<td colspan="6"
										style="text-align: center; background-color: #4285f4;"><b
										style="color: fff;">CHỈNH SỬA THẺ SẢN PHẨM</b>
									</td>
								</tr>

								<tr>
									<tr>
                                    <td  colspan="1" style="width: 15%">Chọn sản phẩm</td>

									<td colspan="6">
										<div class="form-group">
											<select name="myvalue" id="heard" class="form-control" required>
                						          <?php while($rows=mysqli_fetch_array($run)){?>
                                                    <option value="<?php echo $rows['ID_sanpham']?>"><?php echo $rows['ID_sanpham'];?> - <?php echo $rows['sp_tensanpham'];?></option>
                                                  <?php }?>
                                          </select>
										</div>
									</td>
                     

								<tr>
									<td style="width: 15%">Tên thẻ</td>

									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="tenthe" class="form-control">
											</div>
										</div>
									</td>
								

								


								</tr>

								<tr>
									<td colspan="1"
										style="text-align: center; background-color: #4285f4;"><input
										type="submit" name="themmoiloaisanpham" value="Thêm mới"
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