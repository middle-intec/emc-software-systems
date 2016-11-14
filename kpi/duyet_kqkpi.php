 <?php  
 session_start();
 require"../lib/mConnection.php";
$duyet = 1;
 if(isset($_POST["id"]))  
 {  
      foreach($_POST["id"] as $id)  
      {  
           $sql = "UPDATE kqkpi SET duyet1 = '$duyet', duyet2 = '$duyet', duyet3 = '$duyet', duyet4 = '$duyet' WHERE id_kqkpi = '".$id."'";
           mysql_query($sql);  
      }  
 }  
 ?>  