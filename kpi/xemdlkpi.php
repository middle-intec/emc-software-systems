<?php
  require"../lib/mConnection.php";
  $key = $_POST['id'];
  $sql = "select * from dlkpi where id_dlkpi = '$key'";
  $query = mysql_query($sql);
  $num = mysql_num_rows($query);
  if($num > 0){
    while($row = mysql_fetch_array($query)){  
?>
<div class="panel panel-primary">
<div class="panel-heading"> Chi tiết khách hàng:</div>
<div class="panel-body">
  <div class="form-group">
       <label> Mã khách hàng:</label>
       <p><?php echo $row['makh'];?></p>
  </div>
  <div class="form-group">
       <label> Doanh thu:</label>
       <p><?php echo $row['dthu'];?></p>
  </div>
  <div class="form-group">
       <label> Phải thu:</label>
       <p><?php echo $row['phaithu'];?></p>
  </div>
  <div class="form-group">
       <label> Đã thu:</label>
       <p><?php echo $row['dathu'];?></p>
  </div>
  <div class="form-group">
       <label> Sai lỗi:</label>
       <input type="checkbox"<?php 
        if(($row["sailoi"])==1){echo 'checked="checked"';}?>/>
  </div>
  <div class="form-group">
       <label> Hài lòng:</label>
       <input type="checkbox"<?php 
        if(($row["hailong"])==1){echo 'checked="checked"';}?>/>
  </div>
  <div class="form-group">
       <label> Ký tiếp:</label>
       <input type="checkbox"<?php 
        if(($row["kytiep"])==1){echo 'checked="checked"';}?>/>
  </div>
  <div class="form-group">
       <label> Giới thiệu hợp đồng mới:</label>
       <input type="checkbox"<?php 
        if(($row["gthdmoi"])==1){echo 'checked="checked"';}?>/>
  </div>
  <div class="form-group">
       <label> Dịch vụ khác:</label>
       <input type="checkbox"<?php 
        if(($row["dvkhac"])==1){echo 'checked="checked"';}?>/>
  </div></div></div>
<?php
    }
  }
?>
