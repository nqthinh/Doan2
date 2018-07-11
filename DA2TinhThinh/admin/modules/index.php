<?php 
    include 'sanpham/config.php';
    $select = "select * from sanpham inner join loaisanpham on sanpham.ID_loaisanpham = loaisanpham.id_loaisanpham";
    $run = mysqli_query($conn, $select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="assets/img/logo-fav.png">
<title>TINHTHINH</title>
<link rel="stylesheet" type="text/css"
	href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css" />
<link rel="stylesheet" type="text/css"
	href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" type="text/css"
	href="assets/lib/datatables/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
</head>
<body>
	<div class="be-wrapper">
		<nav class="navbar navbar-default navbar-fixed-top be-top-header">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="index.php" class="" style="margin: 20px 20px 20px 20px; padding: 20px 20px 20px 20px;">TINHTHINH</a>
				</div>
				<div class="be-right-navbar">
					<ul class="nav navbar-nav navbar-right be-user-nav">
							<li><a href="../../index.php"><span class="icon mdi mdi-power"></span>     Đăng xuất</a></li>
							</ul></li>
							
					</ul>
					<div class="page-title">
						<span>Website Giới thiệu sản phẩm</span>
					</div>
					
				</div>
			</div>
		</nav>
		<div class="be-left-sidebar">
			<div class="left-sidebar-wrapper">
				<a href="#" class="left-sidebar-toggle">Dashboard</a>
				<div class="left-sidebar-spacer">
					<div class="left-sidebar-scroll">
						<div class="left-sidebar-content">
							<ul class="sidebar-elements">
								<li class="divider">Menu</li>
								<li class="active"><a href="index.php"><i
										class="icon mdi mdi-home"></i><span>Sản phẩm</span></a></li>
								<li class="active"><a href="index.php?baiviet=danhsachhinhanh"><i class="icon mdi mdi-book-image"></i><span>Hình
											ảnh</span></a></li>
								
								<li class="active"><a href="index.php?baiviet=danhsachloaisanpham"><i class="icon mdi mdi-help"></i><span>Loại sản phẩm</span></a></li>
							
								<li class="active"><a href="index.php?baiviet=danhsachnhanmail"><i class="icon mdi mdi-email"></i><span>Nhận
											email</span></a></li>
								<li class="active"><a href="index.php?baiviet=danhsachthe"><i class="icon mdi mdi-tag"></i><span>Thẻ</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
		if(isset($_GET['baiviet']))
		{
		    include 'content.php';		   
		}
		else
		{
		    include 'danhsachsanpham.php';   
		}
		
		
		
		?>
		
		
		
		
	
	</div>
	<script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
	<script
		src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"
		type="text/javascript"></script>
	<script src="assets/js/main.js" type="text/javascript"></script>
	<script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"
		type="text/javascript"></script>
	<script src="assets/lib/datatables/js/jquery.dataTables.min.js"
		type="text/javascript"></script>
	<script src="assets/lib/datatables/js/dataTables.bootstrap.min.js"
		type="text/javascript"></script>
	<script
		src="assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js"
		type="text/javascript"></script>
	<script src="assets/lib/datatables/plugins/buttons/js/buttons.html5.js"
		type="text/javascript"></script>
	<script src="assets/lib/datatables/plugins/buttons/js/buttons.flash.js"
		type="text/javascript"></script>
	<script src="assets/lib/datatables/plugins/buttons/js/buttons.print.js"
		type="text/javascript"></script>
	<script
		src="assets/lib/datatables/plugins/buttons/js/buttons.colVis.js"
		type="text/javascript"></script>
	<script
		src="assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js"
		type="text/javascript"></script>
	<script src="assets/js/app-tables-datatables.js" type="text/javascript"></script>
	<script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dataTables();
      });
    </script>
</body>
</html>