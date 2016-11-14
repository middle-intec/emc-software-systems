<?php
require"./../lib/mConnection.php";
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
->setCellValue('E1', 'NV QL');

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
$ExportExcel = exportexcelKH();
$i = 2; $stt = 1;
while ($row = mysql_fetch_array($ExportExcel)) {
//    array_push($arrExportExcel, new ExportExcel($row["congty"], $row["tel"], $row["donvi"]));
    $objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue('A'.$i, $stt++)
    ->setCellValue('B'.$i, $row["congty"])
    ->setCellValue('C'.$i, $row['tel'])
    ->setCellValue('D'.$i, $row['donvi'])
    ->setCellValue('E'.$i, $row['ten']);
    $i++;
}
//ghi du lieu vao file,định dạng file excel 2007
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Danh Sach KH EMC.xlsx"');
header('Cache-Control: max-age=0');
if (isset($objWriter)) {
    $objWriter->save('php://output');
}
    ?>