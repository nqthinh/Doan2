<?php 
    include 'config.php';
    $select = "SELECT * FROM the INNER JOIN sanpham ON sanpham.ID_sanpham = the.ID_sanpham";
    $run = mysqli_query($conn, $select);
?>
<div class="be-content">
	<div class="main-content container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default panel-table">
					<div class="panel-heading">
						Danh sách thẻ của sản phẩm
						<div class="tools">
							<span class="icon mdi mdi-download"></span><span
								class="icon mdi mdi-more-vert"></span>
						</div>
					</div>
                    
					<div class="panel-body">
					<a href="index.php?baiviet=themmoithe" style="border: 2px solid #4285f4; padding: 5px; margin-left: 65px;" >Thêm mới</a>
						<table id="table3" class="table table-striped table-hover table-fw-widget"> 
				
							<thead>
								<tr>
									<th class="number">ID</th>
									<th style="width: 20%;">Thẻ</th>
									<th style="width: 20%;">Sản phẩm</th>
									<th style="width: 20%;">Số tìm kiếm</th>
									<th style="width: 20%;">Hành động</th>
								</tr>
							</thead>
							<tbody>
									<?php while($rows = mysqli_fetch_array($run)){?>
										<tr>
									<td class="number"><?php  echo $rows['ID_the']?></td>
									<td><?php  echo $rows['tenthe']?></td>
									<td><?php  echo $rows['sp_tensanpham']?></td>
									<td><?php  echo $rows['timkiem']?></td>
									<td class=" last"><a
										href="index.php?baiviet=chinhsuathe&ac=sua&idlthe=<?php  echo $rows['ID_the']?>">Sửa</a></td>
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