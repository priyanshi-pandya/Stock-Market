<?php

include "connectiondb.inc.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql = "DELETE FROM blog WHERE blog_id=$id";
    if(mysqli_query($conn, $sql)){
        header("Location: blog.php?SucessfullyDeleted");
    } else {
        header("Location: blog.php?SQLError");
        // echo mysqli_error($conn);
    }
}
else{
    header("Location: blog.php");
}

?>

