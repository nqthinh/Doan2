<?php
include 'admin/modules/sanpham/config.php';
$selectID = "SELECT * from SANPHAM INNER JOIN THE ON sanpham.ID_sanpham = the.ID_sanpham WHERE sanpham.ID_sanpham = '$_GET[idsanpham]'";
$rowssanpham = mysqli_query($conn, $selectID);
$dongctsp =  mysqli_fetch_array($rowssanpham);

?>

<?php 

   
    $tscb_mh = $dongctsp['sp_mh_dophangiai'];
    $tscb_cnmh =  $dongctsp['sp_mh_congnghemanhinh'];
    $tscb_manhinh = trim($tscb_mh.$tscb_cnmh, ' ');
    $tscb_cmtruoc = $dongctsp['sp_cat_dophangiai'];
    $tscb_cmsau = $dongctsp['sp_cas_dophangiai'];
    $RAM = $dongctsp['sp_bn_ram'];
    

?>
<div role="tabpanel" class="tab-pane fade" id="details">
	<div class="room-overview">
        
		<div class="table-responsive">
			<h4>Thông số cơ bản</h4>
			
			<table class="table table-striped">
				<colgroup>
					<col class="col-xs-3">
					<col class="col-xs-7">
				</colgroup>
				
				<tbody>
				
					<tr>
						<th scope="row" ><code>Màn hình:  </code></th>
						<td><?php echo  trim($tscb_manhinh)?></td>
					</tr>
					<tr>
						<th scope="row"><code>Camera: </code></th>
						<td>Trước: <?php echo $tscb_cmtruoc?>, Sau: <?php echo $tscb_cmsau?></td>
					</tr>
					<tr>
						<th scope="row"><code>RAM :</code></th>
						<td> <?php echo $RAM;?> GB</td>
					</tr>
					<tr>
						<th scope="row"><code>Bộ nhớ trong : </code></th>
						<td><?php echo $dongctsp['sp_bn_bonhotrong']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Hệ điều hành : </code></th>
						<td><?php echo $dongctsp['sp_hedieuhanh']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Chipset :</code></th>
						<td><?php echo $dongctsp['sp_chipset']?></td>
					</tr>
					<tr>
						<th scope="row"><code>CPU :</code></th>
						<td><?php echo $dongctsp['sp_tocdoCPU'] ?></td>
					</tr>
					<tr>
						<th scope="row"><code>Kích thước : </code></th>
						<td><?php echo $dongctsp ['sp_kichthuoc'] ?></td>
					</tr>
					<tr>
						<th scope="row"><code>GPU :</code></th>
						<td> <?php echo $dongctsp['sp_GPU']?></td>
					</tr>
				</tbody>
			</table>
			<h4>Màn hình: </h4>
			<table class="table table-striped">
				<colgroup>
					<col class="col-xs-3">
					<col class="col-xs-7">
				</colgroup>
				
				<tbody>
				
					<tr>
						<th scope="row"><code>Công nghệ màn hình: </code></th>
						<td> <?php echo $dongctsp['sp_mh_congnghemanhinh']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Màu màn hình : </code></th>
						<td> <?php echo $dongctsp['sp_mh_maumanhinh'] ?></td>
					</tr>
					<tr>
						<th scope="row"><code>Chuẩn màn hình :</code></th>
						<td><?php echo $dongctsp['Sp_mh_chuanmanhinh']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Độ phân giải màn hình :</code></th>
						<td><?php echo $dongctsp['sp_mh_dophangiai'] ?></td>
					</tr>
					<tr>
						<th scope="row"><code>Công nghệ cảm ứng :</code></th>
						<td><?php echo $dongctsp['sp_mh_congnghecamung']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Mặt kính màn hình :</code></th>
						<td><?php echo  $dongctsp['sp_mh_matkinhmanhinh'] ?></td>
					</tr>
				</tbody>
			</table>
			<h4>Camera sau: </h4>
			<table class="table table-striped">
				<colgroup>
					<col class="col-xs-3">
					<col class="col-xs-7">
				</colgroup>
				
				<tbody>
				
					<tr>
						<th scope="row"><code>Độ phân giải: </code></th>
						<td><?php echo $dongctsp['sp_cas_dophangiai']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Quay phim : </code></th>
						<td><?php echo $dongctsp['sp_cas_quayphim']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Đèn flash :</code></th>
						<td><?php echo $dongctsp['sp_cas_denflash']?></td>
					</tr>
					
				</tbody>
			</table>
			<h4>Camera trước: </h4>
			<table class="table table-striped">
				<colgroup>
					<col class="col-xs-3">
					<col class="col-xs-7">
				</colgroup>
				
				<tbody>
				
					<tr>
						<th scope="row"><code>Videos call: </code></th>
						<td><?php echo $dongctsp['sp_cat_videoscall']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Độ phân giải : </code></th>
						<td><?php echo $dongctsp['sp_cat_dophangiai']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Thông tin khác :</code></th>
						<td><?php echo $dongctsp['sp_cat_thongtinkhac']?></td>
					</tr>
					
				</tbody>
			</table>
			<h4>Cấu hình phần cứng: </h4>
			<table class="table table-striped">
				<colgroup>
					<col class="col-xs-3">
					<col class="col-xs-7">
				</colgroup>
				
				<tbody>
				
					<tr>
						<th scope="row"><code>Tốc độ CPU:  </code></th>
						<td><?php echo $dongctsp['sp_tocdoCPU']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Số nhân : </code></th>
						<td><?php echo $dongctsp['sp_sonhanCPU']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Chip set:</code></th>
						<td><?php echo $dongctsp['sp_chipset']?></td>
					</tr>
					<tr>
						<th scope="row"><code>RAM:</code></th>
						<td><?php echo $dongctsp['sp_bn_ram']?> GB</td>
					</tr>
					<tr>
						<th scope="row"><code>Chip đồ họa GPU:</code></th>
						<td><?php echo $dongctsp['sp_loaiCPU']?></td>
					</tr>
					
				</tbody>
			</table>
			<h4>Thiết kế </h4>
			<table class="table table-striped">
				<colgroup>
					<col class="col-xs-3">
					<col class="col-xs-7">
				</colgroup>
				
				<tbody>
				
					<tr>
						<th scope="row"><code>Kiểu dáng:  </code></th>
						<td><?php echo $dongctsp['sp_thietke_kieudang']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Chất liệu : </code></th>
						<td><?php echo $dongctsp['sp_thietke_chatlieu']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Kích thước:</code></th>
						<td><?php echo $dongctsp['sp_kichthuoc']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Trọng lượng :</code></th>
						<td><?php echo $dongctsp['sp_thieke_trongluong']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Khả năng chống nước:</code></th>
						<td><?php echo $dongctsp['sp_thietke_chongnuoc']?></td>
					</tr>
					
				</tbody>
			</table>
			<h4>Thông tin PIN </h4>
			<table class="table table-striped">
				<colgroup>
					<col class="col-xs-3">
					<col class="col-xs-7">
				</colgroup>
				
				<tbody>
				
					<tr>
						<th scope="row"><code>Loại PIN:  </code></th>
						<td><?php echo $dongctsp['sp_pin_loaipin']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Dung lượng PIN : </code></th>
						<td><?php echo $dongctsp['sp_pin_dungluongpin']?></td>
					</tr>
					<tr>
						<th scope="row"><code>PIN có thể tháo rời:</code></th>
						<td><?php echo $dongctsp['sp_pin_cothethaoroi']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Chế độ sạc nhanh :</code></th>
						<td><?php echo $dongctsp['sp_pin_chedosacnhanh']?></td>
					</tr>
					
				</tbody>
			</table>
			<h4>Kết nối và Cổng giao tiếp </h4>
			<table class="table table-striped">
				<colgroup>
					<col class="col-xs-3">
					<col class="col-xs-7">
				</colgroup>
				
				<tbody>
				
					<tr>
						<th scope="row"><code>Băng tần 2G:  </code></th>
						<td><?php echo $dongctsp['sp_kn_bangtan2g']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Băng tần 3G: </code></th>
						<td><?php echo $dongctsp['sp_kn_bangtan3g']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Băng tần 4G:</code></th>
						<td><?php echo $dongctsp['sp_kn_bangtan4g']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Hỗ trợ cắm SIM:</code></th>
						<td><?php echo $dongctsp['sp_kn_khecamsim']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Loại sim SIM:</code></th>
						<td><?php echo $dongctsp['sp_kn_hotrosim']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Wifi:</code></th>
						<td><?php echo $dongctsp['sp_kn_wifi']?></td>
					</tr>
					<tr>
						<th scope="row"><code>GPS:</code></th>
						<td><?php echo $dongctsp['sp_kn_gps']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Bluetooth:</code></th>
						<td><?php echo $dongctsp['sp_kn_bluetooth']?></td>
					</tr>
					<tr>
						<th scope="row"><code>GPRS/EDGE:</code></th>
						<td><?php echo $dongctsp['sp_kn_GPRS/EDGE']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Kết nối USB:</code></th>
						<td><?php echo $dongctsp['sp_kn_USB']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Cổng kết nối khác:</code></th>
						<td><?php echo $dongctsp['sp_kn_congketnoikhac']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Cổng sạc:</code></th>
						<td><?php echo $dongctsp['sp_kn_congsac']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Jack [input/output]:</code></th>
						<td><?php echo $dongctsp['sp_kn_jack']?></td>
					</tr>
					
				</tbody>
			</table>
			<h4>Giải trí và ứng dụng </h4>
			<table class="table table-striped">
				<colgroup>
					<col class="col-xs-3">
					<col class="col-xs-7">
				</colgroup>
				
				<tbody>
				
					<tr>
						<th scope="row"><code>Xem phim:  </code></th>
						<td><?php echo $dongctsp['sp_ud_xemphim']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Nghe nhạc : </code></th>
						<td><?php echo $dongctsp['sp_ud_nghenhac']?></td>
					</tr>
					<tr>
						<th scope="row"><code>Xem phim:  </code></th>
						<td><?php echo $dongctsp['sp_ud_radio']?></td>
					</tr>
				</tbody>
			</table>
		</div>		

	</div>

	<!-- Room Overview style-->
</div>