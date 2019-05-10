<?php 
    session_start();
    if (isset($_SESSION['Username']) && $_SESSION['pq']==1) {
         
       
    }
    else
    {
        header("Location: ../index.php");
    }
?>
<?php

require('../trangcon/connect.php');
require('../Classes/PHPExcel.php');


if(isset($_POST['nhapfile'])){
    $file = $_FILES['file']['tmp_name'];

    $objReader = PHPExcel_IOFactory::createReaderForFile($file);
    $objReader->setLoadSheetsOnly('Sheet1');

    $objExcel = $objReader->load($file);
    $sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);

    $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
   
   

    for($row = 2; $row<=$highestRow; $row++){
       
        $hoten = $sheetData[$row]['B'];
        $hinhanh = $sheetData[$row]['C'];
        $gioitinh =  $sheetData[$row]['D'];
        $ngaysinh = $sheetData[$row]['E'];
        $noisinh = $sheetData[$row]['F'];
        $diachi = $sheetData[$row]['G'];
        $cmnd = $sheetData[$row]['H'];
        $noicap = $sheetData[$row]['I'];
        $masobh = $sheetData[$row]['J'];
        $sotaikhoan = $sheetData[$row]['K'];
        $sdt = $sheetData[$row]['L'];
        $email = $sheetData[$row]['M'];

        $sql = "INSERT INTO nhanvien VALUES (null,'".$hoten."','".$gioitinh."','".$hinhanh."','".$ngaysinh."','".$noisinh."','".$diachi."','".$cmnd."','".$noicap."','".$masobh."','".$sotaikhoan."','".$sdt."','".$email."')";
        mysqli_query($conn,$sql);
          // echo "<script type='text/javascript'>alert('Đã thêm thành công');</script>"; 
         header('location:nhanvien.php');
        
    }
  
 
}

?>