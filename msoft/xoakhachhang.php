<?php
ob_start();
session_start();
require"../lib/mConnection.php";
require"lib/quanli.php";
?>
<?php
	$id_kh = $_GET["id_kh"];
	$qr = "delete from khachhang where id_kh = '$id_kh'";
	mysql_query($qr);
	header("location: khachhang.php");
?>