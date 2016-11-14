<?php
require"../lib/mConnection.php";
$sotin1trang = 50;

$trang = $_GET["trang"];
settype($trang, "int");

$from = ($trang - 1) * $sotin1trang;

$qr = " SELECT * FROM khachhang inner join nhanvien on khachhang.id_nv = nhanvien.id_nv
			order by id_kh desc
			limit $from, $sotin1trang
			";

$khachhang = mysql_query($qr);
$stt = $from;
while($row = mysql_fetch_array($khachhang)){
	$stt++;
 echo "
 	<tr class='roweven'>
	<td>".$stt."</td>
	<td>".$row ["makh"]."</td>
	<td>".$row ["congty"]."</td>
	<td>".$row ["tel"]."</td>
	<td>".$row ["donvi"]."</td>
	<td>".$row ["daidien"]."</td>
	<td>".$row ["ten"]."</td>
	<td>
		<div class='btn-group'>
			<a class='btn btn-primary btn-sm' href='suakhachhang.php?id_kh=".$row ["id_kh"]."'>Sửa</a>";?>
			<a class='btn btn-primary btn-sm' onclick = "return confirm('Bạn có chắc là muốn xóa không ?')" showdeletebutton='True' <?php echo "href='xoakhachhang.php?id_kh=".$row ["id_kh"]."'>Xóa</a>
		</div>
	</td>
	</tr>
 ";
}
?>