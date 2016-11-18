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
	$manv = $_SESSION["id_nv"];
	$result = mysql_query(" SELECT count(id_dlkpi) as total, sum(dthu) as dthu from dlkpi where manv = '$manv'");
	$row = mysql_fetch_assoc($result);
	$total_kpi = number_format($row['total']);
	$total_dthu = number_format($row['dthu'],2);
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
							<div class="panel panel-default">
				<div class="panel-heading">Lọc theo trường tùy biến:</div>
				<div class="panel-body">
				<form action="doanhthu_view.php" method="GET" class="form-inline">
					<div class="form-group">
			        <label for="email">Nhân viên:</label>
			        <select class="form-control" name="manv" style="width: 200px;">
<?php 
				$pb = $_SESSION['pb'];
				if (($_SESSION["level"]) > 2){
				$manv = $_SESSION["manv"];
				$name=mysql_query("select * from nhanvien where manv = '$manv'");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $_SESSION["id_nv"]; ?>"><?php echo $rown['ten']; ?></option>
					<?php }
				}elseif((($_SESSION["level"]) >= 2)&($pb = 3)){
				$name=mysql_query("select * from nhanvien where pb = '$pb'");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['id_nv']; ?>"><?php echo $rown['ten']; ?></option>
					<?php }
				}else{
				$name=mysql_query("select * from nhanvien where id_nv <> 1");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['id_nv']; ?>"><?php echo $rown['ten']; ?></option>
					<?php }
				}
?>
		   			</select></div>
		   				<div class="form-group">
		                <label for="pwd">Tháng:</label> 
		                <select class="form-control" name="thang" style="width: 70px;">
						<?php 
								$name=mysql_query("select distinct thang from dlkpi order by thang DESC");
								while($rown = mysql_fetch_array($name)){?>
		   						 <option value="<?php echo $rown['thang']; ?>"><?php echo $rown['thang']; ?></option>
							<?php } ?>
		   				</select></div>
		   				<div class="form-group">
		                <label for="email">Năm:</label> 
		                <select class="form-control" name="nam" style="width: 100px;">
						<?php 
								$name=mysql_query("select distinct nam from dlkpi order by nam DESC");
								while($rown = mysql_fetch_array($name)){?>
		   						 <option value="<?php echo $rown['nam']; ?>"><?php echo $rown['nam']; ?></option>
							<?php } ?>
		   				</select></div> 
		   				<div class="form-group">
		               <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-repeat"></span> Xem</button></div>
		      	</form>
						</div></div>  
						<div class="table-responsive">
						<div class="form-group" align="right">
						<button type="button" id="nap_pilltab2" class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Nạp lại</button>  
                          <button type="button" name="add_DT" id="add_DT" data-toggle="modal" data-target="#add_doanhthu_Modal" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Đăng ký Doanh thu</button>  
                    	 </div>
                    	 <div id="doanhthu_table">
			               <table class="table table-bordered">
							<thead>
							<tr class="success">
						  		<th>STT</th>
						  		<th>Mã KH</th>
						  		<th>Khách hàng</th>
						  		<th>DT</th>
						  		<th>PThu</th>
						  		<th>Đthu</th>
						  		<th>Tư vấn</th>
						  		<th>INDCT</th>
						  		<th>GIAOCT</th>
						  		<th>BCT</th>
						  		<th>BCTC</th>
						  		<th>PT</th>
						  		<th>TP</th>
								<th>KSNB</th>
								<th>TGĐ</th>
						  		<th width="85px">Chức năng</th>
						  	</tr>
						  	</thead>
						  	<tbody>
						  	<?php
						  	$manv = $_SESSION['id_nv'];	
							$thang = date("m");
							$nam = date("Y");
			                $xemdoanhthu = xemdoanhthu($manv,$thang,$nam);
							$stt = 0;
							while ($row_xemdoanhthu = mysql_fetch_array($xemdoanhthu)){
								ob_start();
								$stt++;
							?>
			        		<tr class="roweven" id ="{id_dlkpi}">
			        			<td><?php echo $stt;?></td>
			        			<td>{makh}</td>
			        			<td>{congty}</td>
						  		<td>{dthu}</td>
						  		<td>{phaithu}</td>
						  		<td>{dathu}</td>
			        			<td><input disabled type="checkbox" <?php 
			         if(($row_xemdoanhthu["tuvan"])==1){echo ' checked="checked"';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["indct"])==1){echo ' checked="checked"';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["giaoct"])==1){echo ' checked="checked"';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["bct"])==1){echo ' checked="checked"';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["bctc"])==1){echo ' checked="checked"';}?>/></td>
			        			<td><input type="checkbox"<?php 
			         if(($row_xemdoanhthu["pt"])==1){echo ' checked="checked"';}?>/></td>
			        			<td><input type="checkbox"<?php 
			         if(($row_xemdoanhthu["tp"])==1){echo ' checked="checked"';}?>/></td>
			        			<td><input type="checkbox"<?php 
			         if(($row_xemdoanhthu["ksnb"])==1){echo ' checked="checked"';}?>/></td>
			        			<td><input type="checkbox"<?php 
			         if(($row_xemdoanhthu["tgd"])==1){echo ' checked="checked"';}?>/></td>
			        			<td width="85px">
								 <div class="btn-group">
								  <button type="button" data-toggle="modal" data-target="#dataModal" data-id="{id_dlkpi}" class="btn btn-primary btn-xs xemdlkpi">Xem</button>
								  <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
								    <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" role="menu">
								    <li><a class="btn btn-default btn-xs" href="doanhthu_edit.php?id_dlkpi={id_dlkpi}">Sửa</a></li>
								    <li><a class="btn btn-default btn-xs xoadlkpi" data-id="{id_dlkpi}">Xóa</a></li>
								  </ul>
								</div>			
			                	</td>
			                </tr>
			                <?php
				$s = ob_get_clean();
				$s = str_replace("{id_dlkpi}", $row_xemdoanhthu["id_dlkpi"], $s);
				$s = str_replace("{makh}", $row_xemdoanhthu["makh"], $s);
				$s = str_replace("{congty}", $row_xemdoanhthu["congty"], $s);
				$s = str_replace("{dthu}", $row_xemdoanhthu["dthu"], $s);
				$s = str_replace("{phaithu}", $row_xemdoanhthu["phaithu"], $s);
				$s = str_replace("{dathu}", $row_xemdoanhthu["dathu"], $s);
				$s = str_replace("{tuvan}", $row_xemdoanhthu["tuvan"], $s);
				$s = str_replace("{indct}", $row_xemdoanhthu["indct"], $s);
				$s = str_replace("{giaoct}", $row_xemdoanhthu["giaoct"], $s);
				$s = str_replace("{bct}", $row_xemdoanhthu["bct"], $s);
				$s = str_replace("{bctc}", $row_xemdoanhthu["bctc"], $s);
				$s = str_replace("{sailoi}", $row_xemdoanhthu["sailoi"], $s);
				$s = str_replace("{hailong}", $row_xemdoanhthu["hailong"], $s);
				$s = str_replace("{kytiep}", $row_xemdoanhthu["kytiep"], $s);
				$s = str_replace("{gthdmoi}", $row_xemdoanhthu["gthdmoi"], $s);
				$s = str_replace("{dvkhac}", $row_xemdoanhthu["dvkhac"], $s);
				$s = str_replace("{pt}", $row_xemdoanhthu["pt"], $s);
				$s = str_replace("{tp}", $row_xemdoanhthu["tp"], $s);
				$s = str_replace("{ksnb}", $row_xemdoanhthu["ksnb"], $s);
				$s = str_replace("{tgd}", $row_xemdoanhthu["tgd"], $s);
				echo $s; 
				}
				?>
							</tbody>
						   </table>
						<div class="panel panel-default">
						   	<div class="col-sm-2"> 
						   	<div class="form-group">
		  						<label> Tổng KH: <?php echo $total_kpi;?></label>
						   	</div></div>
							<div class="col-sm-1"> 
							<div class="form-group">
		  						<label> Doanh thu: <?php echo $total_dthu;?></label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> Phải thu: <?php ?></label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> Đã thu: <?php ?></label>
						   	</div></div>
						   	<div class="col-sm-2"> 
						   	<div class="form-group">
		  						<label></label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label></label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label></label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label></label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label></label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label></label>
						   	</div></div>
						   	</div>
						   </div>
						</div>

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