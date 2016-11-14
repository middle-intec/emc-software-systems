<?php
ob_start();
session_start();
require"lib/mConnection.php";
require"lib/quanli.php";
?>
<?php
	$id_thutuvan = $_GET["id_thutuvan"];
	$qr = "delete from thutuvan where id_thutuvan = '$id_thutuvan'";
	mysql_query($qr);
	header("location: thutuvan.php");
?>