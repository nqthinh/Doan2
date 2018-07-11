<?php
include 'config.php';

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
								class="icon mdi mdi-more-vert"></span>
						</div>
					</div>
					<div class="panel-body">
						<form action ="sanpham/xuly_sanpham.php" method="post" enctype="multipart/form-data">
							<table id="table3"
								class="table table-striped table-hover table-fw-widget">
								<tr>
									<td colspan="6"
										style="text-align: center; background-color: #4285f4;"><b
										style="color: fff;">THÊM MỚI SẢN PHẨM</b></td>
								</tr>
								<tr>
									<td style="width: 15%">Tên sản phẩm</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="tensanpham" class="form-control"
													value="">
											</div>
										</div>
									</td>
									<td style="width: 15%">Giá sản phẩm</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="giasanpham" class="form-control"
													value="">
											</div>
										</div>
									</td>
									<td style="width: 15%">Loại sản phẩm</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="loaisanpham" class="form-control"
													value="">
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
													value="">
											</div>
										</div>
									</td>
									
									<td style="width: 15%">Mô tả sản phẩm</td>
									<td colspan="4">
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="mota"  class="form-control"
													value="">
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
													value="">
											</div>
										</div>
									</td>
									<td style="width: 15%">Chuẩn màn hình</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="chuanmanhinh" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Độ phân giải</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="dophangiai" class="form-control">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td style="width: 15%">Công nghệ cảm ứng</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="congnghecamung" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Mặt kính màn hình</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="matkinhmanhinh"  class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Màu màn hình</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="maumanhinh" class="form-control">
											</div>
										</div>
									</td>
								</tr>
								
								<tr>
									<td style="width: 15%">Bộ nhớ trong</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="bonhotrong" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Bộ nhớ còn lại</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="bonhoconlai"  class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Thẻ nhớ ngoài</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="thenhongoai" class="form-control">
											</div>
										</div>
									</td>
								</tr>

								<tr>
									
									<td style="width: 15%">Hỗ trợ thẻ tối đa</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="hotrothetoida" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Danh bạ lưu trữ</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="danhbaluutru" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Camera sau: Độ phân giải</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="camerasaudophangiai" class="form-control">
											</div>
										</div>
									</td>
								</tr>

								
								<tr>
								    <td style="width: 15%">Camera sau: quay phim</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="camerasauquayphim" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Camera sau: đèn flash</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="camerasaudenflash" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Camera sau: chụp nâng cao</td>
    									<td>
    										<div class="form-group">
    											<div class="col-md-12 col-sm-12 col-xs-12">
    												<input type="text" name="camerasauchupnangcao" class="form-control">
    											</div>
    										</div>
    							     </td>
								</tr>
								<tr>
    								
									<td style="width: 15%">Camera trước: Độ phân giải</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="cameratruocdophangiai" class="form-control">
											</div>
										</div>
									</td>
								    <td style="width: 15%">Camera trước: Videos call</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="cameratruocvideoscall" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Camera trước: khác</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="cameratruockhac" class="form-control">
											</div>
										</div>
									</td>	
								</tr>
								
								<tr>
									<td style="width: 15%">Băng tần 2G</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="bangtan2g" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Băng tần 3G</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="bangtan3g"  class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Băng tần 4G</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="bangtan4g" class="form-control">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									
									<td style="width: 15%">Jack</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="jack" class="form-control">
											</div>
										</div>
									</td>
                                    <td style="width: 15%">Wi-fi</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" class="form-control" name="wifi" >
											</div>
										</div>
									</td>
									<td style="width: 15%">GPS</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="GPS" class="form-control">
											</div>
										</div>
									</td>
								</tr>
								
								<tr>
								    <td style="width: 15%">USB</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="USB" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Bluetooth</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="bluetooth" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">GPRS/EDGE</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="gprs" class="form-control">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td style="width: 15%">Cổng kết nối khác</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="congketnoikhac" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Cổng sạc</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="congsac" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Hỗ trợ SIM</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="hotrosim" class="form-control">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									
									<td style="width: 15%">Khe cắm SIM</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="khecamsim" class="form-control">
											</div>
										</div>
									</td>
                                    <td style="width: 15%">RAM</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="ram" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Hệ điều hành</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="hedieuhanh" class="form-control">
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td style="width: 15%">Chipset</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="chipset" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Tốc độ CPU</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="tocdoCPU" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">GPU</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="GPU" class="form-control">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									
									<td style="width: 15%">Kích thước sản phẩm</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="kichthuocsanpham" class="form-control">
											</div>
										</div>
									</td>
                                    <td style="width: 15%">Chất liệu</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="chatlieu" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Trọng lượng</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="trongluong" class="form-control">
											</div>
										</div>
									</td>
								</tr>
								
								<tr>
									<td style="width: 15%">Chống nước</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="chongnuoc" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Loại CPU</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="loaicpu" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Số nhân CPU</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="sonhancpu" class="form-control">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									
									<td style="width: 15%">Loại pin</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="loaipin" class="form-control">
											</div>
										</div>
									</td>
                                    <td style="width: 15%">Dung lượng pin</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="dungluonpin" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Pin có thể tháo rời</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="cothethaoroi" class="form-control">
											</div>
										</div>
									</td>
								</tr>


								<tr>
									<td style="width: 15%">Thời gian đàm thoại</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name='thoigiandamthoai' class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Chế độ sạc nhanh</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="chedosacnhanh" class="form-control">
											</div>
										</div>
									</td>
                                    <td style="width: 15%">Ứng dụng - nghe nhạc</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="ungdungnghenhac" class="form-control">
											</div>
										</div>
										
									</td>
								</tr>
								<tr>
									
									<td style="width: 15%">Ứng dụng - xem phim</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="ungdungxemphim" class="form-control">
											</div>
										</div>
									</td>
                                    									<td style="width: 15%">Ứng dụng radio</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="ungdungradio" class="form-control">
											</div>
										</div>
									</td>
									<td style="width: 15%">Chức năng khác</td>
									<td>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<input type="text" name="chucnangkhac" class="form-control">
											</div>
										</div>
									</td>
								</tr>


								<tr>
									<td colspan="6" style="align: center;"><input type="submit"
										name="themmoisanpham" value="Thêm mới" class="btn btn-success"></td>
								</tr>

							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>