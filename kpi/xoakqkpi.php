 <?php  
 session_start();
 require"../lib/mConnection.php";

 	$id = $_POST["id"];
    $sql = "DELETE FROM kqkpi WHERE id_kqkpi = '$id'";
    mysql_query($sql);  

 ?> 