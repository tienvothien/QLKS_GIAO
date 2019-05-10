<?php 
include 'conn.php';
$loaiphpng1=mysqli_query($conn,"SELECT COUNT(*) AS lp1 FROM phong WHERE phong.MA_LOAI_PHONG='lp111'");
if (mysqli_num_rows($loaiphpng1)) {
	while ($row = mysqli_fetch_array($loaiphpng1)) {
		echo "

					 						<h3>Loại phòng 1</h3>
					 						<p>
					 							$row[lp1] phòng
					 						</p>";
	}
	
}
 ?>