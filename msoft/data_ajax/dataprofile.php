<?php
	require"../../lib/mConnection.php";
	$key = $_POST['id'];
	$sql = "select * from nhanvien inner join phongban on nhanvien.pb = phongban.id_pb inner join level on nhanvien.level = level.id_level where id_nv = '$key'";
	$query = mysql_query($sql);
	$num = mysql_num_rows($query);
	if($num > 0){
		while($row = mysql_fetch_array($query)){	
?>
	<div class="row">
    <div class="col-sm-4">
     <center><img src="image/emc-logo.png" class="img-circle" alt="<?php echo $row['ten'];?>" title="<?php echo $row['ten'];?>" width="100"></center>
    </div>
    <div class="col-sm-8">
    	<div class="form-group">
      		<label>Mã nhân viên:</label> <?php echo $row['manv'];?>
      		<br/>
      		<label>Tên nhân viên:</label> <?php echo $row['ten'];?>
      		<br/>
      		<label>Phòng ban:</label> <?php echo $row['phongban'];?>
      		<br/>
      		<label>Chức vụ:</label> <?php echo $row['level'];?>
      	</div> 
    </div>	
<?php
		}
	}
?>
