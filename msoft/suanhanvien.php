<?php
ob_start();
session_start();
require"../lib/mConnection.php";
require"lib/quanli.php";
?>
<?php 
	if (!isset($_SESSION["id_nv"]) ){
	header("location: index.php");}
?>
<?php 
$id_nv = $_GET["id_nv"];
$row_suanhanvien = suanhanvien($id_nv);
?>

<?php 
	if(isset($_POST["ok"])){
		$id_nv = $row_suanhanvien ["id_nv"];
		$manv = $_POST["manv"];
		$ten = $_POST["ten"];
		$pb = $_POST["pb"];
		$nhom = $_POST["id_nh"];
		$level = $_POST["level"];
		$qr = "update nhanvien set manv = '$manv',ten = '$ten',pb = '$pb',id_nh = '$nhom',level = '$level'
			where id_nv = '$id_nv'";
		mysql_query($qr);
		header("location: nhanvien.php");
	}
?>

<?php 
	if(isset($_POST["reset"])){
		$id_nv = $row_suanhanvien ["id_nv"];
		$manv = $_POST["manv"];
		$matkhau = md5($manv);
		$qr = "update nhanvien set matkhau = '$matkhau'
			where id_nv = '$id_nv'";
		mysql_query($qr);
		header("location: nhanvien.php");
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
				<h1 class="page-header">Quản Lý Nhân Viên </h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Đang sửa nhân viên : <?php echo $row_suanhanvien ["ten"]?></div>
					<div class="panel-body">
		              <div class="abc">
		               <a class="btn btn-primary" href="javascript:history.go(-1)">Trở về</a>
		              </div>
                	<form action="" method="post">
						<div class="col-sm-6">   
						<div class="form-group">	
						<label for="email">Thông tin nhân viên:</label>	 
	                    <input class="form-control" name ="manv"  value="<?php echo $row_suanhanvien ["manv"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Tên nhân viên:</label>
	   					<input class="form-control" name ="ten"  value="<?php echo $row_suanhanvien ["ten"]?>" type="text">
	   					</div>
						</div>
	   					<div class="col-sm-6">
	   					<div class="form-group">	
	   					<label for="email"> Phòng ban:</label>
	   					<select class="form-control" name="pb">	
	   					<option value=""> Chọn phòng ban</option>
	                    <?php 
						$name=mysql_query("select * from phongban");
						while($rown = mysql_fetch_array($name)){?>
	   					<option value="<?php echo $rown['id_pb']; ?>"><?php echo $rown['phongban']; ?></option>
						<?php }
						 ?>
	   					</select>
	   					</div>
	   					<div class="form-group">
  						<label> Nhóm</label>
				   		<select class="form-control" name="id_nh">
	                    <option value=""> Chọn nhóm</option>
	                    <?php 
						$name=mysql_query("select * from nhom");
						while($rown = mysql_fetch_array($name)){?>
	   					<option value="<?php echo $rown['id_nh']; ?>"><?php echo $rown['tennhom']; ?></option>
						<?php }
						 ?>
	   					</select>
						</div>
	   					<div class="form-group">
  						<label> Quyền</label>
				   		<select class="form-control" name="level">
	                    <option value=""> Chọn quyền</option>
	                    <?php 
						$name=mysql_query("select * from level");
						while($rown = mysql_fetch_array($name)){?>
	   					<option value="<?php echo $rown['id_level']; ?>"><?php echo $rown['level']; ?></option>
						<?php }
						 ?>
	   					</select>
						</div>
						</div>						
	                    <div class="abc">
	                    <button type="submit" class="btn btn-primary" name="ok">Lưu nhân viên</button>
	                    <button title="Lưu ý: Khi Reset mật khẩu sẽ trở về mặc định là Mã nhân viên" type="submit" class="btn btn-primary" name="reset">Reset Mật Khẩu</button>
	                    </div>
                    </form> 
        		</div>
			</div></div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php require"block/profile.php"; ?>
</body>

</html>
