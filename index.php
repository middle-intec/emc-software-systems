<?php
session_start(); 
require "lib/mConnection.php";
?>
<?php 
//kiem tra login
if( isset($_POST["ok"]) ){
	$un = $_POST["username"];
	$pa = $_POST["password"];
	$pa = md5($pa);
	$qr = "
	SELECT * FROM nhanvien 
	WHERE
	manv = '$un' and matkhau = '$pa'
	";
	$user = mysql_query($qr);
	if(mysql_num_rows($user)== 1){
	//dang nhap dung
	$row = mysql_fetch_array($user);
	$_SESSION["id_nv"] = $row['id_nv'];
	$_SESSION["ten"] = $row['ten'];
	$_SESSION["pb"] = $row['pb'];
	$_SESSION["id_nh"] = $row['id_nh'];
	$_SESSION["manv"] = $row['manv'];
	$_SESSION["level"] = $row['level'];
	}else {
	echo '<script type="text/javascript">alert("Thông tin chưa chính xác");</script>';
	}
}
?>
<?php 
	if(isset($_SESSION["id_nv"])){
		header("location: thutuvan.php");			
	}
?>
<!DOCTYPE html>
<html>
<?php require"block/head.php"; ?>
    <!--nav.php-->
<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<center><img width="70" src="image/emc-logo.png" alt="Hệ thống phần mềm EMC - EMC Software Systems" title="Hệ thống phần mềm EMC - EMC Software Systems"></center>
				<center><div class="panel-heading">Hệ thống phần mềm EMC</div></center>
				<div class="panel-body">
					<form role="form" action="" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Mã nhân viên" name="username" type="username" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
							</div>
							<input type="submit" name="ok" class="btn btn-primary" value="Đăng nhập">
						</fieldset>
					</form>
				</div>
				<div class="panel-footer">EMC Software Systems - Design by <a target="_blank" href="https://fb.com/middle.intec" title="Kết nối với Middle">Middle InTec<a/></div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	

</body>

</html>
