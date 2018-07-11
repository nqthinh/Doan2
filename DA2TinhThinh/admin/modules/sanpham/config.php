<?php
    $tenmaychu = 'localhost';
    $tentaikhoan = 'root';
    $matkhau = '';
    $csdl = 'gioithieusanpham';
    $conn = mysqli_connect($tenmaychu,$tentaikhoan, $matkhau,$csdl) or die('không kết nối được');
    mysqli_select_db($conn,$csdl); 
    mysqli_query($conn, "SET NAMES 'utf8'");
?>