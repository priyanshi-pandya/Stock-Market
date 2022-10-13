<?php

include "connectiondb.inc.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql = "DELETE FROM coupon WHERE coupon_id=$id";
    if(mysqli_query($conn, $sql)){
        header("Location: coupon.php?SucessfullyDeleted");
    } else {
        header("Location: coupon.php?SQLError");
        // echo mysqli_error($conn);
    }
}
else{
    header("Location: coupon.php");
}

?>

