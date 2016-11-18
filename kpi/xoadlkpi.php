 <?php  
 session_start();
 require"../lib/mConnection.php";

 	$id = $_POST["id"];
    $sql = "DELETE FROM dlkpi WHERE id_dlkpi = '$id'";
    mysql_query($sql);  

 ?> 