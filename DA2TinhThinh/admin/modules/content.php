<?php
    $baiviet = $_GET['baiviet'];
    if($baiviet == "chinhsuachitietsanpham")
    {
        include 'sanpham/chinhsuachitietsanpham.php';
    }
    if($baiviet == "themmoisanpham")
    {
        include 'sanpham/themmoisanpham.php';
    }
    if($baiviet=="danhsachhinhanh")
    {
        include 'sanpham/danhsachhinhanh.php';
    }
    if($baiviet=="themmoihinhanh")
    {
        include 'sanpham/themmoihinhanh.php';
    }
    if($baiviet=="chinhsuahinhanh")
    {
        include 'sanpham/chinhsuahinhanh.php';
    }
    if($baiviet=="danhsachloaisanpham")
    {
        include 'sanpham/danhsachloaisanpham.php';
    }
    if($baiviet=="themmoiloaisanpham")
    {
        include 'sanpham/themmoiloaisanpham.php';
    }
    if($baiviet=="chinhsualoaisanpham")
    {
        include 'sanpham/chinhsualoaisanpham.php';
    }
    if($baiviet=="danhsachnhanmail")
    {
        include 'sanpham/danhsachnhanmail.php';
    }
    if($baiviet=="danhsachthe")
    {
        include 'sanpham/danhsachthe.php';
    }
    if($baiviet=="chinhsuathe")
    {
        include 'sanpham/chinhsuathe.php';
    }
    if($baiviet=="themmoithe")
    {
        include 'sanpham/themmoithe.php';
    }
    
    
    
    
?>