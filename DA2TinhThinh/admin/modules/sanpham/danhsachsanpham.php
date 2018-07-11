<?php  


    include 'modules/config.php';
    $sql = "select * FROM SANPHAM INNER JOIN HINHANH ON SANPHAM.hinhanh = HINHANH.ID_hinhanh";
    $run = mysqli_query($conn, $sql);

    
?>



<div class="right_col" role="main">
<div class="col-md-12 col-sm-12 col-xs-12" style="width: 100%">
	<div class="x_panel">
		<div class="x_title">
			<h2>Danh sách sản phẩm</h2>
			<ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
			</ul>
			<div class="clearfix"></div>
		</div>

		<div class="x_content">
			<div class="table-responsive">
				<table class="table table-striped jambo_table bulk_action">
					<thead>
						<tr class="headings">
							<th class="column-title">Mã sản phẩm</th>
							<th class="column-title">Tên sản phẩm</th>
							<th class="column-title">Gía sản phẩm</th>
							<th class="column-title">Màn hình</th>
							<th class="column-title">RAM</th>
							<th class="column-title">Camera</th>
							<th class="column-title">Hệ điều hành</th>
							<th class="column-title">Bộ nhớ trong</th>
							<th class="column-title">Chipset</th>
							<th class="column-title">GPU</th>
							<th class="column-title">CPU</th>
							<th class="column-title">Hình ảnh</th>
							<th class="column-title no-link last"><span class="nobr">Action</span>
							</th>
							<th class="bulk-actions" colspan="7"><a class="antoo"
								style="color: #fff; font-weight: 500;">Bulk Actions ( <span
									class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
							</th>
						</tr>
					</thead>
    
					<tbody>
					<?php while($dong=mysqli_fetch_array($run)){
					    
					    ?>
						<tr class="even pointer">
                            
							<td class=" "><?php echo $dong['ID_sanpham']?></td>
							<td class=" "><?php echo $dong['sp_tensanpham']?></td>
							<td class=" "><?php echo $dong['sp_giasanpham']?> <i class="success fa fa-long-arrow-up"></i></td>
							<td class=" "><?php echo $dong['sp_mh_congnghemanhinh'].' '; echo $dong['Sp_mh_chuanmanhinh'].' '; echo $dong['sp_mh_dophangiai'].' '?></td>
							<td class=" "><?php echo $dong['sp_bn_ram']?></td>
							<td class=" ">Trước: <?php echo $dong['sp_cat_dophangiai'];?> MP <?php echo $dong['sp_cas_dophangiai']?> MP</td>
							<td class=" "><?php echo $dong['sp_hedieuhanh']?></td>
							<td class=" "><?php echo $dong['sp_bn_bonhotrong']?></td>
							<td class=" "><?php echo $dong['sp_chipset']?></td>
							<td class=" "><?php echo $dong['sp_GPU']?></td>
							<td class=" "><?php echo $dong['sp_tocdoCPU']?></td>
							<td class="a-right a-right "> <img style="width: 31px; height: 31px;" alt="" src="../img/<?php echo $dong['ha_hinh1']?>"></td>
							<td class=" last"><a href="index.php?baiviet=chitietsanpham&ac=sua&idsanpham=<?php echo $dong['ID_sanpham']?>">Xem</a></td>
						</tr>
                    <?php }?>
					</tbody>
				</table>
			</div>


		</div>
	</div>
</div>
</div>