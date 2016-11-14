<?php
	require"../lib/mConnection.php";
	$key = $_POST['id'];
	$sql = "select * from kpi where makpi = '$key'";
	$query = mysql_query($sql);
	$num = mysql_num_rows($query);
	if($num > 0){
		while($row = mysql_fetch_array($query)){	
?>
	<option value="<?php echo $row['tenkpi']?>"><?php echo $row['tenkpi']?></option>
<?php
		}
	}
?>