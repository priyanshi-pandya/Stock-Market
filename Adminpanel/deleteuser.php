<?php

include "connectiondb.inc.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $qry = "update login set a_deleted=1 where login_id=$id";
    //$sql = "DELETE FROM login WHERE login_id=$id";
    if(mysqli_query($conn, $qry)){
        header("Location: user1.php?SucessfullyDeactivated");
    } else {
        header("Location: user1.php?SQLError");
        exit();
    }
}
else{
    header("Location: user1.php?SQLError");
    exit();
}

?>

