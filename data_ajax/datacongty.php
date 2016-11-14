<?php
	require"../lib/mConnection.php";
	$key = $_POST['id'];
	$sql = "select * from khachhang where congty = '$key'";
	$query = mysql_query($sql);
	$num = mysql_num_rows($query);
	if($num > 0){
		while($row = mysql_fetch_array($query)){	
?>
	<option value="<?php echo $row['tel']?>"><?php echo $row['tel']?></option>
<?php
		}
	}
?>