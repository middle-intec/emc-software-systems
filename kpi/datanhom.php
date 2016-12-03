<?php
	require"../lib/mConnection.php";
	$key = $_POST['id'];
	$sql = "select * from nhom where id_pb = '$key'";
	$query = mysql_query($sql);
	$num = mysql_num_rows($query);
	echo '<option value="1">Không có nhóm</option>';
	if($num > 0){
		while($row = mysql_fetch_array($query)){	
?>
<option value="<?php echo $row['id_nh']; ?>"><?php echo $row['tennhom']; ?></option>
<?php
		}
	}
?>