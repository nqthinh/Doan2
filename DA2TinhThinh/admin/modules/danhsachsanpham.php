<div class="be-content">
	<div class="main-content container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default panel-table">
					<div class="panel-heading">
						Danh sách sản phẩm
						<div class="tools">
							<span class="icon mdi mdi-download"></span><span
								class="icon mdi mdi-more-vert"></span>
						</div>
					</div>
                    
					<div class="panel-body">
					<a href="index.php?baiviet=themmoisanpham" style="border: 2px solid #4285f4; padding: 5px; margin-left: 65px;" >Thêm mới</a>
						<table id="table3" class="table table-striped table-hover table-fw-widget"> 
				
							<thead>
								<tr>
									<th class="number">STT</th>
									<th style="width: 30%;">Tên sản phẩm</th>
									<th style="width: 20%;">Giá sản phẩm</th>
									<th style="width: 20%;">Loại sản phẩm</th>
									<th style="width: 20%;">Trạng thái</th>
									<th style="width: 10%;">Hành động</th>
								</tr>
							</thead>
							<tbody>
									<?php while($rows = mysqli_fetch_array($run)){?>
										<tr>
									<td class="number"><?php  echo $rows['ID_sanpham']?></td>
									<td><?php  echo $rows['sp_tensanpham']?></td>
									<td><?php  echo $rows['sp_giasanpham']?></td>
									<td><?php  echo $rows['tenloaisanpham']?></td>
									<td><?php  echo $rows['sp_trangthai']?></td>
									<td class=" last"><a
										href="index.php?baiviet=chinhsuachitietsanpham&ac=sua&idsanpham=<?php  echo $rows['ID_sanpham']?>">Sửa</a></td>
								</tr>
		                              <?php } ?>
									</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>