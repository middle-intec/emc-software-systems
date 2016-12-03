<?php
session_start();
require"lib/mConnection.php";
require"lib/quanli.php";
?>
<?php 
	if (!isset($_SESSION["id_nv"]) ){
	header("location: index.php");}
?>
<?php
if(isset($_POST["exit"])){
	header("location: dangkydoanhthu.php");
}
if(isset($_POST["edit"])){
      $id_dlkpi = $_GET['id_dlkpi'];
      $tamtinh = $_POST["tamtinh"];  
      $phaithu = $_POST["phaithu"];  
      $damnhan = $_POST["damnhan"];
      $nodk = $_POST["nodk"];
      $thucthu = $_POST["thucthu"];
      $timetuvan = $_POST["timetuvan"];
      $timecungcapdichvu = $_POST["timecungcapdichvu"];
      $loaihd = $_POST["loaihd"];
      $doanhthu = $_POST["doanhthu"];
      $dttinhluong = $_POST["dttinhluong"];
      $hdmat = $_POST["hdmat"];
      $tamngung = $_POST["tamngung"];
      $ghichu = $_POST["ghichu"];
      $tuvan = $_POST["tuvan"];
      $indct = $_POST["indct"];
      $giaoct = $_POST["giaoct"];
      $bct = $_POST["bct"];
      $bctc = $_POST["bctc"];
      $sailoi = $_POST["sailoi"];
      $hailong = $_POST["hailong"];
      $kytiep = $_POST["kytiep"];
      $gthdmoi = $_POST["gthdmoi"];
      $dvkhac = $_POST["dvkhac"];
      $query = "  
      UPDATE dlkpi set tamtinh = '$tamtinh',phaithu = '$phaithu',damnhan = '$damnhan',nodk = '$nodk',tuvan = '$tuvan',indct = '$indct',giaoct = '$giaoct',bct = '$bct',bctc = '$bctc',sailoi = '$sailoi', hailong = '$hailong', kytiep = '$kytiep',  gthdmoi = '$gthdmoi', dvkhac = '$dvkhac', ghichu = '$ghichu', thucthu = '$thucthu',timetuvan = '$timetuvan', timecungcapdichvu = '$timecungcapdichvu', loaihd = '$loaihd', doanhthu = '$doanhthu', dttinhluong = '$dttinhluong', hdmat = '$hdmat', tamngung = '$tamngung'
      where id_dlkpi = '$id_dlkpi'
      ";  
     mysql_query($query);
     header("location: dangkydoanhthu.php");
}
?>
<!DOCTYPE html>
<html>
<?php require"block/head.php"; ?>
    <!--nav.php-->
<body>
    <?php require"block/nav.php"; ?>
    <!--nav.php-->
	<?php require"block/sidebar.php"; ?>
    <!--sidebar.php-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<?php require"block/breadcrumb.php"; ?>
	    <!--breadcrumb.php-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Hệ Thống Đánh Giá Hiệu Quả Công Việc EMC_BSC</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li><a href="#tab1" data-toggle="tab">Công ty</a></li>
							<li class="active"><a href="#tab2" data-toggle="tab">KPIs của tôi</a></li>
							<li><a href="kpis_phong.php">Phòng <?php
							$manv = $_SESSION["manv"];
							$name=mysql_query("select * from nhanvien inner join phongban on nhanvien.pb = phongban.id_pb where manv = '$manv'");
							while($rown = mysql_fetch_array($name)){
								echo $rown['phongban'];
							}
							 ?>
							 </a></li>
							<li><a href="#tab4" data-toggle="tab"> Chia sẽ</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade" id="tab1">
							<?php require"kpi/#tab1.php"; ?>
	    					<!--#tab1.php-->
							</div>
							<div class="tab-pane fade in active" id="tab2">
							<ul class="nav nav-pills">
								<li><a href="kpis.php"> Đăng ký KPIs</a></li>
								<li class="active"><a href="#pilltab2" data-toggle="tab"> Đăng ký Khách hàng</a></li>
							</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="pilltab2">
							<!--nội dung pilltab2-->
<?php
  $key = $_GET['id_dlkpi'];
  $sql = "select * from dlkpi where id_dlkpi = '$key'";
  $query = mysql_query($sql);
  $num = mysql_num_rows($query);
  if($num > 0){
    while($row = mysql_fetch_array($query)){  
?>
<form class="form-horizontal" action="" method="POST">
<div class="col-sm-6">
<div class="form-group">
     <label class="control-label col-sm-4"> Mã Khách hàng:</label>
     <div class="col-sm-8">
     <input type="text" disabled value="<?php echo $row['makh'];?>" class="form-control"></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Tạm tính:</label>
      <div class="col-sm-8">
      <input type="text" value="<?php echo $row['tamtinh'];?>" class="form-control" name="tamtinh"></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Phải thu:</label>
      <div class="col-sm-8">
      <input type="text" value="<?php echo $row['phaithu'];?>" class="form-control" name="phaithu"></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> % đảm nhận:</label>
      <div class="col-sm-8">
      <input type="text" value="<?php echo $row['damnhan'];?>" class="form-control" name="damnhan"></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Nợ ĐK:</label>
      <div class="col-sm-8">
      <input type="text" value="<?php echo $row['nodk'];?>" class="form-control" name="nodk"></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Thực thu:</label>
      <div class="col-sm-8">
      <input type="text" value="<?php echo $row['thucthu'];?>" class="form-control" name="thucthu"></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Thời gian TV (phút):</label>
      <div class="col-sm-8">
      <input type="text" value="<?php echo $row['timetuvan'];?>" class="form-control" name="timetuvan"></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Thời gian cung cấp DV (Phút):</label>
      <div class="col-sm-8">
      <input type="text" value="<?php echo $row['timecungcapdichvu'];?>" class="form-control" name="timecungcapdichvu"></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Loại HĐ phát sinh:</label>
      <div class="col-sm-8">
      <input type="text" value="<?php echo $row['loaihd'];?>" class="form-control" name="loaihd"></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Doanh thu phát sinh:</label>
      <div class="col-sm-8">
      <input type="text" value="<?php echo $row['doanhthu'];?>" class="form-control" name="doanhthu"></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Doanh thu tính lương:</label>
      <div class="col-sm-8">
      <input type="text" value="<?php echo $row['dttinhluong'];?>" class="form-control" name="dttinhluong"></div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
      <label class="control-label col-sm-4"> Hợp động mất:</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["hdmat"])==1){echo 'checked';}?> value="1" type="radio" name="hdmat">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="hdmat">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Tạm ngưng:</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["tamngung"])==1){echo 'checked';}?> value="1" type="radio" name="tamngung">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="tamngung">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Thư tư vấn</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["tuvan"])==1){echo 'checked';}?> value="1" type="radio" name="tuvan">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="tuvan">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> In đóng chứng từ</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["indct"])==1){echo 'checked';}?> value="1" type="radio" name="indct">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="indct">Không</label></div>
</div>
<div class="form-group">
     <label class="control-label col-sm-4"> Giao chứng từ</label>
     <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["giaoct"])==1){echo 'checked';}?> value="1" type="radio" name="giaoct">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="giaoct">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Báo cáo thuế</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["bct"])==1){echo 'checked';}?> value="1" type="radio" name="bct">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="bct">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Báo cáo tài chính</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["bctc"])==1){echo 'checked';}?> value="1" type="radio" name="bctc">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="bctc">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Sai lỗi</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["sailoi"])==1){echo 'checked';}?> value="1" type="radio" name="sailoi">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="sailoi">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Hài lòng</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["hailong"])==1){echo 'checked';}?> value="1" type="radio" name="hailong">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="hailong">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Ký tiếp</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["kytiep"])==1){echo 'checked';}?> value="1" type="radio" name="kytiep">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="kytiep">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4">Giới thiệu hợp động mới</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["gthdmoi"])==1){echo 'checked';}?> value="1" type="radio" name="gthdmoi">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="gthdmoi">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Dịch vụ khác</label>
      <div class="col-sm-8">
      <label class="radio-inline"><input <?php 
               if(($row["dvkhac"])==1){echo 'checked';}?> value="1" type="radio" name="dvkhac">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="dvkhac">Không</label></div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4"> Ghi chú</label>
      <div class="col-sm-8">
      <textarea class="form-control" name="ghichu"><?php echo $row['ghichu'];?></textarea>
      </div>
</div></div>
<div class="form-group">
<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Lưu ngay</button>
<button type="submit" name="exit" class="btn btn-danger"><span class="glyphicon glyphicon-eye-close"></span> Không Lưu</button>
</div>
</form>  
<?php
    }
  }
?>
							</div>
						</div>
							</div>
							<div class="tab-pane fade" id="tab3">
							<?php require"kpi/#tab3.php"; ?>
	    					<!--#tab3.php-->
								<!--nội dung tab3-->
							</div>
							<div class="tab-pane fade" id="tab4">
							<?php require"kpi/#tab4.php"; ?>
	    					<!--#tab4.php-->
								<!--nội dung tab4-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php require"block/profile.php"; ?>
</body>

</html>