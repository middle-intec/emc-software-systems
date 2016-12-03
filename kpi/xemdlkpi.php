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
<div class="form-horizontal">
<div class="form-group">
     <label class="control-label col-sm-4"> Mã Khách hàng:</label>
     <div class="col-sm-8"><label class="radio-inline">
     <?php echo $row['makh'];?></label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Tạm tính:</label>
      <div class="col-sm-8"><label class="radio-inline"><?php echo $row['tamtinh'];?></label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Phải thu:</label>
      <div class="col-sm-8"><label class="radio-inline"><?php echo $row['phaithu'];?></label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> %đảm nhận:</label>
      <div class="col-sm-8"><label class="radio-inline"><?php echo $row['damnhan'];?>%</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Nợ ĐK</label>
      <div class="col-sm-8">
      <label class="radio-inline"><?php echo $row['nodk'];?></label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Thực thu</label>
      <div class="col-sm-8">
      <label class="radio-inline"><?php echo $row['thucthu'];?></label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Thư tư vấn</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["tuvan"])==1){echo 'checked';}?> value="1" type="radio" disabled name="tuvan">Có</label>
      <label class="radio-inline"><input value="0" type="radio" disabled name="tuvan">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Thời gian TV(Phút)</label>
      <div class="col-sm-8">
      <label class="radio-inline"><?php echo $row['timetuvan'];?> Phút</label>
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Thời gian cung cấp DV(p)</label>
      <div class="col-sm-8">
      <label class="radio-inline"><?php echo $row['timecungcapdichvu'];?> Phút</label>
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> In đóng chứng từ</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["indct"])==1){echo 'checked';}?> value="1" type="radio" disabled name="indct">Có</label>
      <label class="radio-inline"><input value="0" type="radio" disabled name="indct">Không</label></div>
</div>
<div class="form-group">
     <label class="control-label col-sm-4"> Giao chứng từ</label>
     <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["giaoct"])==1){echo 'checked';}?> value="1" type="radio" disabled name="giaoct">Có</label>
      <label class="radio-inline"><input value="0" type="radio" disabled name="giaoct">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Báo cáo thuế</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["bct"])==1){echo 'checked';}?> value="1" type="radio" disabled name="bct">Có</label>
      <label class="radio-inline"><input value="0" type="radio" disabled name="bct">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Báo cáo tài chính</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["bctc"])==1){echo 'checked';}?> value="1" type="radio" disabled name="bctc">Có</label>
      <label class="radio-inline"><input value="0" type="radio" disabled name="bctc">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Sai lỗi</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["sailoi"])==1){echo 'checked';}?> value="1" type="radio" disabled name="sailoi">Có</label>
      <label class="radio-inline"><input value="0" type="radio" disabled name="sailoi">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Hài lòng</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["hailong"])==1){echo 'checked';}?> value="1" type="radio" disabled name="hailong">Có</label>
      <label class="radio-inline"><input value="0" type="radio" disabled name="hailong">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Ký tiếp</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["kytiep"])==1){echo 'checked';}?> value="1" type="radio" disabled name="kytiep">Có</label>
      <label class="radio-inline"><input value="0" type="radio" disabled name="kytiep">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4">Giới thiệu hợp động mới</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["gthdmoi"])==1){echo 'checked';}?> value="1" type="radio" disabled name="gthdmoi">Có</label>
      <label class="radio-inline"><input value="0" type="radio" disabled name="gthdmoi">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Dịch vụ khác</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["dvkhac"])==1){echo 'checked';}?> value="1" disabled type="radio" name="dvkhac">Có</label>
      <label class="radio-inline"><input value="0" type="radio" disabled name="dvkhac">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Loại HĐ phát sinh</label>
      <div class="col-sm-8">
      <label class="radio-inline"><?php echo $row['loaihd'];?></label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Doanh thu phát sinh</label>
      <div class="col-sm-8">
      <label class="radio-inline"><?php echo $row['doanhthu'];?></label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Hợp đồng mất</label>
      <div class="col-sm-8"><label class="radio-inline"><input <?php 
               if(($row["hdmat"])==1){echo 'checked';}?> value="1" disabled type="radio" name="hdmat">Có</label>
      <label class="radio-inline"><input value="0" type="radio" disabled name="hdmat">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Tạm ngưng</label>
      <div class="col-sm-8"><label class="radio-inline"><input <?php 
               if(($row["tamngung"])==1){echo 'checked';}?> value="1" disabled type="radio" name="tamngung">Có</label>
      <label class="radio-inline"><input value="0" type="radio" disabled name="tamngung">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> DT Tính lương</label>
      <div class="col-sm-8">
      <label class="radio-inline"><?php echo $row['dttinhluong'];?></label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Ghi chú</label>
      <div class="col-sm-8">
      <label class="radio-inline"><?php echo $row['ghichu'];?></label></div>
</div>
</div>  
  </div></div>
<?php
    }
  }
?>
