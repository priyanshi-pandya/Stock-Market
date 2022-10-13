<?php

    include "connectiondb.inc.php";

    $stock_id=$_GET['id'];

    $sql="SELECT * from freetips WHERE id='$stock_id'";
    $result = mysqli_query($conn, $sql); 
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $timeofresult=date('Y-m-d H:i:s');

    $ep=$row['Stoploss'];

    $npl = ($ep-$row['Entry_Price'])*$row['quantity'];

    $isql="UPDATE freetips SET exit_price='$ep',Result='Stoploss Hit',Time_of_result='$timeofresult',net_p_l=$npl WHERE id='$stock_id';";
    $result=mysqli_query($conn,$isql);

    // echo $row['Target'];
    header("Location: freetipswall.php");



?>