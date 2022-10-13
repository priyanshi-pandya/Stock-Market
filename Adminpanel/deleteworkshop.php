<?php

include "connectiondb.inc.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql = "DELETE FROM workshop WHERE course_id=$id";
    if(mysqli_query($conn, $sql)){
        header("Location: workshop.php?SucessfullyDeleted");
    } else {
        header("Location: workshop.php?SQLError");
        // echo mysqli_error($conn);
    }
}
else{
    header("Location: workshop.php");
}

?>

