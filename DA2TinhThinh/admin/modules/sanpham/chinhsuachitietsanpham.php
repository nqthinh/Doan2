<?php
include 'config.php';
$select = "SELECT * FROM SANPHAM INNER JOIN LOAISANPHAM ON LOAISANPHAM.id_loaisanpham = sanpham.ID_loaisanpham WHERE ID_sanpham='$_GET[idsanpham]'";
$run = mysqli_query($conn, $select);
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
								class="icon mdi md i-more-vert"></span>
						</div>
					</div>
                    <?php while($row=mysqli_fetch_array($run)){?>
					<div class="panel-body">
						<form action ="sanpham/xuly_sanpham.php" method="post" enctype="multipart/form-data">
							<table id="table3"
								class="table table-striped table-hover table-fw-widget">
								<tr>
									<td colspan="6"
										style="text-align: center; background-color: #4285f4;"><b
										style="color: fff;">CHỈNH SỬA SẢN PHẨM</b></td>
								</tr>
								<tr>
									<td style="width: 15%">Tên sản phẩm</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="tensanpham" class="form-control"
													value="<?php echo $row['sp_tensanpham']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">Giá sản phẩm</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="giasanpham" class="form-control"
													value="<?php echo $row['sp_giasanpham']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">Loại sản phẩm</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="loaisanpham" class="form-control"
													value="<?php echo $row['tenloaisanpham']?>">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td style="width: 15%">Trạng thái</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="trangthaisanpham" class="form-control"
													value="<?php echo $row['sp_trangthai']?> ">
											</div>
										</div>
									</td>
									
									<td style="width: 15%">Mô tả sản phẩm</td>
									<td colspan="4">
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="mota"  class="form-control"
													value="<?php echo $row['sp_baiviet']?> ">
											</div>
										</div>
									</td>
									
								</tr>
								

						
								<tr>
									<td style="width: 15%">Công nghệ màn hình</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="congnghemanhinh" class="form-control"
													value="<?php echo $row['sp_mh_congnghemanhinh']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Chuẩn màn hình</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="chuanmanhinh" class="form-control"
													value="<?php echo $row['Sp_mh_chuanmanhinh']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Độ phân giải</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="dophangiai" class="form-control"
													value="<?php echo $row['sp_mh_dophangiai']?> ">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td style="width: 15%">Công nghệ cảm ứng</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="congnghecamung" class="form-control"
													value="<?php echo $row['sp_mh_congnghecamung']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Mặt kính màn hình</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="matkinhmanhinh"  class="form-control"
													value="<?php echo $row['sp_mh_matkinhmanhinh']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Màu màn hình</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="maumanhinh" class="form-control"
													value="<?php echo $row['sp_mh_maumanhinh']?> ">
											</div>
										</div>
									</td>
								</tr>
								
								<tr>
									<td style="width: 15%">Bộ nhớ trong</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="bonhotrong" class="form-control"
													value="<?php echo $row['sp_bn_bonhotrong']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Bộ nhớ còn lại</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="bonhoconlai"  class="form-control"
													value="<?php echo $row['sp_bn_bonhoconlai']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Thẻ nhớ ngoài</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="thenhongoai" class="form-control"
													value="<?php echo $row['sp_bn_thenhongoai']?>">
											</div>
										</div>
									</td>
								</tr>

								<tr>
									
									<td style="width: 15%">Hỗ trợ thẻ tối đa</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="hotrothetoida" class="form-control"
													value="<?php echo $row['sp_bn_hotrothetoida']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Danh bạ lưu trữ</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="danhbaluutru" class="form-control"
													value="<?php echo $row['sp_bn_danhbaluutru']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Camera sau: Độ phân giải</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="camerasaudophangiai" class="form-control"
													value="<?php echo $row['sp_cas_dophangiai']?>">
											</div>
										</div>
									</td>
								</tr>

								
								<tr>
								    <td style="width: 15%">Camera sau: quay phim</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="camerasauquayphim" class="form-control"
													value="<?php echo $row['sp_cas_quayphim']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">Camera sau: đèn flash</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="camerasaudenflash" class="form-control"
													value="<?php echo $row['sp_cas_denflash']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Camera sau: chụp nâng cao</td>
    									<td>
    										<div class="form-group">
    											<div class="col-md-12 col-sm-12 col-xs-12">
    												<input type="text" name="camerasauchupnangcao" class="form-control"
    													value="<?php echo $row['sp_cas_chupnangcao']?>">
    											</div>
    										</div>
    							     </td>
								</tr>
								<tr>
    								
									<td style="width: 15%">Camera trước: Độ phân giải</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="cameratruocdophangiai" class="form-control"
													value=" <?php echo $row['sp_cat_dophangiai']?> ">
											</div>
										</div>
									</td>
								    <td style="width: 15%">Camera trước: Videos call</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="cameratruocvideoscall" class="form-control"
													value="<?php echo $row['sp_cat_videoscall']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">Camera trước: khác</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="cameratruockhac" class="form-control"
													value="<?php echo $row['sp_cat_thongtinkhac']?>">
											</div>
										</div>
									</td>	
								</tr>
								
								<tr>
									<td style="width: 15%">Băng tần 2G</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="bangtan2g" class="form-control"
													value="<?php echo $row['sp_kn_bangtan2g']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">Băng tần 3G</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="bangtan3g"  class="form-control"
													value="<?php echo $row['sp_kn_bangtan3g']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">Băng tần 4G</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="bangtan4g" class="form-control"
													value="<?php echo $row['sp_kn_bangtan4g']?>">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									
									<td style="width: 15%">Jack</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="jack" class="form-control"
													value="<?php echo $row['sp_kn_jack']?> ">
											</div>
										</div>
									</td>
                                    <td style="width: 15%">Wi-fi</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" class="form-control" name="wifi" 
													value="<?php echo $row['sp_kn_wifi']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">GPS</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="GPS" class="form-control"
													value="<?php echo $row['sp_kn_gps']?>">
											</div>
										</div>
									</td>
								</tr>
								
								<tr>
								    <td style="width: 15%">USB</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="USB" class="form-control"
													value="<?php echo $row['sp_kn_USB']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">Bluetooth</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="bluetooth" class="form-control"
													value="<?php echo $row['sp_kn_bluetooth']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">GPRS/EDGE</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="gprs" class="form-control"
													value="<?php echo $row['sp_kn_GPRS/EDGE']?>">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td style="width: 15%">Cổng kết nối khác</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="congketnoikhac" class="form-control"
													value="<?php echo $row['sp_kn_congketnoikhac']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">Cổng sạc</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="congsac" class="form-control"
													value="<?php echo $row['sp_kn_congsac']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">Hỗ trợ SIM</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="hotrosim" class="form-control"
													value="<?php echo $row['sp_kn_hotrosim']?>">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									
									<td style="width: 15%">Khe cắm SIM</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="khecamsim" class="form-control"
													value="<?php echo $row['sp_kn_khecamsim']?>">
											</div>
										</div>
									</td>
                                    <td style="width: 15%">RAM</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="ram" class="form-control"
													value="<?php echo $row['sp_bn_ram']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Hệ điều hành</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="hedieuhanh" class="form-control"
													value="<?php echo $row['sp_hedieuhanh']?>">
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td style="width: 15%">Chipset</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="chipset" class="form-control"
													value="<?php echo $row['sp_chipset']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">Tốc độ CPU</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="tocdoCPU" class="form-control"
													value="<?php echo $row['sp_tocdoCPU']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">GPU</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="GPU" class="form-control"
													value="<?php echo $row['sp_GPU']?>">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									
									<td style="width: 15%">Kích thước sản phẩm</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="kichthuocsanpham" class="form-control"
													value="<?php echo $row['sp_kichthuoc']?> ">
											</div>
										</div>
									</td>
                                    <td style="width: 15%">Chất liệu</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="chatlieu" class="form-control"
													value="<?php echo $row['sp_thietke_chatlieu']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Trọng lượng</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="trongluong" class="form-control"
													value="<?php echo $row['sp_thieke_trongluong']?> ">
											</div>
										</div>
									</td>
								</tr>
								
								<tr>
									<td style="width: 15%">Chống nước</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="chongnuoc" class="form-control"
													value="<?php echo $row['sp_thietke_chongnuoc']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">Loại CPU</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="loaicpu" class="form-control"
													value="<?php echo $row['sp_loaiCPU']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Số nhân CPU</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="sonhancpu" class="form-control"
													value="<?php echo $row['sp_sonhanCPU']?> ">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									
									<td style="width: 15%">Loại pin</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="loaipin" class="form-control"
													value="<?php echo $row['sp_pin_loaipin']?>">
											</div>
										</div>
									</td>
                                    <td style="width: 15%">Dung lượng pin</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="dungluonpin" class="form-control"
													value="<?php echo $row['sp_pin_dungluongpin']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Pin có thể tháo rời</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="cothethaoroi" class="form-control"
													value="<?php echo $row['sp_pin_cothethaoroi']?> ">
											</div>
										</div>
									</td>
								</tr>


								<tr>
									<td style="width: 15%">Thời gian đàm thoại</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name='thoigiandamthoai' class="form-control"
													value="<?php echo $row['sp_pin_thoigiandamthoai']?> ">
											</div>
										</div>
									</td>
									<td style="width: 15%">Chế độ sạc nhanh</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="chedosacnhanh" class="form-control"
													value="<?php echo $row['sp_pin_chedosacnhanh']?>">
											</div>
										</div>
									</td>
                                    <td style="width: 15%">Ứng dụng - nghe nhạc</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="ungdungnghenhac" class="form-control"
													value="<?php echo $row['sp_ud_nghenhac']?>">
											</div>
										</div>
										
									</td>
								</tr>
								<tr>
									
									<td style="width: 15%">Ứng dụng - xem phim</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="ungdungxemphim" class="form-control"
													value="<?php echo $row['sp_ud_xemphim']?>">
											</div>
										</div>
									</td>
                                    									<td style="width: 15%">Ứng dụng radio</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="ungdungradio" class="form-control"
													value="<?php echo $row['sp_ud_radio']?>">
											</div>
										</div>
									</td>
									<td style="width: 15%">Chức năng khác</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="chucnangkhac" class="form-control"
													value="<?php echo $row['sp_ud_chucnangkhac']?> ">
											</div>
										</div>
									</td>
								</tr>


								<tr>
									<td colspan="6" style="align: center;"><input type="submit"
										name="chinhsuasanpham" value="Chỉnh sửa" class="btn btn-success"></td>
								</tr>

							</table>
						</form>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>