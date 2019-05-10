<?php
include 'conn.php';
$dlkh = mysqli_query($conn, "SELECT * FROM loaiphong where XOA =0");
if (mysqli_num_rows($dlkh)) {
?>
<table class="table table-hover table-bordered table-responsive">
	<thead>
		<tr>
			<th>STT</th>
			<th>Mã loại phòng</th>
			<th>Tên loại phòng</th>
			<th>Diện tích (Đơn vị m2)</th>
			<th>Số lượng người ở</th>
			<th>Sửa</th>
			<th>Xóa</th>
			
		</tr>
	</thead>
	<tbody>
	<?php
	$stt=1;
	while ($row = mysqli_fetch_array($dlkh)) {
		echo "
			<tr>
				<td>$stt</td>
				<td>$row[MA_LOAI_PHONG]</td>
				<td>$row[TEN_LOAI_PHONG]</td>
				<td>$row[DIEN_TICH]</td>
				<td>$row[SL_NGUOI_O]</td>
			";?>
			<!-- Sửa -->
			<td>
				<button type="button" class="btn btn-info sua_loaiphong " id="<?php echo $row['MA_LOAI_PHONG']; ?>" > <span class="glyphicon glyphicon-pencil"></span> Sửa</button>
			</td>
			<td>
				<button type="button" class="btn btn-info xoa_loaiphong" id="<?php echo $row['MA_LOAI_PHONG']; ?>"> <span class="glyphicon glyphicon-trash"></span> Xóa</button>
			</td>
		<?php
			echo "
				</tr>
			";
		$stt++;
	}
	?>
	</tbody>
</table>
<?php
}
?>