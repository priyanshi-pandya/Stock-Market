<?php

include "connectiondb.inc.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql = "DELETE FROM peicepage WHERE price_id=$id";
    if(mysqli_query($conn, $sql)){
        header("Location: pricing.php?SucessfullyDeleted");
    } else {
        header("Location: pricing.php?SQLError");
        // echo mysqli_error($conn);
    }
}
else{
    header("Location: pricing.php");
}

?>

