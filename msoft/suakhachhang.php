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
$id_kh = $_GET["id_kh"];
$row_suakhachhang = suakhachhang($id_kh);
?>

<?php 
	if(isset($_POST["ok"])){
		$id_kh = $row_suakhachhang ["id_kh"];
		$makh = $_POST["makh"];
		$congty = $_POST["congty"];
		$tel = $_POST["tel"];
		$donvi = $_POST["donvi"];
		$daidien = $_POST["daidien"];
		$id_nv = $_POST["id_nv"];
		$qr = "update khachhang set makh = '$makh',congty = '$congty',tel = '$tel',donvi = '$donvi',daidien = '$daidien',id_nv = '$id_nv'
			where id_kh = '$id_kh'";
		mysql_query($qr);
		header("location: khachhang.php");
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
				<h1 class="page-header">Quản Lý Khách Hàng</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Đang sửa khách hàng: <?php echo $row_suakhachhang ["donvi"]?></div>
					<div class="panel-body">
		              <div class="abc">
		               <a class="btn btn-primary" href="javascript:history.go(-1)">Trở về</a>
		              </div>
                	<form action="" method="post">
						<div class="col-sm-6"> 
						<div class="form-group">	
						<label for="email"> Mã khách hàng:</label>	
	                    <input class="form-control" name="makh" value="<?php echo $row_suakhachhang ["makh"]?>" type="text">
	   					</div>  
						<div class="form-group">	
						<label for="email">Thông tin công ty:</label>	 
	                    <input class="form-control" name ="congty"  value="<?php echo $row_suakhachhang ["congty"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email">Số điện thoại:</label>
	   					<input class="form-control" name ="tel"  value="<?php echo $row_suakhachhang ["tel"]?>" type="text">
	   					</div>
						</div>
	   					<div class="col-sm-6">
	   					<div class="form-group">	
	   					<label for="email">Đơn vị:</label>	
	   					<input class="form-control" name ="donvi"  value="<?php echo $row_suakhachhang ["donvi"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
						<label for="email"> Người đại diện:</label>	
	                    <input class="form-control" name="daidien" value="<?php echo $row_suakhachhang ["daidien"]?>" type="text">
	   					</div> 
	   					<div class="form-group">
  						<label>Nhân viên QL</label>
						<select class="form-control" name="id_nv"> 
						<option value="0"> Tạm Ngưng </option>
						<?php 
							$name=mysql_query("select * from nhanvien where pb=3");
									while($rown = mysql_fetch_array($name)){?>
			   				<option value="<?php echo $rown["id_nv"]; ?>"><?php echo $rown['ten']; ?></option>
			   			<?php }
						?>
	   					</select>
						</div>
						</div>						
	                    <div class="abc"><button type="submit" class="btn btn-primary" name="ok">Lưu khách hàng</button></div>
                    </form> 
        		</div>
			</div></div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php require"block/profile.php"; ?>
</body>

</html>
