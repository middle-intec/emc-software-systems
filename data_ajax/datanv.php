<?php
	require"../lib/mConnection.php";
	$key = $_POST['id'];
	$sql = "select * from `khachhang` inner join `nhanvien` on nhanvien.id_nv = khachhang.id_nv where khachhang.congty = '$key'";
	$query = mysql_query($sql);
	$num = mysql_num_rows($query);
	if($num > 0){
		while($row = mysql_fetch_array($query)){	
?>
	<option value="<?php echo $row['id_nv']?>"><?php echo $row['ten']?></option>
<?php
		}
	}
?>