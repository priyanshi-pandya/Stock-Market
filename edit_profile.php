<?php
    session_start();
    if(!isset($_SESSION["useremail"])){
        header("Location: account.php");
    }
    include "connectiondb.inc.php";
    
    var_dump($_POST);
    $id=$_POST['uid'];
    $sname=$_POST['name'];
    $password=$_POST['pwd'];
    $email=$_POST['email'];
    
  $qry="UPDATE login SET name='".$sname."',password='".$password."',email='".$email."' WHERE login_id=$id";
    $rs=mysqli_query($conn,$qry);
    if($rs)
    {
      echo "Success ";
      header("location:index.php");

    }
    else
    {
      die("fail".mysqli_error($conn));
    }

?>