<?php
include 'conn.php';
$dl1 = mysqli_query($conn, "SELECT * FROM taikhoan");
if (mysqli_num_rows($dl1)) {
?>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>STT</th>
		</tr>
	</thead>
	
	<?php
	while ($row = mysqli_fetch_array($dl1)) {
		echo "
				<tbody>
					<tr>
						<td>$row[tendangnhap]</td>
								
		
					</tr>
				</tbody>
	";
	$stt++;
	}
	?>
</table>
<?php
}
?>