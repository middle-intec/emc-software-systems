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
	header("location: kpis.php");
}
if(isset($_POST["edit"])){
      $id_kqkpi = $_GET['id_kqkpi'];
      $kq = $_POST["kq"];  
      $hdct = $_POST["hdct"];  
      $hdct1 = $_POST["hdct1"];  
      $hdct2 = $_POST["hdct2"];
      $hdct3 = $_POST["hdct3"];
      $hdct4 = $_POST["hdct4"];
      $ghichu = $_POST["ghichu"];
      $ghichu1 = $_POST["ghichu1"];
      $ghichu2 = $_POST["ghichu2"];
      $ghichu3 = $_POST["ghichu3"];
      $ghichu4 = $_POST["ghichu4"];
      date_default_timezone_set('Asia/Ho_Chi_Minh');
      $ngaysua = date("Y-m-d H:i:s");
      $query = "  
      UPDATE kqkpi set kq = '$kq',hdct = '$hdct',hdct1 = '$hdct1',hdct2 = '$hdct2',hdct3 = '$hdct3',hdct4 = '$hdct4',ghichu = '$ghichu',ghichu1 = '$ghichu1',ghichu2 = '$ghichu2',ghichu3 = '$ghichu3', ghichu4 = '$ghichu4', ngaysua = '$ngaysua'
      where id_kqkpi = '$id_kqkpi'
      ";  
     mysql_query($query);
     header("location: kpis.php");
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
							<li><a href="#tab1" data-toggle="tab">Công ty </a></li>
							<li class="active"><a href="#tab2" data-toggle="tab">KPIs của tôi</a></li>
							<li><a href="#tab3" data-toggle="tab"> Phòng <?php
							$manv = $_SESSION["manv"];
							$name=mysql_query("select * from nhanvien inner join phongban on nhanvien.pb = phongban.id_pb where manv = '$manv'");
							while($rown = mysql_fetch_array($name)){
								echo $rown['phongban'];
							}
							 ?> </a></li>
							<li><a href="#tab4" data-toggle="tab">CHIA SẼ</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade" id="tab1">
							<?php require"kpi/#tab1.php"; ?>
	    					<!--tab1.php-->
							</div>
							<div class="tab-pane fade in active" id="tab2">
							<ul class="nav nav-pills">
								<li class="active"><a href="#pilltab1" data-toggle="tab"> Đăng ký KPIs</a></li>
								<li><a href="dangkydoanhthu.php">Đăng ký Doanh Thu</a></li>
								<li><a href="#pilltab3" data-toggle="tab">Phê Duyệt KPIs </a></li>
							</ul>
		
						<div class="tab-content">
						<div class="tab-pane fade in active" id="pilltab1">
<?php
  $key = $_GET['id_kqkpi'];
  $sql = "select * from kqkpi where id_kqkpi = '$key'";
  $query = mysql_query($sql);
  $num = mysql_num_rows($query);
  if($num > 0){
    while($row = mysql_fetch_array($query)){  
?>
<form action="" method="POST">
<div class="col-sm-6">
<div class="form-group">
     <label> KPIs</label>
     <input type="text" disabled="disabled" value="<?php echo $row['makpi'];?> - <?php echo $row['kpi'];?>" class="form-control">
</div>
<div class="form-group">
      <label> Hành động cải tiến </label>
      <textarea name="hdct" class="form-control"><?php echo $row['hdct'];?></textarea>
</div>
<div class="form-group">
      <label> Hành động cải tiến tuần 1 </label>
      <textarea name="hdct1" class="form-control"><?php echo $row['hdct1'];?></textarea>
</div>
<div class="form-group">
      <label> Hành động cải tiến tuần 2</label>
      <textarea name="hdct2" class="form-control"><?php echo $row['hdct2'];?></textarea> 
</div>
<div class="form-group">
       <label> Hành động cải tiến tuần 3</label>
      <textarea name="hdct3" class="form-control"><?php echo $row['hdct3'];?></textarea> 
</div>
<div class="form-group">
       <label> Hành động cải tiến tuần 4</label>
      <textarea name="hdct4" class="form-control"><?php echo $row['hdct4'];?></textarea> 
</div></div>
<div class="col-sm-6">
<div class="form-group">
     <label> Kết quả </label>
     <input type="text" name="kq" value="<?php echo $row['kq'];?>" class="form-control">
</div>
<div class="form-group">
       <label> Kết quả HĐCT</label>
      <textarea name="ghichu" class="form-control"><?php echo $row['ghichu'];?></textarea> 
</div>
<div class="form-group">
       <label> Kết quả HĐCT tuần 1</label>
      <textarea name="ghichu1" class="form-control"><?php echo $row['ghichu1'];?></textarea>
</div>
<div class="form-group">
       <label> Kết quả HĐCT tuần 2</label>
      <textarea name="ghichu2" class="form-control"><?php echo $row['ghichu2'];?></textarea>
</div>
<div class="form-group">
       <label> Kết quả HĐCT tuần 3</label>
      <textarea name="ghichu3" class="form-control"><?php echo $row['ghichu3'];?></textarea>
</div>
<div class="form-group">
       <label> Kết quả HĐCT tuần 4</label>
      <textarea name="ghichu4" class="form-control"><?php echo $row['ghichu4'];?></textarea>
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
							<div class="tab-pane fade" id="pilltab2">
							<?php require"kpi/#pilltab2.php"; ?>
							<!--nội dung pilltab2-->
							</div>
							<div class="tab-pane fade" id="pilltab3">
							<?php require"kpi/#pilltab3.php"; ?>
								<!--nội dung pilltab3-->
							</div>
						</div>
							</div>
							<div class="tab-pane fade" id="tab3">
							<?php require"kpi/#tab3.php"; ?>
								<!--nội dung tab3-->
							</div>
							<div class="tab-pane fade" id="tab4">
							<?php require"kpi/#tab4.php"; ?>
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