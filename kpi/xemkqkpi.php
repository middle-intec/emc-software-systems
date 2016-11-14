<?php
  require"../lib/mConnection.php";
  $key = $_POST['id'];
  $sql = "select * from kqkpi where id_kqkpi = '$key'";
  $query = mysql_query($sql);
  $num = mysql_num_rows($query);
  if($num > 0){
    while($row = mysql_fetch_array($query)){  
?>
<div class="panel panel-primary">
<div class="panel-heading">Hành động cải tiến & Kết quả tuần 1:</div>
<div class="panel-body">
  <div class="form-group">
       <label> Hành động cải tiến:</label>
       <p><?php echo $row['hdct1'];?></p>
  </div>
  <div class="form-group">
       <label> Kết quả HĐCT:</label>
       <p><?php echo $row['ghichu1'];?></p>
  </div></div></div>
  <div class="panel panel-primary">
<div class="panel-heading">Hành động cải tiến & Kết quả tuần 2:</div>
<div class="panel-body">
  <div class="form-group">
       <label> Hành động cải tiến:</label>
       <p><?php echo $row['hdct2'];?></p>
  </div>
  <div class="form-group">
       <label> Kết quả HĐCT:</label>
       <p><?php echo $row['ghichu2'];?></p>
  </div></div></div>
  <div class="panel panel-primary">
<div class="panel-heading">Hành động cải tiến & Kết quả tuần 3:</div>
<div class="panel-body">
  <div class="form-group">
       <label> Hành động cải tiến:</label>
       <p><?php echo $row['hdct3'];?></p>
  </div>
<div class="form-group">
       <label> Kết quả HĐCT:</label>
       <p><?php echo $row['ghichu3'];?></p>
</div></div></div>
<div class="panel panel-primary">
<div class="panel-heading">Hành động cải tiến & Kết quả tuần 4:</div>
<div class="panel-body">
  <div class="form-group">
       <label> Hành động cải tiến:</label>
       <p><?php echo $row['hdct4'];?></p>
  </div>
  <div class="form-group">
       <label> Kết quả HĐCT:</label>
       <p><?php echo $row['ghichu4'];?></p>
  </div></div></div>
<?php
    }
  }
?>
