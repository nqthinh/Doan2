<?php 
    include 'config.php';
    $select = "SELECT * FROM the WHERE ID_the = $_GET[idlthe]";
    $run= mysqli_query($conn, $select);
    $selectsp = "SELECT * FROM SANPHAM";
    $runsp = mysqli_query($conn, $selectsp);
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
						<form action="sanpham/xuly_the.php?idlthe=<?php  echo $row['ID_the']  ?>" method="post"
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
                                    <td  colspan="1" style="width: 15%">Sản phẩm</td>

									<td colspan="6">
										<div class="form-group">
											<select name="myvalue" id="heard" class="form-control" required>
                						          <?php while($rows=mysqli_fetch_array($runsp)){?>
                                                    <option value="<?php echo $rows['ID_sanpham']?>"><?php echo $rows['ID_sanpham'];?> - <?php echo $rows['sp_tensanpham'];?></option>
                                                  <?php }?>
                                          </select>
										</div>
									</td>
                                
                                </tr>
                                
								<tr>
									<td  colspan="1" style="width: 15%">Tên thẻ</td>

									<td colspan="2">
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="tenthe"
													value = "<?php echo $row['tenthe']?>" class="form-control">
											</div>
										</div>
									</td>
                                    <td colspan="1" style="width: 15%">Số lượt tìm kiếm</td>

									<td colspan="2">
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="timkiem"  value="<?php echo $row['timkiem']?>" class="form-control">
											</div>
										</div>
									</td>
								


								</tr>

								<tr>
									
                            
									


								</tr>
                                <?php }?>
								<tr>
									<td colspan="1"
										style="text-align: center; background-color: #4285f4;"><input
										type="submit" name="chinhsuathe" value="Chỉnh sửa"
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