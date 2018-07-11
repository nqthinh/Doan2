<?php 
    include 'config.php';
    $select = "SELECT * FROM Hinhanh";
    $run = mysqli_query($conn, $select);
?>
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
					<a href="index.php?baiviet=themmoihinhanh" style="border: 2px solid #4285f4; padding: 5px; margin-left: 65px;" >Thêm mới</a>
						<table id="table3" class="table table-striped table-hover table-fw-widget"> 
				
							<thead>
								<tr>
									<th class="number">ID</th>
									<th style="width: 20%;">Hình ảnh 1</th>
									<th style="width: 20%;">Hình ảnh 2</th>
									<th style="width: 20%;">Hình ảnh 3</th>
									<th style="width: 20%;">Hình ảnh 4</th>
									
								</tr>
							</thead>
							<tbody>
									<?php while($rows = mysqli_fetch_array($run)){?>
										<tr>
									<td class="number"><?php  echo $rows['ID_hinhanh']?></td>
									<td><img src="../../img/<?php  echo $rows['ha_hinh1']?>" style="width: 100px; height: 100px;"></td>
									<td><img src="../../img/<?php  echo $rows['ha_hinh2']?>" style="width: 100px; height: 100px;"></td>
									<td><img src="../../img/<?php  echo $rows['ha_hinh3']?>" style="width: 100px; height: 100px;"></td>
									<td><img src="../../img/<?php  echo $rows['ha_hinh4']?>" style="width: 100px; height: 100px;"></td>
									<td class=" last"><a
										href="index.php?baiviet=chinhsuahinhanh&ac=sua&idhinhanh=<?php  echo $rows['ID_hinhanh']?>">Sửa</a></td>
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