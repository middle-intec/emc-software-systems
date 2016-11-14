<?php
require"../lib/mConnection.php";
require"../lib/quanli.php";
?>
<?php
//luu cac thong tin vao file excel
require_once '../PHPExcel/PHPExcel.php';
$objPHPExcel = new PHPExcel();
 
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1', 'STT')
->setCellValue('B1', 'Công ty')
->setCellValue('C1', 'Số điện thoại')
->setCellValue('D1', 'Đơn vị')
->setCellValue('E1', 'Thời gian')
->setCellValue('F1', 'Doanh thu')
->setCellValue('G1', 'VAT')
->setCellValue('H1', 'Lợi nhuận')
->setCellValue('I1', 'TNDN')
->setCellValue('J1', 'Tư vấn')
->setCellValue('K1', 'Nội dung')
->setCellValue('L1', 'Ký tự')
->setCellValue('M1', 'NV QL')
->setCellValue('N1', 'Duyệt');

$objPHPExcel->getActiveSheet()->setTitle('Thư Tư Vấn EMC');
// Set document properties
$objPHPExcel->getProperties()->setCreator("Middle InTec")
                             ->setLastModifiedBy("Middle InTec")
                             ->setTitle("Hệ thống thư tư vấn EMC")
                             ->setSubject("Hệ thống thư tư vấn EMC")
                             ->setDescription("Hệ thống thư tư vấn EMC. Bản quyền thuộc EMC SOFTARE SYSTEMS")
                             ->setKeywords("thu tu van emc")
                             ->setCategory("Thu Tu Van");

// Set default font
$objPHPExcel->getDefaultStyle()->getFont()->setName('Times New Roman')
                                          ->setSize(13);
 

//tao 1 class
//class ExportExcel
//{
//    var $congty;
//    var $tel;
//    var $donvi;
//    function ExportExcel($_congty, $_tel, $_donvi)
//    {
//        $this->congty = $_congty;
//        $this->tel = $_tel;
//        $this->donvi = $_donvi;
//    }
//}



//set gia tri cho cac cot du lieu
//$arrExportExcel = array();
$thang = $_GET['thang'];
$nam = $_GET['nam'];                                          
$ExportExcel = exportexcel($thang,$nam);
$i = 2; $stt = 1;
while ($row = mysql_fetch_array($ExportExcel)) {
//    array_push($arrExportExcel, new ExportExcel($row["congty"], $row["tel"], $row["donvi"]));
    $donvi = $row['donvi'];
    $tgian = $row['tgian'];
    $dt = $row['dt'];
    if(strlen($dt)>0){
        $dthu = 'DT:'.$dt.';';
    }else{$dthu = '';}

    $ln = $row['ln'];
    if(strlen($ln)>0){
        $lnhuan = 'LN:'.$ln.';';
    }else{$lnhuan = '';}

    $vat = $row['vat'];
    if(strlen($vat)>0){
        $vatt = 'VAT:'.$vat.';';
    }else{$vatt = '';}
    
    $tndn = $row['tndn'];
    if(strlen($tndn)>0){
        $tndnn = 'TNDN:'.$tndn.';';
    }else{$tndnn = '';}
    
    $tuvan = $row['tuvan'];
    if(strlen($tuvan)>0){
        $tuvann = 'D.nghi:'.$tuvan.'';
    }else{$tuvann = '';}
    
    $noidungthu = 'TB: D.vi '.$donvi.' '.$tgian.' co: '.$dthu.' '.$lnhuan.' '.$vatt.' '.$tndnn.' '.$tuvann.'
    EMC–Nguoi tro ly dac luc cho DN!';
    $dem = strlen($noidungthu)-5;
    if(($row["duyet"])==1){
    $duyet = 'Giám đốc đã duyệt';
    }elseif(($row["duyet"])==2){
    $duyet ='Phụ trách đã duyệt';
    }else{$duyet ='Chưa duyệt';}
    $objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue('A'.$i, $stt++)
    ->setCellValue('B'.$i, $row["congty"])
    ->setCellValue('C'.$i, $row['tel'])
    ->setCellValue('D'.$i, $row['donvi'])
    ->setCellValue('E'.$i, $row['tgian'])
    ->setCellValue('F'.$i, $row['dt'])
    ->setCellValue('G'.$i, $row['vat'])
    ->setCellValue('H'.$i, $row['ln'])
    ->setCellValue('I'.$i, $row['tndn'])
    ->setCellValue('J'.$i, $row['tuvan'])
    ->setCellValue('K'.$i, $noidungthu)
    ->setCellValue('L'.$i, $dem)
    ->setCellValue('M'.$i, $row['ten'])
    ->setCellValue('N'.$i, $duyet);
    $i++;
}
//ghi du lieu vao file,định dạng file excel 2007
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Thư Tư Vấn EMC.xlsx"');
header('Cache-Control: max-age=0');
if (isset($objWriter)) {
    $objWriter->save('php://output');
}
    ?>