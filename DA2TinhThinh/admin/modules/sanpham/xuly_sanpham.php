<?php
    include 'config.php';
    if (isset($_GET['idsanpham']))
    {
        $id=$_GET['idsanpham']; $tensanpham = $_POST['tensanpham'];     $giasanpham = $_POST['giasanpham'];             $mota = $_POST['mota'];
        $congnghemanhinh = $_POST['congnghemanhinh'];                   $chuanmanhinh = $_POST['chuanmanhinh'];         $dophangiai =  $_POST['dophangiai'];
        $congnghecamung = $_POST['congnghecamung'];                     $matkinhmanhinh= $_POST['matkinhmanhinh'];      $danhbaluutru=$_POST['danhbaluutru'];
        $bonhotrong=$_POST['bonhotrong'];                               $bonhoconlai=$_POST['bonhoconlai'];             $thenhongoai=$_POST['thenhongoai'];
        $hotrothetoida=$_POST['hotrothetoida'];                         $camerasaudophangiai=$_POST['camerasaudophangiai'];
        $camerasauquayphim=$_POST['camerasauquayphim'];                 $camerasaudenflash=$_POST['camerasaudenflash'];
        $camerasauchupnangcao=$_POST['camerasauchupnangcao'];           $cameratruocdophangiai=$_POST['cameratruocdophangiai'];
        $cameratruockhac=$_POST['cameratruockhac'];                     $bangtan2g=$_POST['bangtan2g'];                 $bangtan3g=$_POST['bangtan3g'];
        $bangtan4g=$_POST['bangtan4g'];                                 $jack=$_POST['jack'];                           $wifi=$_POST['wifi'];
        $gps=$_POST['GPS'];                                             $bluetooth=$_POST['bluetooth'];                 $congketnoikhac=$_POST['congketnoikhac'];
        $congsac=$_POST['congsac'];                                     $khecamsim=$_POST['khecamsim'];                 $ram= $_POST['ram'];
        $hedieuhanh=$_POST['hedieuhanh'];                               $chipset=$_POST['chipset'];                     $tocdoCPU=$_POST['tocdoCPU'];
        $GPU=$_POST['GPU'];                                             $kichthuocsanpham=$_POST['kichthuocsanpham'];   $chatlieu=$_POST['chatlieu'];
        $trongluong=$_POST['trongluong'];                               $chongnuoc=$_POST['chongnuoc'];                 $loaicpu=$_POST['loaicpu'];
        $sonhancpu=$_POST['sonhancpu'];                                 $loaipin=$_POST['loaipin'];                     $dungluonpin=$_POST['dungluonpin'];
        $cothethaoroi=$_POST['cothethaoroi'];                           $thoigiandamthoai=$_POST['thoigiandamthoai'];   $chedosacnhanh=$_POST['ungdungnghenhac'];
        $ungdungnghenhac=$_POST['ungdungnghenhac'];                     $ungdungxemphim=$_POST['ungdungxemphim'];       $ungdungradio=$_POST['ungdungradio'];
        $chucnangkhac=$_POST['chucnangkhac'];                           $maumanhinh = $_POST['maumanhinh'];             $cameratruocvideoscall = $_POST['cameratruocvideoscall'];
        $hotrosim=$_POST['hotrosim'];                                   $hinhanh='hinhanh';
        $loaisanpham=$_POST['loaisanpham'];                              $gprs = $_POST['gprs'];                         $usb= $_POST['USB'];
        if(isset($_POST['themsanpham'])){
            $sql="INSERT INTO `sanpham`(, `ID_loaisanpham`, `sp_tensanpham`, `sp_giasanpham`, `sp_baiviet`, `sp_trangthai`,
                 `sp_mh_congnghemanhinh`, `Sp_mh_chuanmanhinh`, `sp_mh_maumanhinh`, `sp_mh_dophangiai`, `sp_mh_congnghecamung`, 
                `sp_mh_matkinhmanhinh`, `sp_bn_danhbaluutru`, `sp_bn_bonhotrong`, `sp_bn_bonhoconlai`, `sp_bn_thenhongoai`,
                 `sp_bn_hotrothetoida`, `sp_cas_dophangiai`, `sp_cas_quayphim`, `sp_cas_denflash`, `sp_cas_chupnangcao`,
                 `sp_cat_videoscall`, `sp_cat_dophangiai`, `sp_cat_thongtinkhac`, `sp_kn_bangtan2g`, `sp_kn_bangtan3g`,
                 `sp_kn_bangtan4g`, `sp_kn_hotrosim`, `sp_kn_wifi`, `sp_kn_gps`, `sp_kn_bluetooth`, `sp_kn_GPRS/EDGE`,
                 `sp_kn_USB`, `sp_kn_congketnoikhac`, `sp_kn_congsac`, `sp_kn_jack`, `sp_kn_khecamsim`, `sp_bn_ram`, 
                `sp_hedieuhanh`, `sp_chipset`, `sp_tocdoCPU`, `sp_GPU`, `sp_kichthuoc`, `sp_thietke_kieudang`, 
                `sp_thietke_chatlieu`, `sp_thieke_trongluong`, `sp_thietke_chongnuoc`, `sp_loaiCPU`, `sp_sonhanCPU`,
                 `sp_pin_loaipin`, `sp_pin_dungluongpin`, `sp_pin_cothethaoroi`, `sp_pin_thoigiandamthoai`, 
                `sp_pin_chedosacnhanh`, `sp_ud_nghennhac`, `sp_ud_xemphim`, `sp_ud_nghenhac`,
                 `sp_ud_radio`, `sp_ud_chucnangkhac`, `hinhanh`)
                 VALUES ('$loaisanpham','$tensanpham','$giasanpham','$mota','Bình thường','$congnghemanhinh','$chuanmanhinh','$maumanhinh','$dophangiai','$congnghecamung',
                '$matkinhmanhinh','$danhbaluutru','$bonhotrong', '$bonhoconlai', '$thenhongoai','$hotrothetoida', '$camerasaudophangiai',
                '$camerasauquayphim', '$camerasaudenflash', '$camerasauchupnangcao', '$cameratruocvideoscall','$cameratruocdophangiai', '$cameratruockhac',
                '$bangtan2g', '$bangtan3g', '$bangtan4g', '$hotrosim', '$wifi', '$gps', '$bluetooth', '$gprs', '$usb', '$congketnoikhac', '$congsac',
                '$jack', '$khecamsim', '$ram', '$chatlieu', '$trongluong', '$chongnuoc', '$chongnuoc', '$loaicpu','$sonhancpu',
                '$loaipin', '$dungluonpin', '$cothethaoroi', '$thoigiandamthoai', 
                '$chedosacnhanh', '$ungdungnghenhac', '$ungdungxemphim', '$ungdungnghenhac', '$ungdungradio','$chucnangkhac', '$hinhanh';                
            ";
            mysqli_query($conn, $sql);
            header('local:../index.php?baiviet=danhsachsanpham');
        
        }
        else if(isset($_POST['chinhsuasanpham']))
        {
            $sql = "UPDATE `sanpham` SET `sp_tensanpham`='$tensanpham',`sp_giasanpham`='$giasanpham',
            `sp_baiviet`='$mota',`sp_mh_congnghemanhinh`='$congnghemanhinh',`Sp_mh_chuanmanhinh`='$chuanmanhinh', `sp_mh_maumanhinh` = '$maumanhinh',
            ,`sp_mh_dophangiai`='$dophangiai',`sp_mh_congnghecamung`='$congnghecamung',`sp_mh_matkinhmanhinh`='$matkinhmanhinh',
            `sp_bn_danhbaluutru`='$danhbaluutru',`sp_bn_bonhotrong`='$bonhotrong',`sp_bn_bonhoconlai`='$bonhoconlai',
            `sp_bn_thenhongoai`='$thenhongoai',`sp_bn_hotrothetoida`='$hotrothetoida',`sp_cas_dophangiai`='$camerasaudophangiai',
            `sp_cas_quayphim`='$camerasauquayphim',`sp_cas_denflash`='$camerasaudenflash',`sp_cas_chupnangcao`='$camerasauchupnangcao',
            `sp_cat_videoscall`='$cameratruocvideoscall',`sp_cat_dophangiai`='$cameratruocdophangiai',
            `sp_cat_thongtinkhac`='$cameratruockhac',`sp_kn_bangtan2g`='$bangtan2g',`sp_kn_bangtan3g`='$bangtan3g',`sp_kn_bangtan4g`='$bangtan4g',
            `sp_kn_hotrosim`='$hotrosim',`sp_kn_wifi`='$wifi',`sp_kn_gps`='$gps',`sp_kn_bluetooth`='$bluetooth',
            `sp_kn_GPRS/EDGE`='$gprs',`sp_kn_USB`='$usb',`sp_kn_congketnoikhac`='$congketnoikhac',
            `sp_kn_congsac`='$congsac',`sp_kn_jack`='$jack',`sp_kn_khecamsim`='$khecamsim',`sp_bn_ram`='$ram',
            `sp_hedieuhanh`='$hedieuhanh',`sp_chipset`='$chipset',`sp_tocdoCPU`='$tocdoCPU',`sp_GPU`='$GPU',
            `sp_kichthuoc`='$kichthuocsanpham',`sp_thietke_chatlieu`='$chatlieu',
            `sp_thieke_trongluong`='$trongluong',`sp_thietke_chongnuoc`='$chongnuoc',`sp_loaiCPU`='$loaicpu',
            `sp_sonhanCPU`='$sonhancpu',`sp_pin_loaipin`='$loaipin',`sp_pin_dungluongpin`='$dungluonpin',
            `sp_pin_cothethaoroi`='$cothethaoroi',`sp_pin_thoigiandamthoai`='$thoigiandamthoai',`sp_pin_chedosacnhanh`='$chedosacnhanh',
            `sp_ud_nghennhac`='$ungdungnghenhac',`sp_ud_xemphim`='$ungdungxemphim',`sp_ud_radio`='$ungdungradio',
            `sp_ud_chucnangkhac`='$chucnangkhac' WHERE ID_sanpham =.$id";
            mysqli_query($conn,$sql);
            header('local:../index.php');
        }
    }
    else {
        header('local:../index.php?baiviet=danhsachsanpham');
    }    
    
    
    
?>