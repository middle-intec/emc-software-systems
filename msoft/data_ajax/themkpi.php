<?php  
session_start();
require"../../lib/mConnection.php";
require"../../lib/quanli.php";
 ?> 
<?php
  $mapb = $_SESSION["pb"];
  $result = mysql_query(" SELECT count(id_kpi) as total, sum(trongso) as ts, sum(if(lcv='A',trongso,0)) as ts_a, sum(if(lcv='B',trongso,0)) as ts_b from kpi where id_pb = '$mapb'");
  $row = mysql_fetch_assoc($result);
  $total_kpi = $row['total'];
  $total_trongso = $row['ts'];
  $total_trongsoA = $row['ts_a'];
  $total_trongsoB = $row['ts_b'];
?>
 <?php  
 if(!empty($_POST))  
 {  
      $output = ''; 
      $makpi = $_POST["makpi"];
      $makfs = $_POST["makfs"];   
      $tenkpi = $_POST["tenkpi"];
      $dvt = $_POST["dvt"];  
      $bc = $_POST["bc"];
      $trongso = $_POST["trongso"];
      $mt = $_POST["mt"];
      $id_pb = $_POST["id_pb"];
      $id_nh = $_POST["id_nh"];
      $lcv = $_POST["lcv"];
      $idnv_sohuu = $_POST["idnv_sohuu"];
      $chuthich = $_POST["chuthich"];
      $query = "  
      INSERT INTO kpi
      VALUES(null, '$makpi', '$makfs', '$tenkpi', '$dvt', '$bc', '$trongso', '$mt', '$id_pb', '$id_nh', 0, 0, 0, 0, '$lcv', '$idnv_sohuu', '$chuthich');  
      ";  
      if(mysql_query($query))  
      {  
           $output .= '<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Thành công!</strong> Bạn đã thêm KPI mới thành công.
</div>'; 
           $output .= '  
              <table class="table table-bordered">
              <thead>
              <tr class="success">
                  <th>STT</th>
                  <th>Mã KPI</th>
                  <th>Mã KFS</th>
                  <th>KPIs</th>
                  <th>ĐVT</th>
                  <th>BC</th>
                  <th>TS</th>
                  <th>MT</th>
                  <th>Phòng Ban</th>
                  <th>Nhóm</th>
                  <th>TS_P</th>
                  <th>MT_P</th>
                  <th>TS_CT</th>
                  <th>MT_CT</th>
                  <th>LCV</th>
                  <th>NVSH</th>
                  <th width="90px">Chức năng</th>
                </tr>
                </thead>
                <tbody>
           '; 
              $xemkpi = xemkpis();
              $stt = 0;
              while ($row_xemkpi = mysql_fetch_array($xemkpi)){
                ob_start();
                $stt++;
                $output .= '  
                    <tr class="roweven" id ="{id_kpi}">
                    <td>'.$stt.'</td>
                    <td>'.$row_xemkpi['makpi'].'</td>
                    <td>'.$row_xemkpi['makfs'].'</td>
                    <td><span  data-toggle="tooltip" title="'.$row_xemkpi['chuthich'].'">'.$row_xemkpi['tenkpi'].'</span></td>
                  <td>'.$row_xemkpi['dvt'].'</td>
                  <td>'.$row_xemkpi['bc'].'</td>
                  <td>'.$row_xemkpi['trongso'].'%</td>
                    <td>'.$row_xemkpi['mt'].'</td>
                    <td>'.$row_xemkpi['id_pb'].'</td>
                  <td>'.$row_xemkpi['id_nh'].'</td>
                  <td>'.$row_xemkpi['trongso_p'].'%</td>
                  <td>'.$row_xemkpi['mt_p'].'</td>
                  <td>'.$row_xemkpi['trongso_ct'].'%</td>
                  <td>'.$row_xemkpi['mt_ct'].'</td>
                  <td>'.$row_xemkpi['lcv'].'</td>
                  <td>'.$row_xemkpi['idnv_sohuu'].'</td>
                    <td width="90px">
                 <div class="btn-group">
                  <a class="btn btn-primary btn-xs" href="ql_kpi_edit.php?id_kpi='.$row_xemkpi['id_kpi'].'">Sửa</a>
                  <a class="btn btn-primary btn-xs xoakpi" data-id="'.$row_xemkpi['id_kpi'].'">Xóa</a>
                </div>      
                        </td>
                      </tr> 
                ';  
           }  
           $output .= '</tbody>
               </table>
            <div class="panel panel-default">
                <div class="col-sm-3"> 
                <div class="form-group">
                  <label> Tổng KPI: '.$total_kpi.'</label>
                </div></div>
              <div class="col-sm-3"> 
              <div class="form-group">
                  <label> Tổng Trọng số: '.$total_trongso.'%</label>
                </div></div>
                <div class="col-sm-3"> 
                <div class="form-group">
                  <label> A: '.$total_trongsoA.'%</label>
                </div></div>
                <div class="col-sm-3"> 
                <div class="form-group">
                  <label> B: '.$total_trongsoB.'%</label>
                </div></div>
            </div>
                    ';  
      }  
      echo $output;  
 }  
 ?>  

