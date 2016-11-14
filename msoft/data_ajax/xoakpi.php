 <?php  
 session_start();
 require"../../lib/mConnection.php";

 	$id = $_POST["id"];
    $sql = "DELETE FROM kpi WHERE id_kpi = '$id'";
    mysql_query($sql);  

 ?> 