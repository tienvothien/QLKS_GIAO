<?php 
session_start();
if (isset($_SESSION['tendangnhap']) && isset($_SESSION['capdotruycap'])) {
	
}else {
	header("location:./login/");
}
 ?>