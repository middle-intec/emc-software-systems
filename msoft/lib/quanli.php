<?php 
function vietthutuvan($manv,$thang,$nam){
	$qr = "select * from thutuvan
			where id_nv = '$manv' and thang = '$thang' and nam ='$nam'
			order by id_thutuvan desc";
			return mysql_query($qr);
}
function xemthutuvan($thang,$nam){
	$qr = "select * from thutuvan
			where thang = '$thang' and nam ='$nam'
			order by id_thutuvan desc";
			return mysql_query($qr);
}
function kiemsoarthutuvan($thang,$nam){
	$qr = "select * from thutuvan inner join nhanvien on thutuvan.id_nv = nhanvien.id_nv
		where thang = '$thang' and nam ='$nam'
			order by id_thutuvan desc
			";
			return mysql_query($qr);
}
function top10thutuvan(){
	$qr = "select congty,tel,donvi,nhanvien.ten,tgian,dt,vat,ln,tndn,tuvan from `thutuvan` inner join `nhanvien` on thutuvan.id_nv = nhanvien.id_nv
			order by id_thutuvan desc
			limit 20
			";
			return mysql_query($qr);
}
function suathutuvan($id_thutuvan){
	$qr = "select * from thutuvan
			where id_thutuvan = '$id_thutuvan'";
			$row = mysql_query($qr);
			return mysql_fetch_array($row);
}
function exportexcel($thang,$nam){
	$qr = "select * from thutuvan inner join nhanvien on thutuvan.id_nv = nhanvien.id_nv
			where thang = '$thang' and nam = '$nam'
			";
			return mysql_query($qr);
}
function exportexcelNV($manv,$thang,$nam){
	$qr = "select * from thutuvan
			where id_nv = '$manv' and thang = '$thang' and nam = '$nam'
			";
			return mysql_query($qr);
}
function exportexcelKH(){
	$qr = "select * from khachhang inner join nhanvien on khachhang.id_nv = nhanvien.id_nv
		";
			return mysql_query($qr);
}
function ChPass($id_nv){
	$qr = "select * from nhanvien
			where id_nv = '$id_nv'";
			$row = mysql_query($qr);
			return mysql_fetch_array($row);
}
function khachhang($limit){
	$qr = "select * from khachhang inner join nhanvien on khachhang.id_nv = nhanvien.id_nv
			order by id_kh desc
			limit 0, $limit
			";
			return mysql_query($qr);
}
function suakhachhang($id_kh){
	$qr = "select * from khachhang inner join nhanvien on khachhang.id_nv = nhanvien.id_nv
			where id_kh = '$id_kh'
			";
			$row = mysql_query($qr);
			return mysql_fetch_array($row);
}
function nhanvien($start,$limit){
	$qr = "SELECT * FROM nhanvien inner join phongban on nhanvien.pb = phongban.id_pb inner join level on nhanvien.level = level.id_level
			order by id_nv desc
			limit $start, $limit
			";
			return mysql_query($qr);
}
function tblnhanvien(){
	$qr = "select * from nhanvien inner join phongban on nhanvien.pb = phongban.id_pb
			order by id_nv desc
			";
			return mysql_query($qr);
}
function suanhanvien($id_nv){
	$qr = "select * from nhanvien inner join phongban on nhanvien.pb = phongban.id_pb
			where id_nv = '$id_nv'
			";
			$row = mysql_query($qr);
			return mysql_fetch_array($row);
}
?>
