<?php 
	$HOST = "localhost";
	$USER ="root";
	$PASS ="";
	$DB = "quanlykhachsan";
	$ERROR1="loi mysql";
	$ERROR2 = " Loi DB";
	$conn = mysqli_connect($HOST, $USER, $PASS) or die($ERROR1);
	@mysqli_select_db($conn, $DB) or die($ERROR2);
	mysqli_set_charset($conn, 'UTF8');
	@mysqli_query("SET NAME 'utf8'");
	date_default_timezone_set('Asia/Ho_Chi_Minh');

?>