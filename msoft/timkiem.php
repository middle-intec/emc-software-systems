<?php
session_start();
require"../lib/mConnection.php";
require"lib/quanli.php";
?>
<?php 
	if (!isset($_SESSION["id_nv"]) ){
	header("location: index.php");}
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
				<h1 class="page-header">Quản Lý Tìm Kiếm</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
                <div class="panel-heading"> Tìm kiếm khách hàng:</div>
                <div class="panel-body">
                <div class="form-group">
		        <input type="text" placeholder="Nhập tên khách hàng cần tìm" onkeyup="livesearch_kh(this.value);" class="form-control">
		        </div>
				<div id='resultkhachhang'></div>
				</div></div>
				<div class="panel panel-primary">
				<div class="panel-heading"> Tìm kiếm nhân viên:</div>
				<div class="panel-body">
                <div class="form-group">
		        <input type="text" placeholder="Nhập tên nhân viên cần tìm" onkeyup="livesearch_nv(this.value);" class="form-control">
		        </div>
				<div id='resultnhanvien'></div>
				</div></div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php require"block/profile.php"; ?>
	<script>
		function object(){
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else {  // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		return xmlhttp;
		}
		http = object();
		function livesearch_kh(data){
			if(data != ""){
				http.onreadystatechange = process;
				http.open('GET', 'data_ajax/data_timkiem_kh.php?data=' + data, true);
				http.send();
		}else{
			document.getElementById("resultkhachhang").innerHTML = "Hãy nhập tên khách hàng";
		}
	}

	function process(){
		if(http.readyState==4 && http.status==200){
			resultkhachhang = http.responseText;
			document.getElementById("resultkhachhang").innerHTML = resultkhachhang;
		}
	}
	</script>
	<script>
		function object(){
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {  // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	return xmlhttp;
}
http = object();
function livesearch_nv(data){
	if(data != ""){
		http.onreadystatechange = truyvannhanvien;
		http.open('GET', 'data_ajax/data_timkiem_nv.php?data=' + data, true);
		http.send();
	}else{
		document.getElementById("resultnhanvien").innerHTML = "Hãy nhập tên nhân viên";
	}
}

function truyvannhanvien(){
	if(http.readyState==4 && http.status==200){
		resultnhanvien = http.responseText;
		document.getElementById("resultnhanvien").innerHTML = resultnhanvien;
	}
}
	</script>
</body>

</html> 
