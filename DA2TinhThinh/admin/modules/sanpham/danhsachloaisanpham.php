<?php 
    include 'config.php';
    $select = "SELECT * FROM loaisanpham";
    $run = mysqli_query($conn, $select);
?>
<div class="be-content">
	<div class="main-content container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default panel-table">
					<div class="panel-heading">
						Danh sách loại sản phẩm
						<div class="tools">
							<span class="icon mdi mdi-download"></span><span
								class="icon mdi mdi-more-vert"></span>
						</div>
					</div>
                    
					<div class="panel-body">
					<a href="index.php?baiviet=themmoiloaisanpham" style="border: 2px solid #4285f4; padding: 5px; margin-left: 65px;" >Thêm mới</a>
						<table id="table3" class="table table-striped table-hover table-fw-widget"> 
				
							<thead>
								<tr>
									<th class="number">ID</th>
									<th style="width: 20%;">Tên loại sản phẩm</th>
									<th style="width: 20%;">Thứ tự</th>
									<th style="width: 20%;">Trạng thái</th>
			                        <th style="width: 20%;">Hành động</th>
									
								</tr>
							</thead>
							<tbody>
									<?php while($rows = mysqli_fetch_array($run)){?>
										<tr>
									<td class="number"><?php  echo $rows['id_loaisanpham']?></td>
									<td><?php  echo $rows['tenloaisanpham']?></td>
									<td><?php  echo $rows['thutu']?></td>
									<td><?php  echo $rows['trangthai']?></td>
									<td class=" last"><a
										href="index.php?baiviet=chinhsualoaisanpham&ac=sua&idloaisanpham=<?php  echo $rows['id_loaisanpham']?>">Sửa</a></td>
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