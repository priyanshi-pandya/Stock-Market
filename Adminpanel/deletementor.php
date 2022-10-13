<?php

include "connectiondb.inc.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $sql = "DELETE FROM mentorship  WHERE mentorship_id=$id";
    if(mysqli_query($conn, $sql)){
        header("Location: mentorship.php?SucessfullyDeactivated");
    } else {
        header("Location: mentorship.php?SQLError");
        // echo mysqli_error($conn);
    }
}
else{
    header("Location: mentorship.php");
}

?>

