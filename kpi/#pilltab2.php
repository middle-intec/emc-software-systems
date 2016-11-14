<div class="panel panel-default">
	<div class="panel-heading">Lọc theo trường tùy biến:</div>
	<div class="panel-body">
	<form action="kpis_f_view.php" method="GET" class="form-inline">
		<div class="form-group">
        <label for="email">Nhân viên:</label>
        <select class="form-control" name="manv" style="width: 200px;">
				<?php
				$manv = $_SESSION["manv"];
				$name=mysql_query("select * from nhanvien where manv = '$manv'");
				while($rown = mysql_fetch_array($name)){?>
   				<option value="<?php echo $rown["id_nv"]; ?>"><?php echo $rown['ten']; ?></option>
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
						<div class="table-responsive">
						<div class="form-group" align="right">
						<button type="button" id="nap_pilltab2" class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Nạp lại</button>  
                          <button type="button" name="add_DT" id="add_DT" data-toggle="modal" data-target="#add_doanhthu_Modal" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Đăng ký Doanh thu</button>  
                    	 </div>
                    	 <div id="kqkpi_table">
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
						  		<th>KQ</th>
						  		<th>HDCT</th>
						  		<th>PT</th>
						  		<th>TL</th>
						  		<th>TGĐ</th>
						  		<th>Kết quả HĐCT</th>
						  		<th width="85px">Chức năng</th>
						  	</tr>
						  	</thead>
						  	<tbody>
						  	<?php
						  	$manv = $_SESSION['id_nv'];	
							$thang = date("m");
							$nam = date("Y");
			                $xemkqkpi = xemkqkpi($manv,$thang,$nam);
							$stt = 0;
							while ($row_xemkqkpi = mysql_fetch_array($xemkqkpi)){
								ob_start();
								$stt++;
							?>
			        		<tr class="roweven" id ="{id_kqkpi}">
			        			<td><?php echo $stt;?></td>
			        			<td>{makpi}</td>
						  		<td>{kpi}</td>
						  		<td>{lcv}</td>
						  		<td>{dvt}</td>
						  		<td>{bc}</td>
						  		<td>{ts}%</td>
						  		<td>{mt}</td>
			        			<td>{kq}</td>
			        			<td>{hdct}</td>
			        			<td><input disabled="disabled" type="checkbox" <?php 
			         if(($row_xemkqkpi["pt"])==1){echo ' checked="checked"';}
			        			 ?> /></td>
			        			<td><input disabled="disabled" type="checkbox"<?php 
			         if(($row_xemkqkpi["tl"])==1){echo ' checked="checked"';}
			        			 ?> /></td>
			        			<td><input disabled="disabled" type="checkbox"<?php 
			         if(($row_xemkqkpi["tgd"])==1){echo ' checked="checked"';}
			        			 ?> /></td>
			        			<td>{ghichu}</td>
			        			<td width="85px">
								 <div class="btn-group">
								  <button type="button" data-toggle="modal" data-target="#dataModal" data-id="{id_kqkpi}" class="btn btn-primary btn-xs xemkqkpi">Xem</button>
								  <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
								    <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" role="menu">
								    <li><a class="btn btn-default btn-xs" href="kpis_edit.php?id_kqkpi={id_kqkpi}">Sửa</a></li>
								    <li><a class="btn btn-default btn-xs xoakqkpi" data-id="{id_kqkpi}">Xóa</a></li>
								  </ul>
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
				echo $s; 
				}
				?>
							</tbody>
						   </table>
						<div class="panel panel-default">
						   	<div class="col-sm-2"> 
						   	<div class="form-group">
		  						<label> KPI giao: <?php echo $total_kpi;?></label>
						   	</div></div>
							<div class="col-sm-1"> 
							<div class="form-group">
		  						<label> Trọng số: <?php echo $total_trongso;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> A: <?php echo $total_trongsoA;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> B: <?php echo $total_trongsoB;?>%</label>
						   	</div></div>
						   	<div class="col-sm-2"> 
						   	<div class="form-group">
		  						<label> TLHT KPI: <?php echo $total_tlhtkpi;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> A: <?php echo $total_tylets_a;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> B: <?php echo $total_tylets_b;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> PT: <?php echo $total_pt;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> TL: <?php echo $total_tl;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> TGD: <?php echo $total_tgd;?>%</label>
						   	</div></div>
						   	</div>
						   </div>
						</div>
<script>
	$(document).ready(function(){
		$('#nap_pilltab2').click(function(){  
           location.reload();  
      		});
	});
</script>