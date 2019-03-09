<?php
include 'conn.php';
$dl1 = mysqli_query($conn, "SELECT * FROM phong where xoa =0");
if (mysqli_num_rows($dl1)) {
	while ($row = mysqli_fetch_array($dl1)) {
		echo "

					 		<div class='col-xs-6 col-sm-4 col-md-2 col-lg-2'>
					 				<div class='thumbnail'>
					 					<div class='caption'>
					 						<h3>Phòng số</h3>
					 						<p>
					 							$row[MA_PHONG]
					 						</p>
					 						";?>
				<p>
					<button type="button" class="btn btn-info nutnek xoaphong" id="<?php echo $row['MA_PHONG']; ?>">Xóa</button>
					<button type="button" class="btn btn-info sua_phong " id="<?php echo $row['MA_PHONG']; ?>" >Sửa</button>
					<button type="button" class="btn btn-info chitiet_phong" id="<?php echo $row['MA_PHONG']; ?>" >Chi tiết</button>
				</p>
					 						<?php echo ";</div>

					 					</div>
					 				</div>
			";
	}
}

?>
