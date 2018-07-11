<?php 
    include 'config.php';
?>
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Quản lý loại sản phẩm</h3>
			</div>

			<div class="title_right">
				<div
					class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
					<div class="input-group">
						<input type="text" class="form-control"
							placeholder="Tìm kiếm..."> <span class="input-group-btn">
							<button class="btn btn-default" type="button">Tìm!</button>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="x_content" style="float: left;">
				<br />
				<form id="demo-form2" data-parsley-validate
					class="form-horizontal form-label-left" action="modules/function.php" method="post" enctype="multipart/form-data">

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-md-2">ID </label>
						<div class="col-md-3 col-sm-3 col-md-2">
							<input type="text" class="form-control" disabled="disabled"
								placeholder="ID">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-md-2"
							for="type-name">Tên loại sản phẩm <span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-3 col-md-2">
							<input type="text" id="type-name" name="tenloaisanpham"
								required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-md-2"
							for="type-name">Thứ tự hiển thị <span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-3 col-md-2">
							<input type="text" id="type-name" name="thutuhienthi"
								required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-md-2"
							for="type-name">Trạng thái <span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-3 col-md-2">
                          <select class="form-control" name="trangthai">
                            <option>Bình thường</option>
                            <option>Đã hủy</option>
                          </select>
                        </div>
					</div>		

					<div class="form-group">
						<div class="col-md-6 "
							style="padding-left: 121px; padding-top: 15px;">
							<button class="btn btn-primary" type="button">Hủy bỏ</button>
							<button class="btn btn-primary" type="reset">Làm mới</button>
							<button type="submit" class="btn btn-success" name="them">Thêm mới</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%">
			<div class="x_panel">
                  <div class="x_title">
                    <h2>Danh sách loại sản phẩm</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                    
                  <div class="x_content">
                    <div class="table-responsive">
                      <?php 
                        $sql = "select * from loaisanpham order by id_loaisanpham desc";
                        $run = mysqli_query($conn, $sql);
                        
                      ?>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                          
                            <th class="column-title">ID </th>
                            <th class="column-title">Tên loại sản phẩm </th>
                            <th class="column-title">Thứ tự</th>
                            <th class="column-title">Trạng thái </th>
                            <th class="column-title no-link last">Hành động
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            <?php 
                                $i = 0;
                                
                                while ($dong = mysqli_fetch_array($run)){
                            ?>
                          <tr class="even pointer">
                         

                            <td class=" "><?php echo $i;?></td>
                            <td class=" "><?php echo $dong['tenloaisanpham']?></td>
                            <td class=" "><?php echo $dong['thutu']?> </td>
                            <td class="a-right a-right "><?php echo $dong['trangthai'] ?></td>
                            <td class=" last">
                                <ul style="display:inline-block; list-style-type: none; ">
                                    <li style="float: left; width: 20px; border: solid 1px gray; padding: 5px;"><a href="index.php?baiviet=loaisanpham&action=huyloaisanpham&id=<?php echo $dong['id_loaisanpham']?>"><i class="fa fa-close"></i></a></li>
                                    <li style="float: left; width: 20px; border: solid 1px gray; padding: 5px;"><a href="index.php?baiviet=loaisanpham&ac=sualoaisanpham&id=<?php echo $dong['id_loaisanpham']?>"><i class="fa fa-wrench"></i></a></li>
                                </ul>
                            </td>
                          </tr>
                          <?php 
                            $i++;
                                }   
                          ?>
                        </tbody>
                      </table>
                    </div>	
                  </div>
                </div>
		</div>
	</div>
	<div class="clearfix"></div>









	<!-- footer content -->
	<footer>
		<div class="pull-right">
			<a href="https://facebook.com/js1smiller">Phan Văn Tính</a>
		</div>
		<div class="clearfix"></div>
	</footer>
	<!-- /footer content -->
</div>