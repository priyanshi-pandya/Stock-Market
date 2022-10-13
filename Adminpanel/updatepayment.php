
<?php
     if(isset($_GET['id'])){
        $id=$_GET['id'];
        include "connectiondb.inc.php";
        $sql="UPDATE `login` SET `ispaid` = 1 WHERE `login_id` = $id;";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      }
      header("Location: user.php");
      exit();
 ?>
 