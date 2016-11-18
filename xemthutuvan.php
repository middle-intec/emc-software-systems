<?php
session_start();
require"lib/mConnection.php";
require"lib/quanli.php";
?>
<?php 
	if (!isset($_SESSION["id_nv"]) ){
	header("location: index.php");}
	$manv = $_GET["manv"];
	settype($manv,"int");
	$thang = $_GET["thang"];
	settype($thang,"int");
	$nam = $_GET["nam"];
	settype($nam,"int");
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
				<h1 class="page-header">Hệ Thống Thư Tư Vấn</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
				<div class="panel-heading">Thư tư vấn tháng: <?php echo $thang; ?>/<?php echo $nam; ?></div>
				<div class="panel-body">
              <div class="abc">
               <a class="btn btn-primary" href="javascript:history.go(-1)">Trở về</a>
               <a class="btn btn-primary" href="vietthutuvan.php">Viết Thư</a>
               <?php
               if(($_SESSION["level"])<=1){
               	echo '<a target="_blank" class="btn btn-primary" href="download/download.php?thang='.$thang.'&nam='.$nam.'">Xuất ra Excel</a>';
               	echo ' <a target="_blank" class="btn btn-primary" href="download/downloadNV.php?manv='.$manv.'&thang='.$thang.'&nam='.$nam.'">Excel theo NV</a>';
               }elseif(($_SESSION["level"])==4){
               	echo '<a class="btn btn-primary" href="kiemsoatthutuvan.php?thang='.$thang.'&nam='.$nam.'">Kiểm soát thư</a>';
               }
               ?>
              </div>
              <div align="center">  
                     <input type="text" placeholder="Nhập ký tự cần tìm" name="search" id="search" class="form-control" />  
                </div>
                <div class="abc">
               <?php
               if(($_SESSION["level"])<=2){
               	echo '<button type="button" name="btn_duyet" id="btn_duyet" class="btn btn-success">Duyệt</button> ';
               	echo '<button type="button" name="btn_boduyet" id="btn_boduyet" class="btn btn-success">Bỏ duyệt</button>';}
               ?>
              </div>
              <div class="table-responsive">
               <table class="table table-bordered" id="thutuvan_table">
				<thead>
				<tr class="rowheader">
			  		<td width = "1%" align="center">
				  	<input type="checkbox" id="checkAll"/>
					</td><td width = "2%" align="center">
				  	STT
					</td><td width = "21%" align="center">
				  	Công ty
					</td><td width = "5%" align="center">
				  	Số điện thoại
			  		</td><td width = "5%" align="center">
					Thời gian
			  		</td><td width = "5%" align="center">
					Doanh thu
			  		</td><td width = "5%" align="center">
					VAT
			  		</td><td width = "5%" align="center">
				  	Lợi nhuận
			  		</td><td width = "5%" align="center">
					TNDN
			  		</td><td width = "26%" align="center">
					Tư vấn
			  		</td><td width = "7%" align="center">
					Trạng thái
			  		</td><td width = "13%" align="center">
			  		Chức năng
                    </td></tr></thead>
                    <tbody>
                    <?php
                    if((($_SESSION["level"])<=1)&($manv <=2)){
						$vietthutuvan = xemthutuvan($thang,$nam);
                    }else{
                    	$vietthutuvan = vietthutuvan($manv,$thang,$nam);
                    }
				$stt = 0;
				while ($row_vietthutuvan = mysql_fetch_array($vietthutuvan)){
					ob_start();
					$stt++;
				?>
        		<tr class="roweven" id ="{id_thutuvan}">
        			<td align="center">
        			<?php
        			if((($row_vietthutuvan['duyet'])!=1)&(($_SESSION['level'])>=2)){
        				echo '<input type="checkbox" name="id_thutuvan[]" class="duyet_thutuvan" value="{id_thutuvan}"/>';
        			}elseif(($_SESSION['level'])==1){
        				echo '<input type="checkbox" name="id_thutuvan[]" class="duyet_thutuvan" value="{id_thutuvan}"/>';
        			}
        			?>
        			</td><td align="center">
				  	<span>
				  		<?php echo $stt;?>
				  	</span>
			  		</td><td align="left">
				  	<span>				  	
				  	<!-- Bắt sự kiện Popup -->
  					<a href="#" class="tbtuvan" data-toggle="modal" data-id="{id_thutuvan}" data-target="#myModal">{congty}</a>
				  	</span>
			  		</td><td align="center">
				  	<span>
				  		{tel}
				  	</span>
			  		</td><td align="center">
				  	<span>
				  		{tgian}	
				  	</span>
			  		</td><td align="center">
					<span>
						{dt}
					</span>
			  		</td><td align="center">
					<span>
						{vat}
					</span>
			  		</td><td align="center">
				  	<span>
				  		{loinhuan}
				  	</span>
			  		</td><td align="center">
				  	<span>
				  		{tndn}
				  	</span>
			  		</td><td align="center">
				  	<span>
				  		{tuvan}
				  	</span>
			  		</td><td align="center">
				  	<span>
				  		<?php
				  		if(($row_vietthutuvan["duyet"])==1){
				  			echo '
				  			<div class="alert-success">
  							<strong>Giám đốc đã duyệt</strong></div>';
				  		}elseif(($row_vietthutuvan["duyet"])==2){
				  			echo '<div class="alert-info">
  							<strong>Phụ trách đã duyệt</strong></div>';
				  		}else{
				  			echo '<div class="alert-danger">
  							<strong>Chưa duyệt</strong></div>';
				  		}
				  		?>
				  	</span>
			  		</td>
			  		<?php
			  		$CurrentThang = date("m");
					$level = $_SESSION["level"];
			  		if((($row_vietthutuvan["duyet"])==1)&($level>=2)){
			  			echo '<td align="center">
			  			<span>Hết hạn Sửa hoặc Xóa </span>
	                	</td>';
			  		}elseif ((($row_vietthutuvan["duyet"])==2)&($level>=3)) {
			  			echo '<td align="center">
			  			<span>Hết hạn Sửa hoặc Xóa </span>
	                	</td>';
			  		}else{
				  		echo '<td align="center">
				  		<a id="Edit" class="btn-record" href="suathutuvan.php?id_thutuvan={id_thutuvan}"><div class="edit"></div>Sửa</a>';
				  		?>
	                    <a onclick = "return confirm('Bạn có chắc là muốn xóa không ?')" id="Delete" class="btn-record" showdeletebutton="True" href="xoathutuvan.php?id_thutuvan=<?php echo '{id_thutuvan}">
	                    <div class="del"></div>Xóa</a>
	                	</td>';
	                }?>
                	</tr> 
              <?php
				$s = ob_get_clean();
				$s = str_replace("{id_thutuvan}", $row_vietthutuvan["id_thutuvan"], $s);
				$s = str_replace("{congty}", $row_vietthutuvan["congty"], $s);
				$s = str_replace("{tel}", $row_vietthutuvan["tel"], $s);
				$s = str_replace("{donvi}", $row_vietthutuvan["donvi"], $s);
				$s = str_replace("{tgian}", $row_vietthutuvan["tgian"], $s);
				$s = str_replace("{dt}", $row_vietthutuvan["dt"], $s);
				$s = str_replace("{vat}", $row_vietthutuvan["vat"], $s);
				$s = str_replace("{loinhuan}", $row_vietthutuvan["ln"], $s);
				$s = str_replace("{tndn}", $row_vietthutuvan["tndn"], $s);
				$s = str_replace("{tuvan}", $row_vietthutuvan["tuvan"], $s);
				echo $s; 
				}
				?>
			</tbody>
		</table></div>
				</div></div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	

	<!-- Begin Popup Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog"> 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nội dung Demo</h4>
        </div>
        <div class="modal-body datapopup">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	<!-- End Popup Modal -->
	<?php require"block/profile.php"; ?>
	<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#thutuvan_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }

			$('#checkAll').change(function() {
			    var checkboxes = $(this).closest('table').find(':checkbox');
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
                          url:'data_ajax/duyet_thutuvan.php',  
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
                          url:'data_ajax/boduyet_thutuvan.php',  
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
</body>
</html>