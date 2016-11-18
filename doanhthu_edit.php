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
      $dthu = $_POST["dthu"];  
      $phaithu = $_POST["phaithu"];  
      $dathu = $_POST["dathu"];
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
      UPDATE dlkpi set dthu = '$dthu',phaithu = '$phaithu',dathu = '$dathu',tuvan = '$tuvan',indct = '$indct',giaoct = '$giaoct',bct = '$bct',bctc = '$bctc',sailoi = '$sailoi', hailong = '$hailong', kytiep = '$kytiep',  gthdmoi = '$gthdmoi', dvkhac = '$dvkhac'
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
							<li><a href="#tab3" data-toggle="tab">Phòng <?php
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
								<li class="active"><a href="#pilltab2" data-toggle="tab"> Đăng ký Doanh Thu</a></li>
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
<form action="" method="POST">
<div class="col-sm-6">
<div class="form-group">
     <label> Mã Khách hàng</label>
     <input type="text" disabled value="<?php echo $row['makh'];?>" class="form-control">
</div>
<div class="form-group">
      <label> Doanh thu </label>
      <input type="text" value="<?php echo $row['dthu'];?>" class="form-control" name="dthu">
</div>
<div class="form-group">
      <label> Phải thu</label>
      <input type="text" value="<?php echo $row['phaithu'];?>" class="form-control" name="phaithu">
</div>
<div class="form-group">
      <label> Đã thu</label>
      <input type="text" value="<?php echo $row['dathu'];?>" class="form-control" name="dathu">
</div>
<div class="form-group">
      <label> Thư tư vấn</label>
      <label class="radio-inline"><input <?php 
               if(($row["tuvan"])==1){echo ' checked="checked"';}?> value="1" type="radio" name="tuvan">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="tuvan">Không</label>
</div>
<div class="form-group">
      <label> In đóng chứng từ</label>
      <label class="radio-inline"><input <?php 
               if(($row["indct"])==1){echo ' checked="checked"';}?> value="1" type="radio" name="indct">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="indct">Không</label>
</div></div>
<div class="col-sm-6">
<div class="form-group">
     <label> Giao chứng từ</label>
      <label class="radio-inline"><input <?php 
               if(($row["giaoct"])==1){echo ' checked="checked"';}?> value="1" type="radio" name="giaoct">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="giaoct">Không</label>
</div>
<div class="form-group">
      <label> Báo cáo thuế</label>
      <label class="radio-inline"><input <?php 
               if(($row["bct"])==1){echo ' checked="checked"';}?> value="1" type="radio" name="bct">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="bct">Không</label>
</div>
<div class="form-group">
      <label> Báo cáo tài chính</label>
      <label class="radio-inline"><input <?php 
               if(($row["bctc"])==1){echo ' checked="checked"';}?> value="1" type="radio" name="bctc">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="bctc">Không</label>
</div>
<div class="form-group">
      <label> Sai lỗi</label>
      <label class="radio-inline"><input <?php 
               if(($row["sailoi"])==1){echo ' checked="checked"';}?> value="1" type="radio" name="sailoi">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="sailoi">Không</label>
</div>
<div class="form-group">
      <label> Hài lòng</label>
      <label class="radio-inline"><input <?php 
               if(($row["hailong"])==1){echo ' checked="checked"';}?> value="1" type="radio" name="hailong">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="hailong">Không</label>
</div>
<div class="form-group">
      <label> Ký tiếp</label>
      <label class="radio-inline"><input <?php 
               if(($row["kytiep"])==1){echo ' checked="checked"';}?> value="1" type="radio" name="kytiep">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="kytiep">Không</label>
</div>
<div class="form-group">
      <label> Giới thiệu hợp động mới</label>
      <label class="radio-inline"><input <?php 
               if(($row["gthdmoi"])==1){echo ' checked="checked"';}?> value="1" type="radio" name="gthdmoi">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="gthdmoi">Không</label>
</div>
<div class="form-group">
      <label> Dịch vụ khác</label>
      <label class="radio-inline"><input <?php 
               if(($row["dvkhac"])==1){echo ' checked="checked"';}?> value="1" type="radio" name="dvkhac">Có</label>
      <label class="radio-inline"><input value="0" type="radio" name="dvkhac">Không</label>
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
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"> Form chi tiết</h4>  
                </div>  
                <div class="modal-body" id="dlkpi_chitiet">  
                </div>  
                <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>
  <div id="add_doanhthu_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Form đăng ký Doanh thu</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form_DT">
                       	<input type="hidden" name="manv" value = "<?php echo $_SESSION['id_nv'];?>" class="form-control">
                       	<input type="hidden" name="mapb" value = "<?php echo $_SESSION['pb'];?>" class="form-control">
                       	<input type="hidden" name="manhom" value = "<?php echo $_SESSION['id_nh'];?>" class="form-control">
                        <label>Khách hàng</label>
                        <select name="makh" id="makh" class="form-control makpi"> 
                           <option value="">Chọn Khách hàng</option> 
                            <?php
                            $id_nv = $_SESSION['id_nv'];
                            $level = $_SESSION['level'];
                            if(($level)==1){
                            	$name=mysql_query("SELECT * from khachhang");
                            }else{
                            	$name=mysql_query("SELECT * from khachhang where id_nv = '$id_nv'");
                            }
							while($rown = mysql_fetch_array($name)){?>
	   						 <option value="<?php echo $rown['makh']; ?>"><?php echo $rown['congty']; ?></option>
						<?php }   
                            ?>
                          </select>  
                          <br />  
                          <label>Doanh thu</label>
                          <input type="text" name="dthu" id="dthu" class="form-control">
                          <br />  
                          <label> Phải thu</label> 
                          <input type="text" name="phaithu" id="phaithu" class="form-control">  
                          <br />  
                          <label> Đã thu</label>
                          <input type="text" name="dathu" id="dathu" class="form-control"> 
                          <br />  
                          <input type="submit" name="insert" id="insert" value="Lưu ngay" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>
 <script>  
 $(document).ready(function(){  
 	  $('#add_DT').click(function(){  
           $('#insert_form_DT')[0].reset();  
      		}); 
      $('#insert_form_DT').on("submit", function(event){  
           event.preventDefault();  
           if($('#makh').val() == "")  
           {  
                alert("Bạn chưa nhập tên Khách hàng");  
           }  
           else if($('#dthu').val() == '')  
           {  
                alert("Bạn chưa nhập Doanh thu");  
           }  
           else if($('#phaithu').val() == '')  
           {  
                alert("Bạn chưa nhập phải thu");  
           }  
           else if($('#dathu').val() == '')  
           {  
                alert("Bạn chưa nhập đã thu ");  
           }  
           else  
           {  
                $.ajax({  
                     url:"kpi/themdlkpi.php",  
                     method:"POST",  
                     data:$('#insert_form_DT').serialize(),  
                     success:function(data){  
                          $('#insert_form_DT')[0].reset();  
                          $('#add_doanhthu_Modal').modal('hide');  
                          $('#doanhthu_table').html(data);  
                     }  
                });  
           }  
      });      
      $(".xemdlkpi").click(function(){
			var id = $(this).attr('data-id');
			$.post("kpi/xemdlkpi.php", {id: id}, function(data){
				$("#dlkpi_chitiet").html(data);
			})
		})
	  $('.xoadlkpi').click(function(){  
           if(confirm("Bạn có chắc chắn là muốn Xóa dữ liệu này không?"))  
           {  
               var id = $(this).attr('data-id');
                $.ajax({  
                          url:'kpi/xoadlkpi.php',  
                          method:'POST',  
                          data:{id:id},  
                          success:function()  
                          { 
                           $('tr#'+id+'').css('background-color', '#ccc');
                           $('tr#'+id+'').fadeOut('slow');  
                           location.reload();
                          }  
                     });  
           }  
           else  
           {  
                return false;  
           }  
      });
	$('#nap_pilltab2').click(function(){  
           location.reload();  
      		});
	$('[data-toggle="tooltip"]').tooltip(); 
	
 });  
 </script> 