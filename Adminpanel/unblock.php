<?php

include "connectiondb.inc.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $idx = 0;
   // echo $id;
    $rs = mysqli_query($conn, "select * from sub_workshop where login_id=$id");
        if(mysqli_num_rows($rs) > 0){
            $sql = mysqli_query($conn, "update sub_workshop set a_deleted=0 where login_id=$id");
            $idx=1;
        }
        
    
    $rs1 = mysqli_query($conn, "select * from sub_mentorship where login_id=$id");
        if(mysqli_num_rows($rs1) > 0){
            $sql1 = mysqli_query($conn, "update sub_mentorship set a_deleted=0 where login_id=$id");
            $idx=1;
        }
    
    
    
    $rs2 = mysqli_query($conn, "select * from sub_paidtip where login_id=$id");
        if(mysqli_num_rows($rs2) > 0){
            $sql3 = mysqli_query($conn, "update sub_paidtip set a_deleted=0 where login_id=$id");
            $idx=1;
        }
    
    
    if($idx == 1){
        header("Location: user1.php?UnblockedSuccessfully");
        exit();
    }else{
          header("Location: user1.php?SQLError");
          exit();
    }
}else{
    header("Location: user1.php?SQLError");
    exit();
}


?>