<?php
session_start();
require"lib/mConnection.php";
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
								<li><a href="dangkydoanhthu.php"> Đăng ký Khách hàng</a></li>
								<li class="active"><a href="kiemduyetdoanhthu.php"> Duyệt Khách hàng</a></li>
							</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="pilltab2">
							<!--nội dung pilltab2-->
							<div class="panel panel-default">
				<div class="panel-heading">Lọc theo trường tùy biến:</div>
				<div class="panel-body">
				<form action="" method="POST" class="form-inline">
					<div class="form-group">
			        <label for="email">Nhân viên:</label>
			        <select class="form-control" name="manv" style="width: 200px;">
<?php 
			$name=mysql_query("select * from nhanvien where id_nv <> 1");
				while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['id_nv']; ?>"><?php echo $rown['ten']; ?></option>
					<?php }
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
						
						<div class="form-group" align="right">
						<?php
if($_SESSION['id_nv']==18){
	echo '
<button type="button" id="btn_duyet_pt" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span> Duyệt</button>  
<button type="button" id="btn_boduyet_pt" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Bỏ duyệt</button>
	';
}elseif ($_SESSION['id_nv']==19) {
	echo '
<button type="button" id="btn_duyet_tp" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span> Duyệt</button>  
<button type="button" id="btn_boduyet_tp" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Bỏ duyệt</button>
	';
}elseif ($_SESSION['id_nv']==4) {
	echo '
<button type="button" id="btn_duyet_ksnb" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span> Duyệt</button>  
<button type="button" id="btn_boduyet_ksnb" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Bỏ duyệt</button>
	';
}elseif($_SESSION['level']==1){
	echo '
<button type="button" id="btn_duyet_tgd" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span> Duyệt</button>  
<button type="button" id="btn_boduyet_tgd" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Bỏ duyệt</button>
	';
}
						?>
                    	 </div>
                    	<div class="table-responsive">
			               <table class="table table-bordered">
							<thead>
							<tr class="success">
								<th><input type="checkbox" id="checkAll"/></th>
						  		<th>STT</th>
						  		<th>Mã KH</th>
						  		<th>TTính</th>
						  		<th>PThu</th>
						  		<th>% đảm nhận</th>
						  		<th>Nợ ĐK</th>
						  		<th>Thực thu</th>
						  		<th>Tư vấn</th>
						  		<th>INDCT</th>
						  		<th>GIAOCT</th>
						  		<th>PT</th>
						  		<th>TP</th>
								<th>KSNB</th>
								<th>TGĐ</th>
						  		<th width="85px">Chức năng</th>
						  	</tr>
						  	</thead>
						  	<tbody>
						  	<?php
						  	if(empty($_POST)){
						  	$manv = $_SESSION['id_nv'];	
							$thang = date('m');
							$nam = date("Y");	
						  	}else{
						  	$manv = $_POST['manv'];	
							$thang = $_POST['thang'];
							$nam = $_POST['nam'];}
			                $xemdoanhthu = xemdoanhthu($manv,$thang,$nam);
							$stt = 0;
							while ($row_xemdoanhthu = mysql_fetch_array($xemdoanhthu)){
								ob_start();
								$stt++;
							?>
			        		<tr class="roweven" id ="{id_dlkpi}">
			        			<td><input type="checkbox" name="id_dlkpi[]" class="checkall" value="{id_dlkpi}"/></td>
			        			<td><?php echo $stt;?></td>
			        			<td><span  data-toggle="tooltip" title="{congty}">{makh}</span></td>
						  		<td>{tamtinh}</td>
						  		<td>{phaithu}</td>
						  		<td>{damnhan}%</td>
						  		<td>{nodk}</td>
						  		<td>{thucthu}</td>
			        			<td><input disabled type="checkbox" <?php 
			         if(($row_xemdoanhthu["tuvan"])==1){echo 'checked';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["indct"])==1){echo 'checked';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["giaoct"])==1){echo 'checked';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["pt"])==1){echo 'checked';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["tp"])==1){echo 'checked';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["ksnb"])==1){echo 'checked';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["tgd"])==1){echo 'checked';}?>/></td>
			        			<td width="85px">
								 <div class="btn-group">
								  <button type="button" data-toggle="modal" data-target="#dataModal" data-id="{id_dlkpi}" class="btn btn-primary btn-xs xemdlkpi">Xem</button>
								</div>			
			                	</td>
			                </tr>
			                <?php
				$s = ob_get_clean();
				$s = str_replace("{id_dlkpi}", $row_xemdoanhthu["id_dlkpi"], $s);
				$s = str_replace("{makh}", $row_xemdoanhthu["makh"], $s);
				$s = str_replace("{congty}", $row_xemdoanhthu["congty"], $s);
				$s = str_replace("{tamtinh}", number_format($row_xemdoanhthu["tamtinh"],2,'.',','), $s);
				$s = str_replace("{phaithu}", number_format($row_xemdoanhthu["phaithu"],2,'.',','), $s);
				$s = str_replace("{damnhan}", number_format($row_xemdoanhthu["damnhan"],2,'.',','), $s);
				$s = str_replace("{tuvan}", $row_xemdoanhthu["tuvan"], $s);
				$s = str_replace("{indct}", $row_xemdoanhthu["indct"], $s);
				$s = str_replace("{giaoct}", $row_xemdoanhthu["giaoct"], $s);
				$s = str_replace("{nodk}", $row_xemdoanhthu["nodk"], $s);
				$s = str_replace("{thucthu}", $row_xemdoanhthu["thucthu"], $s);
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
 <script>  
 $(document).ready(function(){      
    $(".xemdlkpi").click(function(){
			var id = $(this).attr('data-id');
			$.post("kpi/xemdlkpi.php", {id: id}, function(data){
				$("#dlkpi_chitiet").html(data);
			})
		});
    $('[data-toggle="tooltip"]').tooltip(); 
	$('#checkAll').change(function() {
			    var checkboxes = $(this).closest('table').find('.checkall');
			    if($(this).is(':checked')) {
			        checkboxes.prop('checked', true);
			    } else {
			        checkboxes.prop('checked', false);
			    }
	});
	$('#btn_duyet_pt').click(function(){  
           if(confirm("Bạn có chắc chắn là muốn Duyệt nội dung này không?"))  
           {  
                var id = [];  
                $(':checkbox:checked').each(function(i){  
                     id[i] = $(this).val();  
                });  
                if(id.length === 0) //tell you if the array is empty  
                {  
                     alert("Vui lòng chọn ít nhất một thư để Duyệt");  
                }  
                else  
                {  
                     $.ajax({  
                          url:'data_ajax/duyet_doanhthu.php',  
                          method:'POST',  
                          data:{id:id},  
                          success:function()  
                          {  
                               for(var i=0; i<id.length; i++)  
                               {  
                                    $('tr#'+id[i]+'').css('background-color', '#ccc');
                                    $('tr#'+id[i]+'').fadeOut('slow');  
                               }  
                          }  
                     });  
                }  
           }  
           else  
           {  
                return false;  
           }  
      });

		$('#btn_boduyet_pt').click(function(){  
           if(confirm("Bạn có chắc chắn là muốn Bỏ duyệt nội dung này không?"))  
           {  
                var id = [];  
                $(':checkbox:checked').each(function(i){  
                     id[i] = $(this).val();  
                });  
                if(id.length === 0) //tell you if the array is empty  
                {  
                     alert("Vui lòng chọn ít nhất một thư để Bỏ duyệt");  
                }  
                else  
                {  
                     $.ajax({  
                          url:'data_ajax/boduyet_doanhthu.php',  
                          method:'POST',  
                          data:{id:id},  
                          success:function()  
                          {  
                               for(var i=0; i<id.length; i++)  
                               {  
                                    $('tr#'+id[i]+'').css('background-color', '#ccc');
                                    $('tr#'+id[i]+'').fadeOut('slow');  
                               }  
                          }  
                     });  
                }  
           }  
           else  
           {  
                return false;  
           }  
      });
		$('#btn_duyet_tp').click(function(){  
           if(confirm("Bạn có chắc chắn là muốn Duyệt nội dung này không?"))  
           {  
                var id = [];  
                $(':checkbox:checked').each(function(i){  
                     id[i] = $(this).val();  
                });  
                if(id.length === 0) //tell you if the array is empty  
                {  
                     alert("Vui lòng chọn ít nhất một thư để Duyệt");  
                }  
                else  
                {  
                     $.ajax({  
                          url:'data_ajax/duyet_doanhthu_tp.php',  
                          method:'POST',  
                          data:{id:id},  
                          success:function()  
                          {  
                               for(var i=0; i<id.length; i++)  
                               {  
                                    $('tr#'+id[i]+'').css('background-color', '#ccc');
                                    $('tr#'+id[i]+'').fadeOut('slow');  
                               }  
                          }  
                     });  
                }  
           }  
           else  
           {  
                return false;  
           }  
      });

		$('#btn_boduyet_tp').click(function(){  
           if(confirm("Bạn có chắc chắn là muốn Bỏ duyệt nội dung này không?"))  
           {  
                var id = [];  
                $(':checkbox:checked').each(function(i){  
                     id[i] = $(this).val();  
                });  
                if(id.length === 0) //tell you if the array is empty  
                {  
                     alert("Vui lòng chọn ít nhất một thư để Bỏ duyệt");  
                }  
                else  
                {  
                     $.ajax({  
                          url:'data_ajax/boduyet_doanhthu_tp.php',  
                          method:'POST',  
                          data:{id:id},  
                          success:function()  
                          {  
                               for(var i=0; i<id.length; i++)  
                               {  
                                    $('tr#'+id[i]+'').css('background-color', '#ccc');
                                    $('tr#'+id[i]+'').fadeOut('slow');  
                               }  
                          }  
                     });  
                }  
           }  
           else  
           {  
                return false;  
           }  
      });
		$('#btn_duyet_ksnb').click(function(){  
           if(confirm("Bạn có chắc chắn là muốn Duyệt nội dung này không?"))  
           {  
                var id = [];  
                $(':checkbox:checked').each(function(i){  
                     id[i] = $(this).val();  
                });  
                if(id.length === 0) //tell you if the array is empty  
                {  
                     alert("Vui lòng chọn ít nhất một thư để Duyệt");  
                }  
                else  
                {  
                     $.ajax({  
                          url:'data_ajax/duyet_doanhthu_ksnb.php',  
                          method:'POST',  
                          data:{id:id},  
                          success:function()  
                          {  
                               for(var i=0; i<id.length; i++)  
                               {  
                                    $('tr#'+id[i]+'').css('background-color', '#ccc');
                                    $('tr#'+id[i]+'').fadeOut('slow');  
                               }  
                          }  
                     });  
                }  
           }  
           else  
           {  
                return false;  
           }  
      });

		$('#btn_boduyet_ksnb').click(function(){  
           if(confirm("Bạn có chắc chắn là muốn Bỏ duyệt nội dung này không?"))  
           {  
                var id = [];  
                $(':checkbox:checked').each(function(i){  
                     id[i] = $(this).val();  
                });  
                if(id.length === 0) //tell you if the array is empty  
                {  
                     alert("Vui lòng chọn ít nhất một thư để Bỏ duyệt");  
                }  
                else  
                {  
                     $.ajax({  
                          url:'data_ajax/boduyet_doanhthu_ksnb.php',  
                          method:'POST',  
                          data:{id:id},  
                          success:function()  
                          {  
                               for(var i=0; i<id.length; i++)  
                               {  
                                    $('tr#'+id[i]+'').css('background-color', '#ccc');
                                    $('tr#'+id[i]+'').fadeOut('slow');  
                               }  
                          }  
                     });  
                }  
           }  
           else  
           {  
                return false;  
           }  
      });
		$('#btn_duyet_tgd').click(function(){  
           if(confirm("Bạn có chắc chắn là muốn Duyệt nội dung này không?"))  
           {  
                var id = [];  
                $(':checkbox:checked').each(function(i){  
                     id[i] = $(this).val();  
                });  
                if(id.length === 0) //tell you if the array is empty  
                {  
                     alert("Vui lòng chọn ít nhất một thư để Duyệt");  
                }  
                else  
                {  
                     $.ajax({  
                          url:'data_ajax/duyet_doanhthu_tgd.php',  
                          method:'POST',  
                          data:{id:id},  
                          success:function()  
                          {  
                               for(var i=0; i<id.length; i++)  
                               {  
                                    $('tr#'+id[i]+'').css('background-color', '#ccc');
                                    $('tr#'+id[i]+'').fadeOut('slow');  
                               }  
                          }  
                     });  
                }  
           }  
           else  
           {  
                return false;  
           }  
      });

		$('#btn_boduyet_tgd').click(function(){  
           if(confirm("Bạn có chắc chắn là muốn Bỏ duyệt nội dung này không?"))  
           {  
                var id = [];  
                $(':checkbox:checked').each(function(i){  
                     id[i] = $(this).val();  
                });  
                if(id.length === 0) //tell you if the array is empty  
                {  
                     alert("Vui lòng chọn ít nhất một thư để Bỏ duyệt");  
                }  
                else  
                {  
                     $.ajax({  
                          url:'data_ajax/boduyet_doanhthu_tgd.php',  
                          method:'POST',  
                          data:{id:id},  
                          success:function()  
                          {  
                               for(var i=0; i<id.length; i++)  
                               {  
                                    $('tr#'+id[i]+'').css('background-color', '#ccc');
                                    $('tr#'+id[i]+'').fadeOut('slow');  
                               }  
                          }  
                     });  
                }  
           }  
           else  
           {  
                return false;  
           }  
      });
 });  
 </script> 