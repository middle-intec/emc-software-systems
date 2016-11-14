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
	if(isset($_POST["ok"])){
		if(empty($_POST["congty"])){
	echo '<script type="text/javascript">alert("Bạn chưa nhập công ty mình quản lý");</script>';
	}else{
		$congty = $_POST["congty"];
		$tel = $_POST["tel"];
		$donvi = $_POST["donvi"];
		$id_nv = $_POST["id_nv"];
		$tgian = $_POST["tgian"];
		$dt = $_POST["dt"];
		$vat = $_POST["vat"];
		$ln = $_POST["ln"];
		$tndn = $_POST["tndn"];
		$tuvan = $_POST["tuvan"];	
		$thang = date("m");
		$nam = date("Y");
		$qr = "insert into thutuvan values (null,'$congty','$tel','$donvi','$id_nv','$tgian','$dt','$vat','$ln','$tndn','$tuvan','$thang','$nam',0)";
		mysql_query($qr);
		header("location: thutuvan.php");
	}}
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
				<h1 class="page-header">Hệ Thống Thư Tư Vấn</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
                <div class="panel-heading">Viết thư tư vấn:</div>
                <div class="panel-body">
					<form action="" method="post">
						<div class="col-sm-6">   
						<div class="form-group">	
						<label for="email">Thông tin công ty:</label>	 
	                    <select class="form-control congty" name="congty">
	                    <option value="">Công ty</option>
						<?php 
						if(($_SESSION["id_nv"]) <= 2){
						$name=mysql_query("select congty from khachhang");
							while($rown = mysql_fetch_array($name)){?>
							 
	   						 <option value="<?php echo $rown['congty']; ?>"><?php echo $rown['congty']; ?></option>
						<?php }	
					    }else{
						$id_nv = $_SESSION["id_nv"];
						$name=mysql_query("select congty from khachhang where id_nv = '$id_nv'");
							while($rown = mysql_fetch_array($name)){?>
							 
	   						 <option value="<?php echo $rown['congty']; ?>"><?php echo $rown['congty']; ?></option>
						<?php }
					     }
						 ?>
	   					</select>
	   					</div>
	   					<div class="form-group">	
	   					<label for="email">Số điện thoại:</label>	
	                    <select class="form-control tel" name="tel">
	                    <option value="">Số điện thoại</option>
	   					</select></div>
						<div class="form-group">	
	   					<label for="email">Đơn vị:</label>	
	   					<select class="form-control donvi" name="donvi">
	   					<option value="">Đơn vị</option>
	   					</select></div>
						<div class="form-group">
  						<label>Lợi nhuận</label>
						<input class="form-control" name ="ln"  type="text">
						</div>
						<div class="form-group">
  						<label>Nhân viên</label>
						<select class="form-control nv" name="id_nv"> 
						<option value="">Tên nhân viên</option>
	   					</select>
						</div></div>
	   					<div class="col-sm-6">
	   					<div class="form-group">
  						<label>Thời gian</label>
  						<?php
  							$monthnow = (date("m")-1);
							$yearnow = date("Y");
							$thoigian = "T$monthnow/$yearnow";
  						?>
				  		<input class="form-control" value="<?php echo $thoigian;?>" name ="tgian"  type="text">
				  		</div>
				  		<div class="form-group">
  						<label>Doanh thu</label>
				   		<input class="form-control" name ="dt"  type="text">
				   		</div>
				   		<div class="form-group">
  						<label>VAT</label>
						<input class="form-control" name ="vat"  type="text">
						</div>		
						<div class="form-group">
  						<label>TNDN</label>
	                    <input class="form-control" name ="tndn" type="text">
						</div><div class="form-group">
  						<label>Tư vấn</label>
						<textarea class="form-control" name ="tuvan"  type="text"></textarea>
						</div></div>						
	                    <button type="submit" class="btn btn-primary" name="ok">Lưu thư mới</button>
                    </form> 
				</div>
			</div></div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php require"block/profile.php"; ?>
</body>

</html>
