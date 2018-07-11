<?php 
    include 'config.php';
    $select = "SELECT * FROM nguoidung";
    $run = mysqli_query($conn, $select);
?>
<div class="be-content">
	<div class="main-content container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default panel-table">
					<div class="panel-heading">
						Danh sách người dùng nhận thông báo qua EMAIL
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
									<th style="width: 80%;">Người dùng</th>

									
								</tr>
							</thead>
							<tbody>
									<?php while($rows = mysqli_fetch_array($run)){?>
										<tr>
									<td class="number"><?php  echo $rows['ID_nguoidung']?></td>
									<td><?php  echo $rows['nd_diachiemail']?></td>
									
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