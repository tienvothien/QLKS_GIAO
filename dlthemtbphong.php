<?php
include 'conn.php';
$dl1 = mysqli_query($conn, "SELECT * FROM loaiphong where xoa =0");
if (mysqli_num_rows($dl1)) {
	while ($row = mysqli_fetch_array($dl1)) {
		echo "

					 		<div class='col-xs-6 col-sm-4 col-md-2 col-lg-2'>
					 				<div class='thumbnail'>
					 					<div class='caption'>
					 						<h3>Loại phòng</h3>
					 						<p>
					 							$row[TEN_LOAI_PHONG]

					 						</p>
					 						";?>
				<p>

					<button type="button" class="btn btn-info xoa_tbphong " id="<?php echo $row['MA_PHONG']; ?>" >Xóa</button>
					<button type="button" class="btn btn-info chitiet_tbp" id="<?php echo $row['MA_LOAI_PHONG']; ?>" >Chi tiết</button>
				</p>
					 						<?php echo ";</div>

					 					</div>
					 				</div>
			";
	}
}

?>