<?php
ob_start();
session_start();
require"lib/mConnection.php";
require"lib/quanli.php";
?>
<?php 
	if (!isset($_SESSION["id_nv"]) ){
	header("location: index.php");}
?>
<?php 
$id_nv = $_SESSION["id_nv"];
$row_ChPass = ChPass($id_nv);
?>

<?php 
	if(isset($_POST["ok"])){
		if(empty($_POST["matkhau1"])){
		    echo '<script type="text/javascript">alert("Bạn chưa nhập mật khẩu mới");</script>';
		}else{
			$matkhau1 = $_POST["matkhau1"];
			$matkhau2 = $_POST["matkhau2"];
			if(($matkhau1) == ($matkhau2)){
				$id_nv = $_SESSION["id_nv"];
				$matkhau2 = $_POST["matkhau2"];
				$matkhau = md5($matkhau2);
				$qr = "update nhanvien set matkhau = '$matkhau'
					where id_nv = '$id_nv'";
				mysql_query($qr);
				header("location: index.php");
			}else{
				echo '<script type="text/javascript">alert("Thông tin chưa chính xác");</script>';
			}
		}
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
				<h1 class="page-header">Thông tin người dùng</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Thay đổi mật khẩu:</div>
		              <div class="abc">
		               <a class="btn btn-primary" href="javascript:history.go(-1)">Trở về</a>
		              </div>
                	<form action="" method="post">
						<div class="col-sm-6">   						
						<div class="form-group">
  						<label>Tài khoản/ Mã nhân viên</label>
						<input disabled="" class="form-control" name ="manv" value="<?php echo $row_ChPass ["manv"]?>" type="text">
						</div>
						<div class="form-group">
  						<label>Tên nhân viên</label>
				  		<input disabled="" class="form-control" value="<?php echo $row_ChPass ["ten"]?>" name ="ten"  type="text">
				  		</div></div>
	   					<div class="col-sm-6">
	   					<div class="form-group">
  						<label>Mật khẩu mới *</label>
				  		<input class="form-control" value="" name ="matkhau1"  type="password">
				  		</div>
				  		<div class="form-group">
  						<label>Nhập lại mật khẩu mới *</label>
				   		<input class="form-control" name ="matkhau2"  value="" type="password">
				   		</div>		
						</div>						
	                    <div class="abc"><button onclick="alert('Bạn đồng ý với thay đổi trên!')" type="submit" class="btn btn-primary" name="ok">Lưu thay đổi</button></div>
	                    <div class="form-group">
  						<label>Lưu ý: * Thông tin cần phải nhập</label>
				   		</div>	
                    </form> 
        		</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php require"block/profile.php"; ?>
</body>

</html>
