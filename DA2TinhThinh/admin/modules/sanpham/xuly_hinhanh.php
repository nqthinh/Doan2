
<?php
   
       if(isset($_POST['upload']))
        {
           
           $varIDSP = $_POST['myvalue'];
           foreach ($_FILES['file1']['name'] as $i => $name)
           {
               $name = $_FILES['file1']['name'][$i];
               $type = $_FILES['file1']['type'][$i];
               $size = $_FILES['file1']['size'][$i];
               $tmp  = $_FILES['file1']['tmp_name'][$i];
               $explode = explode('.', $name);
               $ext = end($explode);
               $path = '../img/';
               $thongbao[] = array();
           }
           foreach ($_FILES['file2']['name'] as $i2 => $nam2)
           {
               $name = $_FILES['file2']['name'];
               $type = $_FILES['file2']['type'];
               $size = $_FILES['file2']['size'];
               $tmp2  = $_FILES['file2']['tmp_name'];
               $explode = explode('.', $name);
               $ext = end($explode);
               $path = '../img/';
               $thongbao[] = array();
           }
           foreach ($_FILES['file3']['name'] as $i3 => $name)
           {
               $name = $_FILES['file3']['name'];
               $type = $_FILES['file3']['type'];
               $size = $_FILES['file3']['size'];
               $tmp3  = $_FILES['file3']['tmp_name'];
               $explode = explode('.', $name);
               $ext = end($explode);
               $path = '../img/';
               $thongbao[] = array();
           }
           foreach ($_FILES['file4']['name'] as $i4 => $name)
           {
               $name = $_FILES['file4']['name'];
               $type = $_FILES['file4']['type'];
               $size = $_FILES['file4']['size'];
               $tmp4  = $_FILES['file4']['tmp_name'];
               $explode = explode('.', $name);
               $ext = end($explode);
               $path = '../img/';
               $thongbao[] = array();
           }
           if(empty($tmp) || empty($tmp2) || empty($tmp3) || empty($tmp4))
           {
               echo  $thongbao[] = 'Vui lòng chọn đủ 4 ảnh';
           }
           else {
               $chophep = array('jpeg', 'png', 'gif','bmp');
               $max_size = 4000000;
               if(in_array($ext, $chophep) === false)
                   echo $thongbao[] = "Định dạng không hợp lệ";
                if($size > $max_size)
                    echo $thongbao[] = "File quá lớn";
           }
        if(empty($thongbao))
        {
            if(!file_exists('../img/'))
            {
                mkdir('img', 0777);
            }
            if(move_uploaded_file($tmp, $path))
            {
                echo 'Upload thành công';
            }
            else {
                echo 'Upload thất bại';
            }
        }
        
        }




 
?>
