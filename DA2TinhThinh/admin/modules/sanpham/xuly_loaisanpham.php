<?php
    include 'config.php';
    
    $tenloaisanpham = $_POST['tenloaisanpham'];
    $thutu = $_POST['thutu'];
    $trangthai = $_POST['trangthai'];
    $Id=$_GET['idloaisanpham'];

    
    if(isset($_POST['themmoiloaisanpham']))
    {
        $sql ="INSERT INTO loaisanpham (tenloaisanpham, thutu, trangthai) values ('$tenloaisanpham','$thutu','$trangthai')";
        mysqli_query($conn, $sql);
        header('location:../index.php?baiviet=themmoiloaisanpham');

    }
   
    else if(isset($_POST['chinhsualoaisanpham']))
    {
        $sql = "UPDATE loaisanpham set tenloaisanpham='$tenloaisanpham', thutu = '$thutu', trangthai='$trangthai' WHERE id_loaisanpham = '$Id'";
        mysqli_query($conn, $sql);
        header('location:../index.php?baiviet=danhsachloaisanpham');
    }
   
?>