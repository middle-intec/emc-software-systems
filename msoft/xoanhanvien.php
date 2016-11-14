<?php
ob_start();
session_start();
require"../lib/mConnection.php";
require"lib/quanli.php";
?>
<?php
	$id_nv = $_GET["id_nv"];
	$qr = "delete from nhanvien where id_nv = '$id_nv'";
	mysql_query($qr);
	header("location: nhanvien.php");
?>