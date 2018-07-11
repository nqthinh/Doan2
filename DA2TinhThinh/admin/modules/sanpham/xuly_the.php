<?php
    include 'config.php';
    
    $tenthe = $_POST['tenthe'];
    $timkiem = $_POST['timkiem'];
    $sanpham = $_POST['myvalue'];
    $id=$_GET['idlthe'];
    
    if(isset($_POST['themmoithe']))
    {
        $sql ="INSERT INTO the (tenthe, ID_sanpham, timkiem) values ('$tenthe','$sanpham','$timkiem')";
        mysqli_query($conn, $sql);
        header('location:../index.php?baiviet=themmoithe');
    
    }
     
    else if(isset($_POST['chinhsuathe']))
    {
        $sql = "UPDATE the set tenthe='$tenthe', ID_sanpham = '$sanpham', timkiem='$timkiem' WHERE id_the = '$id'";
        mysqli_query($conn, $sql);
        header('location:../index.php?baiviet=danhsachthe');
    }
    

?>