<?php

include "connectiondb.inc.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $rs = mysqli_query($conn, "update login set a_deleted=0 where login_id=$id");
    if($rs){
        header("Location: user1.php?ActivatedSuccessfully");
        exit();
    }
    else{
        header("Location: user1.php?SQLError");
        exit();
    }
}
else{
    header("Location: user1.php?SQLError");
    exit();
}

?>