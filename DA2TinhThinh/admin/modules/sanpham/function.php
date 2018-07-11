<?php
//Loại sản phẩm
    include 'config.php';
    $id = $_GET['id'];

    $tenloaisanpham = $_POST['tenloaisanpham'];
    $thutuhienthi = $_POST['thutuhienthi'];
    $trangthai = $_POST['trangthai'];
    if(isset($_POST['them']))
    {
        $sql = "insert into loaisanpham (tenloaisanpham, thutu, trangthai) values('$tenloaisanpham','$thutuhienthi','$trangthai')";
        mysqli_query($conn,$sql);
        header('location:../index.php?baiviet=loaisanpham&ac=them');
    }
    
    elseif(isset($_POST['sualoaisanpham']))
    {
            $sualoaisanpham = "UPDATE `loaisanpham` SET tenloaisanpham = '$tenloaisanpham', thutu = '$thutuhienthi', trangthai = '$trangthai' where id_loaisanpham ='$id'";
            mysqli_query($conn, $sualoaisanpham);
            header('location:../index.php?baiviet=loaisanpham&ac=sualoaisanpham&id=17');
    }

    else {
        
    }
?>