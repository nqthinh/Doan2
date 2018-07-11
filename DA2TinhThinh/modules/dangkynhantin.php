<?php
include 'admin/modules/sanpham/config.php';
    $email = $_POST['email'];
    if(isset($_POST['dangky']))
    {
        $sql = "insert into nguoidung (nd_diachiemail) values ('$email')";
        mysqli_query($conn, $sql);
        header('location:../index.php') ;
    }
?>
