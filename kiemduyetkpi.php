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
								<li><a href="dangkydoanhthu.php">Đăng ký Khách hàng</a></li>
								<li class="active"><a href="#pilltab3" data-toggle="tab">Phê Duyệt KPIs </a></li>
							</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="pilltab3">
								<!--nội dung pilltab3-->
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
						$name=mysql_query("select distinct thang from kqkpi order by thang DESC");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['thang']; ?>"><?php echo $rown['thang']; ?></option>
					<?php } ?>
   				</select></div>
   				<div class="form-group">
                <label for="email">Năm:</label> 
                <select class="form-control" name="nam" style="width: 100px;">
				<?php 
						$name=mysql_query("select distinct nam from kqkpi order by nam DESC");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['nam']; ?>"><?php echo $rown['nam']; ?></option>
					<?php } ?>
   				</select></div> 
   				<div class="form-group">
               <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-repeat"></span> Xem</button></div>
                </form>
</div></div>  
<div class="form-group" align="right">
<button type="button" id="btn_duyet" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span> Duyệt</button>  
<button type="button" id="btn_boduyet" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Bỏ duyệt</button>
</div>
<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
							<tr class="success">
						  		<th>STT</th>
						  		<th>Mã KPI</th>
						  		<th>KPI</th>
						  		<th>LCV</th>
						  		<th>ĐVT</th>
						  		<th>BC</th>
						  		<th>TS</th>
						  		<th>MT</th>
						  		<th>HĐCT</th>
						  		<th>KQ</th>
						  		<th>Kết quả HĐCT</th>
						  		<th>PT<br/><input type="checkbox" id="checkAllpt"/></th>
						  		<th>TL</th>
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
							$idnv_sohuu = $_SESSION['id_nv'];	
						  	}else{
						  	$manv = $_POST['manv'];	
							$thang = $_POST['thang'];
							$nam = $_POST['nam'];
							$idnv_sohuu = $_SESSION['id_nv'];}
			                $xemkqkpi = pheduyetkpi($manv,$thang,$nam,$idnv_sohuu);
							$stt = 0;
							while ($row_xemkqkpi = mysql_fetch_array($xemkqkpi)){
								ob_start();
								$stt++;
							?>
			        		<tr class="roweven" id ="{id_kqkpi}">
			        			<td><?php echo $stt;?></td>
			        			<td>{makpi}</td>
						  		<td><span  data-toggle="tooltip" title="{chuthich}">{kpi}</span></td>
						  		<td>{lcv}</td>
						  		<td>{dvt}</td>
						  		<td>{bc}</td>
						  		<td>{ts}%</td>
						  		<td>{mt}</td>
			        			<td>{hdct}</td>
			        			<td>{kq}</td>
			        			<td>{ghichu}</td>
			        			<td>
								<?php
				if((($_SESSION['level'])==1)or(($_SESSION['level'])>3)){
					echo "<input disabled class='checkpt' type='checkbox'";
			         if(($row_xemkqkpi["pt"])==1){echo 'checked="checked" ';}echo '/>';
			     }else{
			     	echo "<input class='checkpt' name = 'id_kqkpi[]' value = '".$row_xemkqkpi["id_kqkpi"]."' type='checkbox'";
			         if(($row_xemkqkpi["pt"])==1){echo 'checked="checked" ';}echo '/>';
			     }
								?>
			        			</td>
			        			<td>
			        			<input disabled type='checkbox'
			        <?php if(($row_xemkqkpi["tl"])==1){echo 'checked="checked" ';}?>/>
			        			 </td>
			        			<td>
			        			<input disabled type='checkbox'
			         <?php if(($row_xemkqkpi["tgd"])==1){echo 'checked="checked"';}?>/>
								</td>
			        			<td width="85px">
								 <div class="btn-group">
								  <button type="button" data-toggle="modal" data-target="#dataModal" data-id="{id_kqkpi}" class="btn btn-primary btn-xs xemkqkpi">Xem</button>
								</div>			
			                	</td>
			                </tr>
			                <?php
				$s = ob_get_clean();
				$s = str_replace("{id_kqkpi}", $row_xemkqkpi["id_kqkpi"], $s);
				$s = str_replace("{makpi}", $row_xemkqkpi["makpi"], $s);
				$s = str_replace("{kpi}", $row_xemkqkpi["kpi"], $s);
				$s = str_replace("{lcv}", $row_xemkqkpi["lcv"], $s);
				$s = str_replace("{dvt}", $row_xemkqkpi["dvt"], $s);
				$s = str_replace("{bc}", $row_xemkqkpi["bc"], $s);
				$s = str_replace("{ts}", $row_xemkqkpi["trongso"], $s);
				$s = str_replace("{mt}", $row_xemkqkpi["mt"], $s);
				$s = str_replace("{kq}", $row_xemkqkpi["kq"], $s);
				$s = str_replace("{hdct}", $row_xemkqkpi["hdct"], $s);
				$s = str_replace("{ghichu}", $row_xemkqkpi["ghichu"], $s);
				$s = str_replace("{chuthich}", $row_xemkqkpi["giaithich"], $s);
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
                     <h4 class="modal-title">Chi tiết Kết quả KPIs</h4>  
                </div>  
                <div class="modal-body" id="kqkpi_chitiet">  
                </div>  
                <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>
 <script>  
 $(document).ready(function(){  
 	        
    $(".xemkqkpi").click(function(){
		var id = $(this).attr('data-id');
		$.post("kpi/xemkqkpi.php", {id: id}, function(data){
			$("#kqkpi_chitiet").html(data);
		})
	})
	$('#nap_form').click(function(){  
           location.reload();  
      		});
	$('[data-toggle="tooltip"]').tooltip(); 
	$('#checkAllpt').change(function() {
			    var checkboxes = $(this).closest('table').find('.checkpt');
			    if($(this).is(':checked')) {
			        checkboxes.prop('checked', true);
			    } else {
			        checkboxes.prop('checked', false);
			    }
	});
	$('#btn_duyet').click(function(){  
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
                          url:'data_ajax/duyet_kpis.php',  
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

		$('#btn_boduyet').click(function(){  
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
                          url:'data_ajax/boduyet_kpis.php',  
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