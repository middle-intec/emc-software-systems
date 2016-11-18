<?php
	require"../lib/mConnection.php";
	$key = $_POST['id'];
	$sql = "select * from kpi where id_kpi = '$key'";
	$query = mysql_query($sql);
	$num = mysql_num_rows($query);
	if($num > 0){
		while($row = mysql_fetch_array($query)){	
?>
	<input type="hidden" name="bc" value="<?php echo $row['bc']?>">
<?php
		}
	}
?>